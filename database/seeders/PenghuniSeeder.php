<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('penghuni')->insert([
            [
                'pjid' => '1',
                'namaLengkap' => 'Doni monardo',
                'namaPanggilan' => 'Doni',
                'tgllahir' => $faker->dateTimeThisCentury()->format('Y-m-d'),
                'gender' => 'L',
                'agama' => 'Muslim',
                'alamat' => $faker->address(),
                'notelp' => $faker->phoneNumber(),
                'asalDaerah' => $faker->city(),
                'ruang' => 'A',
                'tglMasuk' => $faker->dateTimeThisYear()->format('Y-m-d'),
                'meninggal' => '0',
                'keluar' => '0',
            ],
            [
                'pjid' => '2',
                'namaLengkap' => 'Deni Markus',
                'namaPanggilan' => 'Deni',
                'tgllahir' => $faker->dateTimeThisCentury()->format('Y-m-d'),
                'gender' => 'L',
                'agama' => 'Kristen',
                'alamat' => $faker->address(),
                'notelp' => $faker->phoneNumber(),
                'asalDaerah' => $faker->city(),
                'ruang' => 'B',
                'tglMasuk' => $faker->dateTimeThisYear()->format('Y-m-d'),
                'meninggal' => '0',
                'keluar' => '0',
            ],
            [
                'pjid' => '3',
                'namaLengkap' => 'Marin Marko',
                'namaPanggilan' => 'Marin',
                'tgllahir' => $faker->dateTimeThisCentury()->format('Y-m-d'),
                'gender' => 'L',
                'agama' => 'Katolik',
                'alamat' => $faker->address(),
                'notelp' => $faker->phoneNumber(),
                'asalDaerah' => $faker->city(),
                'ruang' => 'C',
                'tglMasuk' => $faker->dateTimeThisYear()->format('Y-m-d'),
                'meninggal' => '0',
                'keluar' => '0',
            ]
        ]);
    }
}
