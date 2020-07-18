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

//users-crud
Route::get('/users', 'UsersController@index');
Route::get('/users/hapus/{id}', 'UsersController@hapus');

Route::get('/trs', function () {
    return view('transaksi');
});
