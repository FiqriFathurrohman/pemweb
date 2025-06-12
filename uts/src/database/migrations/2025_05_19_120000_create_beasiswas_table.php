<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id(); // bigIncrements unsigned
            $table->string('jenis_beasiswa');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
