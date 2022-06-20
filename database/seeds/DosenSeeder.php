<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    public function run()    {
        $faker = Faker::create('id_ID');

        for($i=1; $i<=5; $i++){
            DB::table('dosen')->insert([
                'nip' => $faker->randomNumber(8, true),
                'nama' => $faker->name(),
                'gender' => $faker -> randomElement(['Pria', 'Wanita']),
                'no_hp' => $faker->PhoneNumber(),
                'email' => $faker->freeEmailDomain()
            ]);
        }
    }
}
