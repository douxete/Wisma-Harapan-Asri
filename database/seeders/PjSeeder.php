<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(0,10) as $i) {
            DB::table('pj')->insert([
                'nama' => $faker->name(),
                'alamat' => $faker->address(),
                'telpon' => $faker->phoneNumber(),
            ]);
        }
        
    }
}
