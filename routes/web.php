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

Route::get('/image', function () {
    return view('template.master1');
});

Route::get('/home','tugasController@home');

Route::get('table', 'tugasController@table');
Route::get('paragraf', 'tugasController@paragraf');
Route::get('custom1', 'tugasController@custom1');
Route::get('custom2', 'tugasController@custom2');
