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
        Schema::create('lombas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade'); // relasi ke admin
            $table->string('nama_lomba');
            $table->string('tingkat'); // contoh: Tingkat Kota, Provinsi, Nasional
            $table->string('prestasi'); // contoh: Juara 1, Finalis, Harapan 3
            $table->date('tanggal');
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable(); // untuk menyimpan gambar lomba jika ada
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lombas');
    }
};
