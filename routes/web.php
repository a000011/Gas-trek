<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\exampleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdminExamplesController;

//Route::any('/', function (){
//    return redirect('https://gas-trek.ru/main');
//});

Route::any('/', [mainController::class, 'entrance'])->name('main');

Route::get('/example/{id}', [exampleController::class, 'showSelected']);

Route::any('/example', [exampleController::class, 'show'])->name('examples');

Route::any('/address', function () {
    return view('address');
})->name('address');

Route::get('/login', [adminController::class, 'auth'])->name('login');

Route::post('/admin', [adminController::class, 'checkAuth'])->name('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin_panel', function () {
        return view('admin.adminPanelExample');
    })->name('adminPanel');

    Route::post('/admin_panel', [adminController::class, 'addExample'])->name(
        'adminPanelExample'
    );

    Route::get('/admin_panel/add_record', function () {
        return view('admin.adminPanelWhall');
    })->name('add_record');

    Route::post('/admin_panel/add_record', [adminController::class, 'addRecord'])->name(
        'adminPanelWhall'
    );

    Route::get('/admin_panel/examples', [AdminExamplesController::class, 'showExamples'])->name('adminExamples');
    Route::post('/admin_panel/examples', [AdminExamplesController::class, 'showExamples'])->name('adminExamples');
});
