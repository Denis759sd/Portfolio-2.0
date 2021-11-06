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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio');

Route::get('/order', 'App\Http\Controllers\OrderController@index')->name('order');

Route::post('/send', 'App\Http\Controllers\OrderController@send')->name('send');
