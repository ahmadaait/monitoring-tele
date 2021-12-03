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

Route::get('login', 'Login\IndexController@index')->name('login');
Route::post('login/submit', 'Login\IndexController@submit')->name('login.submit');
Route::get('logout', 'Login\IndexController@logout')->name('logout');

Route::middleware(['auth'])->group(function(){
    // Route::get('/', function () {
    //     return view('index');
    // });
    
    Route::get('/', 'Index\IndexController@index')->name('index');

    Route::get('tele1', 'Tele1\IndexController@index')->name('tele1');
    Route::get('tele1/cetak_pdf', 'Tele1\IndexController@cetak_pdf')->name('tele1.cetak_pdf');
    Route::get('wind', 'Wind\IndexController@index')->name('wind');
    Route::get('weather', 'Weather\IndexController@index')->name('weather');
    Route::get('quality', 'Quality\IndexController@index')->name('quality');

    Route::get('user', 'User\IndexController@index')->name('user');
    Route::get('user/tambah', 'User\CreateController@index')->name('user.create');
    Route::post('user/tambah', 'User\CreateController@submit')->name('user.submit');
    Route::get('user/sunting/{id}', 'User\UpdateController@index')->name('user.edit');
    Route::patch('user/sunting/{id}', 'User\UpdateController@update')->name('user.update');
    Route::get('user/hapus/{id}','User\DeleteController@delete')->name('user.delete');
    Route::get('user/cetak_pdf', 'User\IndexController@cetak_pdf')->name('user.cetak_pdf');
});