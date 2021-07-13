<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller {
	function entrance() {
		$examples = examples::all();
		foreach ($examples as $ex) {
			$ex->img = examples::parseImgs($ex->img);
		}

		$services = [
			['text' => 'Установка ГБО', 'icon' => 'build'],
			['text' => 'Диагностика ГБО', 'icon' => 'assessment'],
			['text' => 'Ремонт ГБО', 'icon' => 'home_repair_service'],
		];

		$advantages = [
			'Заправка в два раза дешевле',
			'Износ двигателя меньше',
			'Автономный пробег больше',
			'Выхлоп становится чище',
			'Ресурс двигателя увеличивается',
		];
		return view('main', [
			'examples' => $examples,
			'services' => $services,
			'advantages' => $advantages,
		]);
	}
}
