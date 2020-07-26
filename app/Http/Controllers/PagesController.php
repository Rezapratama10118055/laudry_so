<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Transaksi;
use Illuminate\Http\Request;


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

    public function laporan()
    {
    	$sekarang = date("Y-m-d");
    	$data['now']=$sekarang;
    	$data['tgl'] = DB::table('transaksi')->groupBy('TglTransaksi')-> get();
    	$data['transaksi'] = DB::table('transaksi')->where('TglTransaksi',$sekarang)-> get();
    	$data['sum'] = DB::table('transaksi')->where('TglTransaksi',$sekarang)-> sum('total');
        return view('laporan',$data);
    }


// public function transaksi()
//     {
//         return view('transaksi');
//     }


}