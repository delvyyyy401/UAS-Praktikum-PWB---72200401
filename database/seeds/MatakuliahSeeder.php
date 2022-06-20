<?php

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    public function run()
    {
        DB::table('matakuliah')->insert([
            'kode' => 'SI2343',
            'namaMk' => 'Pemrograman Berbasis Web',
            'sks' => '3.0',
            'harga' => '6.0',
            'namaDosen' => 'Katon Wijana'
        ]);
    }
}
