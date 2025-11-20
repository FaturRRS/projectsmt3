<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Jude Bellingham',
            'nim' => 123456786,
            'prodi' => 'Teknologi Informasi',
            'email' => 'fathur@gmail.com',
            'nohp' => 62857326329,
        ]);
    }
}