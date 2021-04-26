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
Auth::routes();

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });

	Route::get('/index',[App\Http\Controllers\MapsController::class, 'index']);
	Route::get('/edit/{maps}',[App\Http\Controllers\MapsController::class, 'edit']);
	Route::get('/marker/{maps}',[App\Http\Controllers\MapsController::class, 'show']);
	Route::post('/store',[App\Http\Controllers\MapsController::class, 'store']);
	Route::post('/update/{maps}',[App\Http\Controllers\MapsController::class, 'update']);
	Route::post('/delete/{maps}',[App\Http\Controllers\MapsController::class, 'destroy']);

// Route::group('prefix'=>'maps', function(){
// })

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function () {
// 	Route::group(['namespace' => 'Dashboard'], function () {
// 		Route::get('/',"dashboardController@index");
// 	}
// }
