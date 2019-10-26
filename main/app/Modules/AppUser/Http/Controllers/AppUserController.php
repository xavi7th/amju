<?php

namespace App\Modules\AppUser\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Modules\BasicSite\Models\AppUser;
use App\Modules\AppUser\Transformers\AppuserTransformer;
use App\Modules\AppUser\Http\Requests\EditUserProfileValidation;


class AppUserController extends Controller
{
	/**
	 * The normal user routes that require authentication
	 * @return Response
	 */
	public static function routes()
	{
		LoginController::routes();
		RegisterController::routes();

		Route::group(['middleware' => ['auth', 'appusers', 'verified_users'], 'prefix' => AppUser::DASHBOARD_ROUTE_PREFIX], function () {

			Route::group(['prefix' => 'api'], function () {
				Route::get('/codes', function () {
					return [
						'paymentId' => str_random(20),
						'transactionId' => strtoupper(str_random(28)),
						'verificationCode' => str_random(32),
					];
				});
				Route::get('/profile', function () {
					return (new AppuserTransformer)->transformForAppUser(Auth::appuser());
				});
				Route::put('/profile/edit', function (EditUserProfileValidation $request) {
					// return request()->all();
					Auth::appuser()->update([
						'email' => request('email') ?? Auth::appuser()->email,
						'password' => request('password') ?? Auth::appuser()->unenc_password,
						'name' => request('name') ?? Auth::appuser()->name,
					]);
					return response()->json(['updated' => true], 205);
				});
				Route::put('/withdraw/request', function (Request $request) {
					// return $request;

					/**
					 * Validate account balance
					 */
					// return Auth::appuser()->total_balance();
					if (Auth::appuser()->total_profit_amount() <= 0) {
						return response()->json(['rsp' => 'Your account has not yet generated any profits. Be patient.'], 423);
					} elseif (request('wthAmt') > Auth::appuser()->total_balance()) {
						return response()->json(['rsp' => 'Insufficient funds'], 423);
					}

					/**
					 * Create a withdrawal request entry
					 */
					Auth::appuser()->withdrawal_requests()->create([
						'payment_option' => request('wthPaymentOption'),
						'bitcoin_acc' => request('wthBitcoinAcc'),
						'receiver_name' => request('wthReceiverName'),
						'secret_question' => request('wthSecretQuestion'),
						'secret_answer' => request('wthSecretAnswer'),
						'id_type' => request('wthIDType'),
						'country' => request('wthCountry'),
						'acc_name' => request('wthAccName'),
						'acc_num' => request('wthAccNum'),
						'acc_bank' => request('wthAccBank'),
						'amount' => request('wthAmt')
					]);

					/**
					 * zero the user's balance
					 */
					Auth::appuser()->transactions()->delete();

					return response()->json(['updated' => true], 205);
				});
			});

			Route::get('/{subcat?}', function () {
				return view('appuser::index');
			})->name('appuser.dashboard')->where('subcat', '.*'); //Handle only routes that match the list provided.;
		});
	}
}
