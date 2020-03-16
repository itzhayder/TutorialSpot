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

Route::get('/', 'VideoController@index')->name('video.index');

Route::get('/playback', 'VideoController@show')->name('video.show');

Route::get('/admin', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/list', function () {
    return view('list');
});

Route::get('/videoList', function () {
    return view('videoList');
});


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/{category}', 'VideoController@category')->name('video.category');
