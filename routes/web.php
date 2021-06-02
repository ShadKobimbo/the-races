<?php

use Illuminate\Support\Facades\Route;

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

/*

Route::get('/races', function () {
    return view('races.index');
});

*/

Auth::routes();

Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/odds', [\App\Http\Controllers\OddsController::class, 'index'])->name('odds');
Route::get('/locations', [\App\Http\Controllers\LocationsController::class, 'index'])->name('location');


Route::post('/odds', [
    'uses' => 'App\Http\Controllers\OddsController@checker'
  ]);

Route::resource('/races', App\Http\Controllers\RacesController::class);

Route::resource('/horses', App\Http\Controllers\HorsesController::class);

Route::resource('/locations', App\Http\Controllers\LocationsController::class);


