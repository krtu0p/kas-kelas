<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        Siswa::insert([
            ['nama' => 'Budi'],
            ['nama' => 'Ani'],
            ['nama' => 'Joko'],
        ]);
    }
}

