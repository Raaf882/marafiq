<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('home');
});

Auth::routes();

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [BuildingController::class, 'index'])->name('home');
Route::get('home/peyment', [BuildingController::class, 'index'])->name('payment');
Route::get('/show_building', function () {
    return view('show_building');});

    Route::get('/cms', [BuildingController::class, 'create'])->name('cms');


    //----------------------pages index route-------------------
    Route::get('home/show-building', [BuildingController::class, 'showBuilding'])->name('show_building');

    Route::post('cms',[BuildingController::class,'addBuilding'])->name('create-building');
