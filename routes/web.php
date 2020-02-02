<?php

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

Route::get('/', 'Auth\LoginController@form_login')->name('login');
Auth::routes();

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('medicamentos', 'Medicamentos');
