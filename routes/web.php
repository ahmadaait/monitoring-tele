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
    
    // Landing Page
    Route::get('/', 'Index\IndexController@index')->name('index');

    // Forecast
    Route::get('forecast', 'Forecast\IndexController@index')->name('forecast');

    // Monitoring
    Route::get('node1', 'Node1\IndexController@index')->name('node1');
    Route::get('node1/cetak_pdf', 'Node1\IndexController@cetak_pdf')->name('node1.cetak_pdf');
    Route::get('node2', 'Node2\IndexController@index')->name('node2');
    Route::get('node2/cetak_pdf', 'Node2\IndexController@cetak_pdf')->name('node2.cetak_pdf');
    Route::get('node3', 'Node3\IndexController@index')->name('node3');
    Route::get('node3/cetak_pdf', 'Node3\IndexController@cetak_pdf')->name('node3.cetak_pdf');

    // Backup Data
    Route::get('tele1', 'Tele1History\IndexController@index')->name('tele1');
    Route::get('tele1/cetak_pdf', 'Tele1History\IndexController@cetak_pdf')->name('tele1.cetak_pdf');
    Route::get('tele2', 'Tele2History\IndexController@index')->name('tele2');
    Route::get('tele2/cetak_pdf', 'Tele2History\IndexController@cetak_pdf')->name('tele2.cetak_pdf');
    Route::get('tele3', 'Tele3History\IndexController@index')->name('tele3');
    Route::get('tele3/cetak_pdf', 'Tele3History\IndexController@cetak_pdf')->name('tele3.cetak_pdf');
    
    // Klasifikasi
    // Route::get('wind', 'Wind\IndexController@index')->name('wind');
    // Route::get('weather', 'Weather\IndexController@index')->name('weather');
    // Route::get('quality', 'Quality\IndexController@index')->name('quality');
    
    // Admin CRUD
    Route::get('user', 'User\IndexController@index')->name('user');
    Route::get('user/tambah', 'User\CreateController@index')->name('user.create');
    Route::post('user/tambah', 'User\CreateController@submit')->name('user.submit');
    Route::get('user/sunting/{id}', 'User\UpdateController@index')->name('user.edit');
    Route::patch('user/sunting/{id}', 'User\UpdateController@update')->name('user.update');
    Route::get('user/hapus/{id}','User\DeleteController@delete')->name('user.delete');
    Route::get('user/cetak_pdf', 'User\IndexController@cetak_pdf')->name('user.cetak_pdf');
});

Route::get('index', 'Client_side\IndexController@index')->name('index');
Route::get('device1', 'Client_side\Device1Controller@index')->name('device1');
Route::get('device2', 'Client_side\Device2Controller@index')->name('device2');
Route::get('device3', 'Client_side\Device3Controller@index')->name('device3');
Route::get('monitoringCuaca', 'Client_side\MonitoringCuacaController@index')->name('monitoringCuaca');