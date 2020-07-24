<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SeedUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		'name' => 'Admin',
    		'email' => 'admin@gmail.com', 
    		'role' => 'admin', 
    		'password' => Hash::make('kepoajg')]); 
    }
}
