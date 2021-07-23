<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\examples;
use App\Models\Whall;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class adminController extends Controller {
	function auth(Request $request) {
		return view('admin.adminAuth');
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
			return view('admin.adminPanelExample', [
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
					'storage/' .
					$image->storeAs(
						'images/'.$request->input('car_name'),
						++$num . '.' . $image->extension()
					) .
					';';
			}
			$example = new examples();
			$example->car_name = $request->input('car_name');
			$example->price = $request->input('price');
			$example->img = $path;
			$example->save();
			return view('admin.adminPanelExample');
		}
	}

	function addRecord(Request $request){
        $curentDate = Carbon::now()->toDateTimeString();

        $validator = Validator::make($request->all(), [
            'record_text' => 'required|Min:4',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('admin.adminPanelWhall', [
                'errors' => $errors,
                'translate' => [
                    'record_text' => 'Название',
                ],
            ]);
        } else {
            $image = $request->file('photo');
            $path = '';
                $path =
                    $path .
                    'storage/' .
                    $image->storeAs(
                        'whall/',
                        $curentDate. '.' . $image->extension()
                    );
            $record = new Whall();
            $record->text = $request->input('record_text');
            $record->img_src = $path;
            $record->date = $curentDate;
            $record->save();
            return view('admin.adminPanelWhall');
        }
    }
}
