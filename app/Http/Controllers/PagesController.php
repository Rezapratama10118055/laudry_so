<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{

	public function login()
	{

		return view('login');
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