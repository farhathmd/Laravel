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
// Route Crud Pasien
Route::get('/pasien','PasienController@index');
Route::get('/pasien/tambah','PasienController@tambah');
Route::post('/pasien/store','PasienController@store');
Route::get('/pasien/edit/{id}','PasienController@edit');
Route::post('/pasien/update','PasienController@update');
Route::get('/pasien/hapus/{id}','PasienController@hapus');
Route::get('/pasien/cari','PasienController@cari');
// Route Crud Registrasi
Route::get('/poli','PoliController@index');
Route::get('/poli/tambah','PoliController@tambah');
Route::post('/poli/store','PoliController@store');
Route::get('/poli/edit/{id}','PoliController@edit');
Route::post('/poli/update','PoliController@update');
Route::get('/poli/hapus/{id}','PoliController@hapus');
Route::get('/poli/cari','PoliController@cari');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
