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
Route::get('chi-tiet-ho-so/{id}/them-vo', 'VCHoSoController@getThemVo')->name('them-vo');
Route::get('them-con/{id}','HoSoController@getThemCon')->name('them-con');
Route::post('post-them-vo/{id}','VCHoSoController@postThemVo')->name('post-them-vo');
Route::get('so-do-gia-pha', 'UserController@getSoDoGiaPha')->name('so-do-gia-pha');
Route::get('them-ho-so', 'AdminController@getThemHoSo')->name('them-ho-so');
Route::post('post-them-ho-so', 'HoSoController@postDangKyHoSo')->name('post-them-ho-so');
Route::post('cap-nhat-ho-so/{id}', 'HoSoController@postCapNhatHoSo')->name('cap-nhat-ho-so');
Route::get('test','HoSoController@test');