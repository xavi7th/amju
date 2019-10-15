<?php

namespace App\Modules\AppUser\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Modules\AppUser\Models\AppUser;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
 *
 *  Login Controller
 * --------------------------------------------------------------------------
 *  This controller handles authenticating users for the application and
 *  redirecting them to your home screen. The controller uses a trait
 *  to conveniently provide its functionality to your applications.
 *
 */
class LoginController extends Controller
{

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	// protected $redirectTo = route('appuser.dashboard');
	protected function redirectTo()
	{
		if (request()->ajax()) {
			if (Auth::appuser()->is_verified()) {
				return response()->json(['status' => true], 202);
			} else {
				Auth::logout();
				return response()->json(['message' => 'Unverified user'], 416);
			}
		}
		return route(User::dashboardRoute());
	}

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	static function routes()
	{
		Route::get('/login', function () {
			return view('appuser::index');
		})->middleware('guest')->name('login');

		Route::post('login', 'LoginController@login');
		Route::post('logout', 'LoginController@logout')->name('appuser.logout');

		// Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('appuser.password.request');
		// Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('appuser.password.email');
		// Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('appuser.password.reset');
		// Route::post('password/reset', 'ResetPasswordController@reset');
	}

	/**
	 * Validate the user login request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return void
	 */
	protected function validateLogin(Request $request)
	{
		// dd($request->all());
		$this->validate($request, [
			$this->username() => 'required|string',
			'password' => 'required|string',
		]);
	}

	/**
	 * The user has been authenticated. We can redirect them to where we want or leave empty for the redirectto property to handle
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  mixed  $user
	 * @return mixed
	 */
	protected function authenticated(Request $request, $user)
	{
		if (!User::isAppUser()) {
			Auth::logout();
			session()->invalidate();
			return response()->json(['message' => 'Access Denied'], 403);
		} else {
			Log::critical($user->email . ' logged into his dashboard');
			if ($request->ajax()) {
				if (Auth::appuser()->is_verified()) {
					return response()->json(['status' => true], 202);
				} else {
					Auth::logout();
					return response()->json(['message' => 'Unverified user'], 416);
				}
			}
			return redirect()->route(User::dashboardRoute());
		}
	}

	/**
	 * Get the login username to be used by the controller.
	 *
	 * @return string
	 */
	public function username()
	{
		return 'email';
	}

	/**
	 * Log the user out of the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function logout(Request $request)
	{
		$this->guard()->logout();

		$request->session()->invalidate();

		return redirect()->route('home');
	}
}
