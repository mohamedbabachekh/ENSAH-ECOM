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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/{any}', function () {
    return view('dashboard');
})->where('any', '.*');

Route::get('/home', function () {
    return view('welcome');
});
// Route::view('/{path?}', 'welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
