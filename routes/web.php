<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

Route::get('/', [mainController::class, 'entrance'])->name('main');


Route::get('/example', function () {
    return view('example');
})->name('examples');
