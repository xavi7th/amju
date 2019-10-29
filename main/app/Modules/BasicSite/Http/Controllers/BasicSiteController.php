<?php

namespace App\Modules\BasicSite\Http\Controllers;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Admin\Models\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Modules\BasicSite\Models\AppUser;
use App\Modules\BasicSite\Models\Message;
use App\Modules\AppUser\Models\TeamMember;
use App\Modules\AppUser\Models\Testimonial;
use App\Modules\BasicSite\Transformers\TeamMemberTransformer;
use App\Modules\BasicSite\Http\Requests\ContactFormValidation;
use App\Modules\BasicSite\Transformers\TestimonialTransformer;
use App\Modules\BasicSite\Http\Requests\AccountCreationFormValidation;

class BasicSiteController extends Controller
{
	/**
	 * The basic site routes that don't require authentication
	 * @return Response
	 */
	public static function routes()
	{
		Route::group(['middleware' => 'web', 'namespace' => 'App\\Modules\BasicSite\Http\Controllers'], function () {

			Route::get('/amju/setup/{key?}',  function ($key = null) {

				if ($key == config('app.migration_key')) {
					// dd(config('app.migration_key'));

					try {
						echo '<br>init storage:link...';
						$rsp = Artisan::call('storage:link');
						echo 'done storage:link. Result: ' . $rsp;

						echo '<br>init migrate:fresh...';
						$rsp =  Artisan::call('migrate:fresh');
						echo 'done migrate:fresh. Result: ' . $rsp;

						echo '<br>init module:seed...';
						$rsp =  Artisan::call('module:seed');
						echo 'done module:seed. Result: ' . $rsp;
					} catch (Exception $e) {
						Response::make($e->getMessage(), 500);
					}
				} else {
					App::abort(404);
				}
			});

			Route::get('/{subcat?}', function () {
				return view('basicsite::index');
			})->where('subcat', '^((?!(api|' . Admin::DASHBOARD_ROUTE_PREFIX . '|tinker|_debugbar|css|js|_ignition|ignition-vendor)).)*')->name('home'); //Matches all routes except routes that start with the list provided.

		});


		Route::group(['middleware' => 'web', 'prefix' => 'api'], function () {

			Route::get('testimonials', function () {
				$testimonials = Testimonial::all();

				return (new TestimonialTransformer)->collectionTransformer($testimonials, 'transformForHomePage');
			});

			Route::get('team', function () {
				$teams = TeamMember::all();

				return (new TeamMemberTransformer)->collectionTransformer($teams, 'transformForHomePage');
			});

			Route::get('faq', function () {
				// $teams = TeamMember::all();

				// return (new TeamMemberTransformer)->collectionTransformer($teams, 'transformForHomePage');
			});

			Route::post('/contact', function (ContactFormValidation $request) {
				Message::create($request->all());
				return response()->json(['status' => true], 201);
			});

			Route::post('/account/create', function (AccountCreationFormValidation $request) {
				$url = request()->file('user_passport')->store('public/user_passports');
				// Storage::setVisibility($url, 'public');

				/** Replace the public part of the url with storage to make it accessible on the frontend */
				$url = str_replace_first('public', '/storage', $url);

				//Create an entry into the documents database

				return AppUser::create([
					'full_name' => $request->full_name,
					'email' => $request->email,
					'phone' => $request->phone,
					'bvn' => $request->bvn,
					'gender' => $request->gender,
					'acc_type' => $request->acc_type,
					'acc_num' => rand(001000000, 9999999999),
					'address' => $request->address,
					'dob' => Carbon::parse($request->dob),
					'user_passport' => $url
				]);

				/**
				 * Calculate account Number
				 */
				return response()->json(['status' => true], 201);
			});
		});
	}
}
