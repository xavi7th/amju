<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = null)
	{
		if (Auth::guard($guard)->check()) {
			if ($request->ajax()) {
				if (Auth::appuser() && Auth::appuser()->is_verified()) {
					return response()->json(['status' => true], 202);
				} else {
					return response()->json(['message' => 'Unverified user'], 416);
				}
			}
			return redirect()->route(User::dashboardRoute());
		}

		return $next($request);
	}
}
