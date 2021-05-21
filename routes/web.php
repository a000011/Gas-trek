<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\exampleController;
use App\Http\Controllers\adminController;

Route::any('/', [mainController::class, 'entrance'])->name('main');

Route::get('/example/{id}', [exampleController::class, 'showSelected']);

Route::any('/example', [exampleController::class, 'show'])->name('examples');

Route::any('/address', function () {
	return view('address');
})->name('address');

Route::get('/admin', [adminController::class, 'auth'])->name('auth');
Route::post('/admin', [adminController::class, 'CheckAuth'])->name('auth');
