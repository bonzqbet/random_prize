<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\CheckAwardController;

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

Route::get('/', function () {
    return redirect()->route('prizepul.index');
});

Route::get('/home', function () {
    return redirect()->route('prizepul.index');
    // return view('front.home');
});

Route::get('/Award','App\Http\Controllers\SaveController@check_award');
Route::get('/delete/{id}','App\Http\Controllers\SaveController@destroy');


Route::resource('prizepul',SaveController::class);
Route::resource('checkaward',CheckAwardController::class);

Route::get('/home1','App\Http\Controllers\CookieController@setCookie');
Route::get('/insert','App\Http\Controllers\CookieController@test');
