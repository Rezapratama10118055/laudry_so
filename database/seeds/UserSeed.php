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
        DB::table('users')->insert([
        	'nama_user' => 'reza',
        	'jabatan' => 'bos besar',
        	'status_aktif' => 'aktif']);

        DB::table('users')->insert([
        	'nama_user' => 'odol',
        	'jabatan' => 'tukang kemas',
        	'status_aktif' => 'aktif']);

        DB::table('users')->insert([
        	'nama_user' => 'tupai',
        	'jabatan' => 'tukang cuci',
        	'status_aktif' => 'libur']);
    }
}
