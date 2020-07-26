<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $table = "transaksi";
    public $timestamps = false;
    protected $fillable = ['id','TglTransaksi','Customer', 'tlp', 'alamat', 'status', 'total'];
}
