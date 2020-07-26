<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_transaksi', function (Blueprint $table){
            $table->id();
            
            $table->bigInteger('id_transaksi')->unsigned();
            $table->bigInteger('id_paket')->unsigned();
            $table->integer('qty');
            $table->integer('total');
            $table->foreign('id_transaksi')->references('id')->on('transaksi');
            $table->foreign('id_paket')->references('id')->on('paket');

            
                     
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
