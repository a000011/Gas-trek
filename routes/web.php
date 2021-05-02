<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\exampleController;

Route::get('/', [mainController::class, 'entrance'])
->name('main');


Route::get('/example/{id}', [exampleController::class, 'showSelected']);

Route::get('/example', [exampleController::class, 'show'])
->name('examples');

Route::get('/address', function(){
    return view('address');
})
->name('address');
