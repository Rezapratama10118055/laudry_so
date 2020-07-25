<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('welcome');
    }


// public function transaksi()
//     {
//         return view('transaksi');
//     }


}