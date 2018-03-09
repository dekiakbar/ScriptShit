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
    return view('admin.login');
});

//debug
Route::get('/cuaca','APIcontroller@cuaca');
Route::get('/visualisasi', 'APIcontroller@Visualisasitempat');
Route::get('/geo', 'APIcontroller@Geolokasi');
//

Route::get('/detail/{lokasi}','APIcontroller@semua');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
