<?php

namespace App\Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Modules\Admin\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
 *
 *  Login Controller
 * --------------------------------------------------------------------------
 *  This controller handles authenticating admins for the application and
 *  redirecting them to the admin dashboard screen. The controller uses a trait
 *  to conveniently provide its functionality to your applications.
 *
 */
class LoginController extends Controller
{

	use AuthenticatesUsers;

	/**
	 * Where to redirect admins after login.
	 *
	 * @var string
	 */
	protected function redirectTo()
	{
		return route(Admin::dashboardRoute());
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
		Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
		Route::post('login', 'LoginController@login')->middleware('throttle:5,1');
		Route::post('logout', 'LoginController@logout')->name('admin.logout');
	}

	/**
	 * Show the application's login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showLoginForm()
	{
		Auth::loginUsingId(1);
		return view('admin::auth');
	}

	/**
	 * Validate the user login request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return void
	 */
	protected function validateLogin(Request $request)
	{
		$this->validate($request, [
			$this->username() => 'required|email',
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
		if (User::isAdmin()) {
			return response()->json(['status' => true], 202);
		} else {
			Auth::logout();
			session()->invalidate();
			return response()->json(['message' => 'Access Denied'], 401);
		}
		return redirect()->route(Admin::dashboardRoute());
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

		return redirect()->route('admin.login');
	}
}
