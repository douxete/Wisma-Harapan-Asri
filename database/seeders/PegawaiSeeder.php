<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('pegawai')->insert([
            [
                'nama' => $faker->name(),
                'posisi' => 'Perawat Kelas 1'
            ],
            [
                'nama' => $faker->name(),
                'posisi' => 'Perawat Kelas 2'
            ],
            [
                'nama' => $faker->name(),
                'posisi' => 'Manajer'
            ],
            [
                'nama' => $faker->name(),
                'posisi' => 'Satpam'
            ],
            [
                'nama' => $faker->name(),
                'posisi' => 'Office Boy'
            ],
            [
                'nama' => $faker->name(),
                'posisi' => 'Perawat Kelas 3'
            ],
        ]);
    }
}
