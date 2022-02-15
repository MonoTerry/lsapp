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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/donate', 'App\Http\Controllers\PagesController@donate')->name('donate');
Route::get('/music', 'App\Http\Controllers\PagesController@music')->name('music');
Route::get('/programs', 'App\Http\Controllers\PagesController@programs')->name('programs');
Route::get('/shop', 'App\Http\Controllers\PagesController@shop')->name('shop');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
