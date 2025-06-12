<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seo;

class SeoSeeder extends Seeder
{
    public function run(): void
    {
        Seo::create([
            'title' => 'Website Data Beasiswa UEU',
            'description' => 'Informasi lengkap mengenai mahasiswa penerima beasiswa Universitas Esa Unggul.',
            'keywords' => 'beasiswa, mahasiswa, universitas esa unggul, pendidikan',
            'author' => 'FIQRI',
            'robots' => 'index, follow',
            'canonical_url' => url('/'),
            'og_image' => null, // atau isi nama file jika sudah upload
        ]);
    }
}
