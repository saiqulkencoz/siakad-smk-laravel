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
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin')->name('postlogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'],function(){
    //guru
    Route::get('/data-guru','GuruController@index')->name('data-guru');
    Route::post('/data-guru/create','GuruController@create')->name('add-guru');
    Route::get('/data-guru/{id}/edit','GuruController@update_index');
    Route::post('/data-guru/{id}/update','GuruController@update');
    Route::get('/data-guru/{id}/delete','GuruController@delete');
    Route::get('/data-guru/{id}/profile','GuruController@profile');
    Route::get('/data-guru/cetak','GuruController@cetak_pdf')->name('cetak-guru');

    //kelas
    Route::get('/data-kelas','KelasController@index')->name('data-kelas');
    Route::post('/data-kelas/create','KelasController@create')->name('add-kelas');
    Route::get('/data-kelas/{id}/edit','KelasController@update_index');
    Route::post('/data-kelas/{id}/update','KelasController@update');
    Route::get('/data-kelas/{id}/delete','KelasController@delete');
    Route::get('/data-kelas/cetak','KelasController@cetak_pdf')->name('cetak-kelas');

    //siswa
    Route::get('/data-siswa','SiswaController@index')->name('data-siswa');
    Route::post('/data-siswa/create','SiswaController@create')->name('add-siswa');
    Route::get('/data-siswa/{id}/edit','SiswaController@update_index');
    Route::post('/data-siswa/{id}/update','SiswaController@update');
    Route::get('/data-siswa/{id}/delete','SiswaController@delete');
    Route::get('/data-siswa/cetak','SiswaController@cetak_pdf')->name('cetak-siswa');

    //mapel
    Route::get('/data-mapel','MapelController@index')->name('data-mapel');
    Route::post('/data-mapel/create','MapelController@create')->name('add-mapel');
    Route::get('/data-mapel/{id}/edit','MapelController@update_index');
    Route::post('/data-mapel/{id}/update','MapelController@update');
    Route::get('/data-mapel/{id}/delete','MapelController@delete');
    Route::get('/data-mapel/cetak','MapelController@cetak_pdf')->name('cetak-mapel');

    //nilai
    Route::get('/data-nilai','NilaiController@index')->name('data-nilai');
    Route::get('/data-nilai/{id}/profile', 'NilaiController@profile')->name('nilai-profile');
    Route::post('/data-nilai/{id}/addnilai','NilaiController@addnilai');
    Route::get('/data-nilai/{id}/{idmapel}/delete','NilaiController@delete');

    //siswaview
    Route::get('/profile','SiswaViewController@profile')->name('profile-siswa');
    Route::get('/jadwal','SiswaViewController@jadwal')->name('jadwal');


    Route::get('/dashboard','DashboardController@dashboard')->name('guru-dash')->middleware('auth');
});


