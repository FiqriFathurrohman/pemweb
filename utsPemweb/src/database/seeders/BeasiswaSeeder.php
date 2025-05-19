<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beasiswa;


class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    Beasiswa::create([
    'nama' => 'Budi Santoso',
    'asal_sekolah' => 'SMAN 5 Bandung',
    'jurusan' => 'Manajemen',
    'jenjang' => 'S1',
    'jenis_beasiswa' => 'Beasiswa Prestasi',
]);

}
}
