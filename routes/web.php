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
Route::get('/dokter', 'DokterController@index');
Route::get('/petugas/{nama}', 'PetugasController@index');
Route::get('/formulir', 'PetugasController@formulir');
Route::post('/formulir/proses', 'PetugasController@proses');
Route::get('/dokter/tambah','DokterController@tambah');
Route::post('/dokter/store','DokterController@store');
Route::get('/dokter/edit/{id}','DokterController@edit');
Route::post('/dokter/update','DokterController@update');
Route::get('/dokter/hapus/{id}','DokterController@hapus');
Route::get('/dokter/cari','DokterController@cari');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
