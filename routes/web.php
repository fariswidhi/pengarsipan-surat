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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/petugas','PetugasController');
Route::resource('/surat-masuk','SuratMasukController');
Route::resource('/disposisi','DisposisiController');
Route::get('/surat-masuk/{id}/disposisi','DisposisiController@disposisi');
Route::post('/disposisi/{id}','DisposisiController@simpanDisposisi');

Route::resource('/surat-keluar','SuratKeluarController');
