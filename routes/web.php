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

Route::get('/login', function() {
    return view('auth.login');
});

Route::get('/{title}', function () {
    return view('moreVideos');
});

Route::get('/{title}/{id}', function () {
    return view('videos');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
