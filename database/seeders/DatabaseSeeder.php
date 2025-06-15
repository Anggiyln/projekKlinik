<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\Daftar;
use App\Models\Poli;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed data pasien dulu
        Pasien::factory(30)->create();

        // Kemudian seed data daftar (pastikan sudah ada relasi pasien)
        Daftar::factory(100)->create();

         Poli::factory()->count(10)->create();

    }
}
