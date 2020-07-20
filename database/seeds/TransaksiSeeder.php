<?php

use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('transaksi')->insert([
    		'tgltransaksi' => '2020-07-12',
    		'customer' => 'gajah talamuk', 
    		'paket' => 'super hemat', 
    		'pembayaran' => 'belum lunas', 
    		'statusorderan' => 'baru',
    		'total' => 15000]);   

    	DB::table('transaksi')->insert([
    		'tgltransaksi' => '2020-07-06',
    		'customer' => 'mama_mud', 
    		'paket' => 'hemat', 
    		'pembayaran' => 'lunas', 
    		'statusorderan' => 'baru',
    		'total' => 30000]);   
    }
}
