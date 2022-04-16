<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'admin_adi',
            'email'=>'adi123@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Jalan Gunung Salak',
            'tgl_lahir' => '2002-09-17'
        ]);
    }
}