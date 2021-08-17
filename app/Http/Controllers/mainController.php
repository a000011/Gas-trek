<?php

namespace App\Http\Controllers;

use App\Models\examples;
use App\Models\Whall;


class mainController extends Controller {

    private const ADVANTEGES = [
        'Заправка в два раза дешевле',
        'Износ двигателя меньше',
        'Автономный пробег больше',
        'Выхлоп становится чище',
        'Ресурс двигателя увеличивается',
    ];

    private const SERVICES = [
        ['text' => 'Установка ГБО', 'icon' => 'build'],
        ['text' => 'Диагностика ГБО', 'icon' => 'assessment'],
        ['text' => 'Ремонт ГБО', 'icon' => 'home_repair_service'],
    ];


    function entrance() {
		$examples = examples::all();
		foreach ($examples as $ex) {
			$ex->img = examples::parseImgs($ex->img);
		}

        $records = Whall::orderBy('date', 'desc')->take(3)->get();

		return view('main', [
			'examples' => $examples,
			'services' => self::SERVICES,
			'advantages' => self::ADVANTEGES,
            'records' => $records,
		]);
	}
}
