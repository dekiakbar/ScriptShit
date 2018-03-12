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
    return view('admin.auth.daftar');
});

/*
|--------------------------------------------------------------------------
| Routing untuk debug aplikasi
|--------------------------------------------------------------------------
*/
Route::get('/cuaca','APIcontroller@cuaca');
Route::get('/visualisasi', 'APIcontroller@Visualisasitempat');
Route::get('/geo', 'APIcontroller@Geolokasi');

Route::get('/detail/{lokasi}','APIcontroller@semua');

/*
|--------------------------------------------------------------------------
| Override Routing admin
|--------------------------------------------------------------------------
*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
|--------------------------------------------------------------------------
| Route dashboard admin
|--------------------------------------------------------------------------
*/
Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Route tanaman
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){
	Route::get('tanaman/tambah','tanamanCon@tambah');
	Route::post('tanaman','tanamanCon@simpan')->name('tanaman.simpan');
	Route::get('tanaman','tanamanCon@tampil');
});