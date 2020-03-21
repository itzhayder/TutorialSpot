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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/admin', function () {
    return view('auth.login');
});


Route::get('/list', function () {
    return view('list');
});

Route::get('/videoList', function () {
    return view('videoList');
});


Route::get('/playback/{id}', 'VideoController@show')->name('video.show');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/dashboard/create', 'HomeController@create')->name('dashboard.create');
Route::post('/dashboard', 'HomeController@store')->name('dashboard.store');
Route::get('/dashboard/edit/{id}', 'HomeController@edit')->name('dashboard.edit');
Route::put('/dashboard/{id}', 'HomeController@update')->name('dashboard.update');
Route::get('/dashboard/{id}', 'HomeController@destroy')->name('dashboard.destroy');
