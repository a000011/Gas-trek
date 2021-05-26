<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
class Authenticate extends Middleware {
	/**
	 * Get the path the user should be redirected to when they are not authenticated.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return string|null
	 */
	protected function redirectTo($request) {
		if ($request->expectsJson()) {
			if (User::where(['id', Auth::user()->id])) {
				return $next($request);
			} else {
				return route('login');
			}
		}
	}
}
