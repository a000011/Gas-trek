<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
		$path = 'storage/images/' . $request->file('photos')->store('public');
		return view('adminPanel');
	}
}
