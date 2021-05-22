<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller {
	function auth(Request $request) {
		return view('adminAuth');
	}

	function CheckAuth(Request $request) {
		$admin = admin::where([
			['login', '=', $request->input('login')],
			['password', '=', $request->input('password')],
		])->get();
		if ($admin->count() == 0) {
			return view('adminAuth', ['error' => 'auth']);
		} else {
			return view('adminPanel');
		}
	}
}
