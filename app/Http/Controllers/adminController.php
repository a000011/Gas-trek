<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\examples;
use Illuminate\Support\Facades\Validator;

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
		$validator = Validator::make($request->all(), [
			'car_name' => 'required|Min:4',
			'price' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			return view('adminPanel', [
				'errors' => $errors,
				'translate' => [
					'car_name' => 'Название',
					'price' => 'цена',
				],
			]);
		} else {
			$images = $request->file('photos');
			$num = 0;
			$path = '';
			foreach ($images as $image) {
				$path =
					$path .
					'storage/images/' .
					$image->storeAs(
						'public',
						++$num . '.' . $image->extension(),
					) .
					';';
			}
			$example = new examples();
			$example->car_name = $request->input('car_name');
			$example->price = $request->input('price');
			$example->img = $path;
			$example->save();
			return view('adminPanel');
		}
	}
}
