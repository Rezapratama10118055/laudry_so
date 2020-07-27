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

//update user
Route::post("ta/update", 'ManejemenUser@update');

//hapus user
Route::get('/ta/hapus/{id}', 'ManejemenUser@destroy');	

//hapus transaksi
route::get('/trs','TransaksiUser@index')->name('transaksi');
Route::post("trs/store", 'TransaksiUser@store');
Route::get('/trs/hapus/{id}', 'TransaksiUser@destroy');
Route::get('/trs/getDetail/{id}', 'TransaksiUser@detail');
Route::post("/trs/update", 'TransaksiUser@update');



route::get('/pem','Pembayaran@index');

Route::get('/pak','Paket@index');
Route::post("pak/store", 'Paket@store');
Route::get('/pak/hapus/{id}', 'Paket@destroy');	
Route::post("pak/update", 'Paket@update');

//laporan
Route::get('/lap','PagesController@laporan');
Route::post('/lap/getNew','PagesController@laporanNew');




//users-crud
Route::get('/users', 'UsersController@index');
Route::get('/users/hapus/{id}', 'UsersController@hapus');

// Route::get('/trs', function () {
//     return view('users');
// });


//test
Route::get('/test', function() {
	return view('test');
});



