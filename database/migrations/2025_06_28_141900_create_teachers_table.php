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
        Schema::create('teachers', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('gelar')->nullable(); // S.Pd, M.Pd, dst.
        $table->string('jabatan'); // Kepala Sekolah, Guru Kelas, Guru Mapel, dst
        $table->string('mapel')->nullable(); // PJOK, Bahasa Inggris, dst
        $table->string('kelas')->nullable(); // 1A, 3B, dst
        $table->string('kategori'); // kepala, kelas, mapel, tendik
        $table->string('foto')->nullable();
        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
