<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roleusers')->insert([
            [
                'nama' => 'admin',
                'description' => 'Admin'
            ],
            [
                'nama' => 'manajer',
                'description' => 'Manajer (Report Reader)'
            ],
            [
                'nama' => 'PJ',
                'description' => 'PJ (Perawat penanggung Jawab shift kerja)'
            ],
            [
                'nama' => 'asisten perawat',
                'description' => 'Asisten Perawat'
            ],
            [
                'nama' => 'fisioterapi',
                'description' => 'Fisioterapi'
            ],
            [
                'nama' => 'farmasi',
                'description' => 'Farmasi'
            ],
        ]);
    }
}
