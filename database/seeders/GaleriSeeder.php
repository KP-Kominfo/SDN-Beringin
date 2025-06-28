<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galeri::create([
           [
                'judul' => 'Upacara Wisuda Kelas 6',
                'kategori' => 'Upacara',
                'foto' => 'images/galeri/wisuda.jpg',
                'tanggal' => '2025-01-15',
                'admin_id' => 1
           ],
        ]);
    }
}
