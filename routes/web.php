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

Route::get('index', 'MaskapaiController@index');

Route::get('pegawai', function(){
    return view('index2');
});

Route::get('create', function(){
    return view('create');
});

Route::get('/delete/{id}', 'MaskapaiController@delete');
Route::post('/store', 'MaskapaiController@store');
Route::get('/index/edit/{id}', 'MaskapaiController@edit');
Route::post('/index/update', 'MaskapaiController@update');