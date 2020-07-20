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


route::get('/','PagesController@login');

route::get('/ds','PagesController@home');
route::get('/ta','ManejemenUser@index');
route::get('/trs','TransaksiUser@index');
route::get('/pem','Pembayaran@index');

