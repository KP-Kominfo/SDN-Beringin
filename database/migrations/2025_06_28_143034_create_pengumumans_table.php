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
        $table->date('tanggal')->nullable(); 
        $table->string('kategori'); 
        $table->string('tag')->nullable();
        $table->string('status')->nullable();
        $table->string('icon')->nullable(); 
        $table->foreignId('admin_id')->constrained('users')->onDelete('cascade'); 
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
