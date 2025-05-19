<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Beasiswa::create([
            'nama' => 'Budi Santoso',
            'asal_sekolah' => 'SMAN 5 Bandung',
            'jurusan' => 'Manajemen',
            'jenjang' => 'S1',
            'jenis_beasiswa' => 'Prestasi', // ✅ enum valid
        ]);
    }
}
