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
        date_default_timezone_set('Asia/Jakarta');
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

    public function laporanNew(Request $req)
    {

        $data['transaksi'] = DB::table('transaksi')->where('TglTransaksi',$req->tgl)-> get();
        $data['x'] = DB::table('transaksi')->where('TglTransaksi',$req->tgl)-> count();
        $data['sum'] = DB::table('transaksi')->where('TglTransaksi',$req->tgl)-> sum('total');
        return $data;
    }


// public function transaksi()
//     {
//         return view('transaksi');
//     }


}