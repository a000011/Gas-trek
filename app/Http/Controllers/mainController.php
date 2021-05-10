<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;

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

		return view('main', ['examples' => $examples, 'services' => $services]);
	}
}
