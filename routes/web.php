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

//pelanggan
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesan/{id}', 'PesanController@index');
Route::post('/pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');
Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');
Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');
Route::get('filter', 'HomeController@filter');
Route::get('filter/cari', 'HomeController@cari');


//admin
Route::get('/admin/home', 'HomeController@index');
Route::get('/admin/dataproduk', 'AdminController@index');
Route::get('/admin/tambah', 'AdminController@tambah');
Route::post('/admin/tambah/proses', 'AdminController@create');
Route::get('/edit/{id}', 'AdminController@edit');
Route::post('/admin/dataproduk/edit/{id}', 'AdminController@update');
Route::delete('/admin/dataproduk/{id}', 'AdminController@delete');
Route::get('admin/invoice', 'AdminController@invoice');
Route::get('admin/invoice/proses/{id}', 'AdminController@invoiceProses');
Route::get('admin/invoice/{id}', 'AdminController@detailInvoice');
Route::get('admin/profile', 'AdminController@profile');
Route::get('admin/edit/profile', 'AdminController@editProfile');
Route::post('admin/profile', 'AdminController@updateProfile');
Route::get('admin/history', 'AdminController@history');
Route::delete('/admin/history/{id}', 'AdminController@deleteHistory');


