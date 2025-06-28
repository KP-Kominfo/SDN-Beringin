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
            Schema::create('Pengumumans', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('konten');
        $table->date('tanggal');
        $table->string('kategori'); // "Hasil Seleksi", "Jadwal", dll
        $table->string('tag')->nullable(); // "Penting", "Info", dll
        $table->string('status')->nullable(); // "Resmi", "Baru", dll
        $table->integer('jumlah_peserta')->nullable();
        $table->string('icon')->nullable(); // opsional
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pengumumans');
    }
};
