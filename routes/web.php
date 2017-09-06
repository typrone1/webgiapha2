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
    return redirect()->route('dashboard');
});

Route::get('admin', 'AdminController@index')->name('dashboard');
Route::get('quan-ly-ho-so', 'AdminController@getQuanLyHoSo')->name('quan-ly-ho-so');
Route::get('tim-kiem-ho-so', 'AdminController@getTimKiemHoSo')->name('tim-kiem');
Route::get('chi-tiet-ho-so/{id}', 'AdminController@getChiTietHoSo')->name('chi-tiet-ho-so');


