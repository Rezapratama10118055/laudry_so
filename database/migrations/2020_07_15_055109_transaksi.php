<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table){
            $table->id();
            $table->date('TglTransaksi');
            $table->string('Customer');
            $table->string('Paket');
            $table->string('Pembayaran');
            $table->string('StatusOrderan');
            $table->integer('Total');

            
                     
     });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

