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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\CategoryController@show');
Route::get('videos/{id}', 'App\Http\Controllers\VideoController@show');
Route::get('video', function () {
    return view('insert_video',);
});
Route::post('video', 'App\Http\Controllers\VideoController@store');
Route::get('video/{id}', 'App\Http\Controllers\VideoController@show');
Route::get('view/{id}', 'App\Http\Controllers\VideoController@showTrailer');
Route::post('rent','App\Http\Controllers\Rent@doRent')->name('rent');
Route::get('login','App\Http\Controllers\UserController@login')->name('login');
Route::post('login', 'App\Http\Controllers\UserController@rent_login');
Route::get('sign-up','App\Http\Controllers\UserController@sign_up')->name('sign-up');
Route::post('sign-up', 'App\Http\Controllers\UserController@sign_in');
Route::get('logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::get('profile','App\Http\Controllers\UserController@profile')->name('profile');
Route::post('search', 'App\Http\Controllers\VideoController@search');