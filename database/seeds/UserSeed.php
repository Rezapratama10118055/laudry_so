<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manejemen')->insert([
        	'nama' => 'reza',
        	'jabatan' => 'bos besar',
        	'status' => 'aktif']);

        DB::table('manejemen')->insert([
        	'nama' => 'odol',
        	'jabatan' => 'tukang kemas',
        	'status' => 'aktif']);

        DB::table('manejemen')->insert([
        	'nama' => 'tupai',
        	'jabatan' => 'tukang cuci',
        	'status' => 'libur']);
    }
}
