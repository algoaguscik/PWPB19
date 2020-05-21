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

Route::get('/','SiswaController@start'); 

Route::get('/belajar','SiswaController@index');

Route::get('/algo','SiswaController@algo');

Route::get('/aguscik','SiswaController@aguscik');

Route::get('/bermain','SiswaController@bermain');

Route::get('/siswa','SiswaController@index');

Route::get('/siswa/create','SiswaController@create');

Route::post('/siswa','SiswaController@store');

Route::get('/kelas','KelasController@index');

Route::get('/kelas/create','KelasController@create');

Route::post('/kelas','KelasController@store');
