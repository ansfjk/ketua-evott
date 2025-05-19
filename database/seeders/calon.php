<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class calon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('calon')->insert([
            [
                'users_id' => 3, // asumsi id pemilih calon = 3
                'pemilih_id' => 1, // asumsi pemilihan pertama
                'img_calon' => null,
                'visi' => 'Menjadikan organisasi lebih maju dan berdaya guna.',
                'misi' => '1. Transparansi. 2. Inovasi. 3. Kolaborasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 4, // calon kedua
                'pemilih_id' => 1,
                'img_calon' => null,
                'visi' => 'Mewujudkan lingkungan belajar yang nyaman dan produktif.',
                'misi' => '1. Disiplin. 2. Kreatif. 3. Responsif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
