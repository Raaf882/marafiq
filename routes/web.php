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


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [BuildingController::class, 'index'])->name('home');
Route::get('home/peyment', [BuildingController::class, 'index'])->name('payment');
Route::get('/show_building', function () {
    return view('show_building');});

    Route::get('/cms', [BuildingController::class, 'create'])->name('cms');


    //----------------------pages index route-------------------
    //Route::get('home/show_building', [BuildingController::class, 'showBuilding'])->name('show_building');




    //-----show the details-
    Route::get('/home/building-details',[BuildingController::class,'show'])->name('building-details');

    //----- complate the revesation
    Route::get('/home/payment',function(){return view('payment');})->name('payment'); 
