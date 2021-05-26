<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\Authenticate;

class adminController extends Controller {
	function auth(Request $request) {
		return view('adminAuth');
	}

	function checkAuth(Request $request) {
		$credentials = $request->only('name', 'password');
		if (Auth::attempt($credentials)) {
			return redirect('/admin_panel');
		}
		Auth::logout();
		return redirect('/admin_panel');
	}

	function addExample(Request $request) {
		dd($request);
	}
}
