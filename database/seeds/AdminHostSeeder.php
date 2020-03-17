<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminHostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'admin',
            'validated' => true,
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123123'),
            'institute' => 'admin',
            'address' => 'jl.123', 
            'phone' => '08123', 
            'start_working_date' => Carbon::now(), 
        ]);

        DB::table('users')->insert([
            'role' => 'host',
            'validated' => true,
            'name' => 'Host',
            'username' => 'host',
            'email' => 'host@host.com',
            'password' => Hash::make('123123'),
            'institute' => 'host',
            'address' => 'jl.123', 
            'phone' => '08123', 
            'start_working_date' => Carbon::now(), 
        ]);
    }
}
