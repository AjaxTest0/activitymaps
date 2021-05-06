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
Auth::routes(['verify' => true]);

Route::get('/', 'App\Http\Controllers\FrontendController@index');
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::post('/contactus',[App\Http\Controllers\ContactUsController::class, 'store']);


	Route::get('/index',[App\Http\Controllers\MapsController::class, 'index'])->middleware('verified');
	Route::get('/ajaxmap',[App\Http\Controllers\MapsController::class, 'ajaxmap']);
	Route::get('/edit/{map}',[App\Http\Controllers\MapsController::class, 'edit'])->middleware('verified');
	Route::get('/marker/{maps}',[App\Http\Controllers\MapsController::class, 'show'])->middleware('verified');
	Route::post('/store',[App\Http\Controllers\MapsController::class, 'store']);
	Route::post('/update/{maps}',[App\Http\Controllers\MapsController::class, 'update']);
	Route::get('/delete/{maps}',[App\Http\Controllers\MapsController::class, 'destroy']);
	Route::get('/maps/export/', [App\Http\Controllers\MapsController::class, 'export']);

	

// Route::group('prefix'=>'maps', function(){
// })

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function () {
// 	Route::group(['namespace' => 'Dashboard'], function () {
// 		Route::get('/',"dashboardController@index");
// 	}
// }
