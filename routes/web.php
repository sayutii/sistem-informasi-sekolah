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
    return view('welcome');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
    Route::get('/dashbor', 'DashboardController@index');
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/siswa/add', 'SiswaController@add');
    Route::post('/siswa/add/create', 'SiswaController@create');
    //Route::get('/siswa/{id}', 'SiswaController@edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update');
    // Route::get('/siswa/{id}/delete', 'SiswaController@delete');
    Route::delete('/siswa/delete/{id}', 'SiswaController@delete')->name('siswa.delete');
    
    //input nilai
    Route::get('/nilai', 'InputnilaiController@index');
    Route::get('/nilai/{id}/input', 'InputnilaiController@input');
});

Route::group(['middleware' => ['auth', 'CheckRole:admin,siswa']], function(){
    Route::get('/dashbor', 'DashboardController@index');
});

