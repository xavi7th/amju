<?php

namespace App\Modules\Admin\Http\Controllers;

use App\ErrLog;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Modules\AppUser\Models\AppUser;
use App\Modules\BasicSite\Models\Message;
use App\Modules\AppUser\Models\Testimonial;
use App\Modules\AppUser\Models\Transaction;
use App\Modules\AppUser\Models\WithdrawalRequest;
use App\Modules\Admin\Transformers\AdminUserTransformer;
use App\Modules\Transformers\AdminTestimonialTransformer;
use App\Modules\Admin\Transformers\AdminActivityTransformer;
use App\Modules\Admin\Transformers\AdminTransactionTransformer;

class AdminController extends Controller
{
	/**
	 * The admin routes
	 * @return Response
	 */
	public static function routes()
	{
		LoginController::routes();

		Route::group(['middleware' => ['auth', 'admins']], function () {

			Route::group(['prefix' => 'api'], function () {

				Route::get('users', function () {
					// return request()->all();

					$users = AppUser::when(
						request('sort'),
						function ($query) {
							$sort_params = explode('|', request('sort'));
							$sort_param = $sort_params[0] == 'is_verified' ? 'verified_at' : $sort_params[0];
							$sort_type = $sort_params[1];

							return $query->orderBy($sort_param, $sort_type);
						},
						function ($query) {
							return $query->latest();
						}
					)
						->when(request('filter'), function ($query) {
							$filter = request('filter');
							return $query->where('name', 'LIKE',  "%$filter%")->orWhere('email', 'LIKE', "%$filter%");
						})->paginate(request('per_page'));

					return (new AdminUserTransformer)->collectionTransformer($users, 'transformForAdminViewUsers');
				});

				Route::put('user/verify', function () {
					// return request()->all();
					$user = AppUser::find(request('id'));

					$user->verified_at = $user->is_verified() ? null : now();
					$user->save();

					return ['rsp' => true];
				});


				Route::delete('user/{user}/delete', function (AppUser $user) {
					$user->transactions()->delete();

					return response()->json(['rsp' => $user->delete()], 204);
				});


				Route::get('user/{user}/transactions', function (AppUser $user) {

					// return request()->all();
					$transactions = $user->transactions()->when(
						request('sort'),
						function ($query) {
							$sort_params = explode('|', request('sort'));
							$sort_param = $sort_params[0]; // == 'is_verified' ? 'verified_at' : $sort_params[0];
							$sort_type = $sort_params[1];

							return $query->orderBy($sort_param, $sort_type);
						},
						function ($query) {
							return $query->latest('trans_date');
						}
					)
						->when(request('filter'), function ($query) {
							$filter = request('filter');
							return $query->where(function ($query) use ($filter) {
								$query->where('amount', 'LIKE',  "%$filter%")->orWhere('trans_type', 'LIKE', "%$filter%");
							});
						})->paginate(request('per_page'));

					return (new AdminTransactionTransformer)->collectionTransformer($transactions, 'transformForAdminViewTransactions');
				});

				Route::get('user/{user}/transactions/summary', function (AppUser $user) {
					return [
						'total_deposits' => $user->total_deposit_amount(),
						'total_withdrawals' => $user->total_withdrawal_amount(),
						'total_profits' => $user->total_profit_amount(),
					];
				});

				Route::get('transactions/withdrawals/summary', function () {
					// $transactions = Transaction::where('trans_type', 'withdrawal')->limit(6)->latest('trans_date')->whereDate('trans_date', '>', now()->subWeek())->get();
					$transactions = WithdrawalRequest::limit(6)->latest()->get();
					return (new AdminTransactionTransformer)->collectionTransformer($transactions, 'transformForAdminViewLatestWithdrawalRequestsSummary');
				});

				Route::post('transaction/create', function () {

					// return request()->all();

					try {
						AppUser::find(request('user_id'))->transactions()->create([
							'amount' => request('amount'),
							'trans_type' => request('trans_type'),
							'investment_plan' => request('investment_plan'),
							'trans_date' => Carbon::parse(request('trans_date')),
						]);
						return response()->json(['rsp' => true], 201);
					} catch (\Throwable $e) {
						Log::error($e);
						return response()->json(['rsp' => false], 500);
					}
				});

				Route::delete('transaction/{transaction_id}/delete', function ($transaction_id) {
					return response()->json(['rsp' => Transaction::destroy($transaction_id)], 204);
				});

				Route::put('transaction/update', function () {

					try {
						Transaction::find(request('id'))->update([
							'amount' => request('amount')
						]);
						return response()->json(['rsp' => true], 205);
					} catch (\Throwable $e) {
						Log::error($e);
						return response()->json(['rsp' => false], 500);
					}
				});


				Route::get('testimonials', function () {
					$testimonials = Testimonial::when(
						request('sort'),
						function ($query) {
							$sort_params = explode('|', request('sort'));
							$sort_param = $sort_params[0] == 'is_verified' ? 'verified_at' : $sort_params[0];
							$sort_type = $sort_params[1];

							return $query->orderBy($sort_param, $sort_type);
						},
						function ($query) {
							return $query->latest();
						}
					)
						->when(request('filter'), function ($query) {
							$filter = request('filter');
							return $query->where('name', 'LIKE',  "%$filter%")->orWhere('email', 'LIKE', "%$filter%");
						})->paginate(request('per_page'));

					return (new AdminTestimonialTransformer)->collectionTransformer($testimonials, 'transformForAdminViewTestimonials');
				});


				Route::post('testimonial/create', function () {

					$url = request()->file('user_img')->store('public/testimonial_images');
					$url = str_replace_first('public', '/storage', $url);


					try {
						Testimonial::create([
							'name' => request('name'),
							'city' => request('city'),
							'country' => request('country'),
							'testimonial' => request('testimonial'),
							'img' => $url
						]);
						return response()->json(['rsp' => true], 201);
					} catch (\Throwable $e) {
						Log::error($e);
						return response()->json(['rsp' => false], 500);
					}
				});

				Route::delete('testimonial/{testimonial_id}/delete', function ($testimonial_id) {
					return response()->json(['rsp' => Testimonial::destroy($testimonial_id)], 204);
				});

				Route::put('testimonial/update', function () {

					// return request()->all();

					try {
						Testimonial::find(request('id'))->update([
							'amount' => request('amount')
						]);
						return response()->json(['rsp' => true], 205);
					} catch (\Throwable $e) {
						Log::error($e);
						return response()->json(['rsp' => false], 500);
					}
				});

				Route::delete('withdrawal-request/{request_id}/delete', function ($request_id) {
					return response()->json(['rsp' => WithdrawalRequest::destroy($request_id)], 204);
				});

				Route::get('activities/summary', function () {
					$logs = ErrLog::where('level_name', 'critical')->latest()->limit(6)->whereDate('created_at', '>', now()->subWeek())->get();
					return (new AdminActivityTransformer)->collectionTransformer($logs, 'transformForAdminViewLatestActivitiesSummary');
				});

				Route::delete('activity/{id}/delete', function ($id) {
					// return $id;
					return response()->json(['rsp' => ErrLog::find($id)->update([
						'level_name' => 'SEEN'
					])], 204);
				});

				Route::get('dashboard/statistics', function () {
					return [
						'total_users' => AppUser::count(),
						'total_transactions' => Transaction::where('trans_type', '<>', 'withdrawal')->count(),
						'total_withdrawals' => Transaction::where('trans_type', 'withdrawal')->count(),
						'total_messages' => Message::count(),
					];
				});
			});

			Route::get('/{subcat?}', function () {
				Auth::logout();

				return view('admin::index');
			})->name('admin.dashboard')->where('subcat', '^((?!(api)).)*');
		});
	}
}
