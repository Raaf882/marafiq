<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use GuzzleHttp\Middleware;

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
Route::get('/reservation/{id}', [BuildingController::class, 'showReservation'])->name('showReservation');
Route::post('/reservation', [BuildingController::class, 'reservation'])->name('reservation');
Route::get('/show_building', [BuildingController::class, 'showBuilding'])->name('show_building');

    Route::get('/cms', [BuildingController::class, 'create'])->name('cms');


    //----------------------pages index route-------------------

    //Route::get('home/show_building', [BuildingController::class, 'showBuilding'])->name('show_building');




    //-----show the details-
    Route::get('/home/building-details',[BuildingController::class,'show'])->name('building-details');

    //----- complate the revesation
    Route::get('/home/payment',function(){return view('payment');})->middleware('auth')->name('payment'); 

    // Route::get('home/show-building', [BuildingController::class, 'showBuilding'])->name('show_building');
    Route::post('/cms/store',[BuildingController::class,'store'])->name('store-data');
    // Route::post('/cms/store',[BuildingController::class,'saveImage'])->name('store-data');

    Route::get('/bulding-details/{id}', [BuildingController::class,'show'])->name('show-details');
   