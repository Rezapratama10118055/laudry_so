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
     return view('auth/login');
 });
Auth::routes();
route::get('/home','PagesController@home')->name('home');
route::get('/ta','ManejemenUser@index');

//tambah user
Route::post("ta/store", 'ManejemenUser@store');

//hapus user
Route::get('/ta/hapus/{id}', 'ManejemenUser@destroy');	

//hapus transaksi
Route::get('/trs/hapus/{id}', 'TransaksiUser@destroy');

route::get('/trs','TransaksiUser@index');
route::get('/pem','Pembayaran@index');

Route::get('/pak','Paket@index');


//users-crud
Route::get('/users', 'UsersController@index');
Route::get('/users/hapus/{id}', 'UsersController@hapus');

// Route::get('/trs', function () {
//     return view('users');
// });




