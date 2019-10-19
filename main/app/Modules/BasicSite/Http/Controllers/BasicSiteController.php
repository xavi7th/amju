<?php

namespace App\Modules\BasicSite\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Admin\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Modules\BasicSite\Models\Message;
use App\Modules\AppUser\Models\TeamMember;
use App\Modules\AppUser\Models\Testimonial;
use App\Modules\BasicSite\Transformers\TeamMemberTransformer;
use App\Modules\BasicSite\Http\Requests\ContactFormValidation;
use App\Modules\BasicSite\Transformers\TestimonialTransformer;

class BasicSiteController extends Controller
{
	/**
	 * The basic site routes that don't require authentication
	 * @return Response
	 */
	public static function routes()
	{
		Route::group(['middleware' => 'web', 'namespace' => 'App\\Modules\BasicSite\Http\Controllers'], function () {

			Route::get('/{subcat?}', function () {
				return view('basicsite::index');
			})->where('subcat', '^((?!(api|' . Admin::DASHBOARD_ROUTE_PREFIX . '|login|user|artisan|user|_debugbar|css|js|_ignition)).)*')->name('home'); //Matches all routes except routes that start with the list provided.

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

			Route::post('/contact', function (ContactFormValidation $request) {
				Message::create($request->all());
				return response()->json(['status' => true], 201);
			});
		});
	}
}
