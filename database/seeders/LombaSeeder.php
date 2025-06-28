<?php

namespace Database\Seeders;

use App\Models\Lomba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'Lomba Menyanyi Solo',
            'kategori' => 'FLS2N',
            'tingkat' => 'Tingkat Kecamatan',
            'prestasi' => 'Juara Harapan 1',
            'tanggal' => '2025-03-10',
            'deskripsi' => 'Lomba FLS2N tingkat kecamatan cabang menyanyi solo.',
        ]);
    }
}
