<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerima_beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('jurusan_dituju');
            $table->string('jenjang');

            // WAJIB: foreign key valid, cocok dengan tabel dan kolom
            $table->unsignedBigInteger('beasiswa_id');
            $table->foreign('beasiswa_id')
                ->references('id')
                ->on('beasiswas')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerima_beasiswas');
    }
};
