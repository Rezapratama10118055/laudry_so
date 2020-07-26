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
            $table->string('tlp');
            $table->text('alamat');
            $table->string('status');
            $table->integer('total');

            
                     
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

