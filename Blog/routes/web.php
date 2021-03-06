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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', 'BlogController@index')->name('index');

Route::get('admin', 'BlogController@admin');

Route::post('guardarImg', 'BlogController@guardarImg')->name('guardarImg');

Route::get('imagen/{ancho}/{alto}', 'BlogController@imagen');