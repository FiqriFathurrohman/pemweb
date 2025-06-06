<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('jurusan');

            // Jenjang: D3, D4, S1, S2, S3
            $table->enum('jenjang', ['D3', 'D4', 'S1', 'S2', 'S3']);

            // Jenis Beasiswa
            $table->enum('jenis_beasiswa', [
                'Akademik',
                'Non-Akademik',
                'KIP-Kuliah',
                'Prestasi',
                'Tahfidz',
                'Khusus'
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
