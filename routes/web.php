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

Route::get('/', function () {
    return view('welcome');
});
	Route::post('/store',['MapsController@store']);
	Route::get('/index',[App\Http\Controllers\MapsController::class, 'index']);
// Route::group('prefix'=>'maps', function(){
// })

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function () {
// 	Route::group(['namespace' => 'Dashboard'], function () {
// 		Route::get('/',"dashboardController@index");
// 	}
// }
