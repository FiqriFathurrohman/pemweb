<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beasiswas = [
            ['jenis_beasiswa' => 'KIP Kuliah'],
            ['jenis_beasiswa' => 'Beasiswa Unggulan'],
            ['jenis_beasiswa' => 'Beasiswa Prestasi'],
        ];

        foreach ($beasiswas as $data) {
            Beasiswa::create($data);
        }
    }
}
