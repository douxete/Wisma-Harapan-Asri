<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        DB::table('users')->insert([
            'roleid' => 1,
            'pegawaiid' => 1,
            'username' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        //User
        DB::table('users')->insert([
            'roleid' => 4,
            'pegawaiid' => 1,
            'username' => 'perawat',
            'password' => Hash::make('12345678'),
        ]);
    }
}
