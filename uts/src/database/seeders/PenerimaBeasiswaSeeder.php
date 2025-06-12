<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenerimaBeasiswa;
use App\Models\Beasiswa;

class PenerimaBeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan dulu ada beasiswa yang tersedia
        $beasiswa = Beasiswa::first() ?? Beasiswa::create([
            'jenis_beasiswa' => 'KIP Kuliah'
        ]);

        // Buat data mahasiswa penerima
        PenerimaBeasiswa::create([
            'nama' => 'Fiqri Fathurrohman',
            'asal_sekolah' => 'SMAN 1 Jakarta',
            'jurusan_dituju' => 'Teknik Informatika',
            'jenjang' => 'S1',
            'beasiswa_id' => $beasiswa->id
        ]);

        PenerimaBeasiswa::create([
            'nama' => 'Putri Salsabila',
            'asal_sekolah' => 'SMK Negeri 2 Bandung',
            'jurusan_dituju' => 'Sistem Informasi',
            'jenjang' => 'D3',
            'beasiswa_id' => $beasiswa->id
        ]);
    }
}
