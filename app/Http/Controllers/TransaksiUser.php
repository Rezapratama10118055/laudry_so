<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaksi;

class TransaksiUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['transaksi'] = DB::table('transaksi')-> get();
        $data['paket']= DB::table('paket')-> get();
        return view('transaksi',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi=  new Transaksi;
        $transaksi->TglTransaksi = $request->tgl;
        $transaksi->Customer=$request->nama;
        $transaksi->tlp=$request->tlp;
        $transaksi->alamat=$request->alamat;
        $transaksi->status="on progress";
        $transaksi->Total=$request->total;
        $transaksi->save();

        
        $j =count($request->data)/4;
        
        for ($i=1; $i <= $j; $i++) { 
           DB::table('list_transaksi')->insert([
            'id_transaksi' => $transaksi->id,
            'id_paket' => $request->data[$i."id"],
            'qty' => $request->data[$i."qty"],
            'total' => $request->data[$i."total"]
            
        ]);

        }
        //return redirect('/trs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function detail($id)
    {
        $data['transaksi']=DB::table('transaksi')->where("id",$id)-> get();
        $data['list']= DB::table('list_transaksi')->where("id_transaksi",$id)->join('paket','list_transaksi.id_paket','=','paket.id')-> get();
        $data['jml']= DB::table('list_transaksi')->where("id_transaksi",$id)-> count();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table("transaksi")->where('id', $request->eid)->update([
            'TglTransaksi' => $request->dTanggal,
            'Customer' => $request->dnama,
            'tlp' => $request->dtlp,
            'alamat' => $request->dalamat
        ]);
        return redirect('/trs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('list_transaksi')->where('id_transaksi', $id)->delete();
        DB::table('transaksi')->where('id', $id)->delete();

        return redirect('trs');
    }

    public function finish($id)
    {
        DB::table("transaksi")->where('id', $id)->update([
            'status' => "success"
            
        ]);

        return redirect('trs');
    }
}
