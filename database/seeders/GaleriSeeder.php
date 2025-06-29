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
            'judul' => 'SPMB KOTA SEMARANG TAHUN 2025/2026',
            'kategori' => 'Pendaftaran',
            'foto' => 'galeri/10.jpeg',
            'tanggal' => '2025-01-15',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Gerakan Urban Farming dan Kerja Bakti Massal Kota Semarang',
            'kategori' => 'Kegiatan',
            'foto' => 'galeri/4.jpg',
            'tanggal' => '2025-02-10',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Selamat dan Sukses atas dilantinya Hevearita G. Rahayu (Mbak Ita) sebagai Wali Kota Semarang Tahun 2021-2026',
            'kategori' => 'selamat',
            'foto' => 'galeri/7.jpg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Peringatan Hari Kartini SD NEGERI BRINGIN 01',
            'kategori' => 'Peringatan',
            'foto' => 'galeri/2.jpg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Upacara Hari Guru Nasional',
            'kategori' => 'Peringatan',
            'foto' => 'galeri/8.jpeg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Peringatan Hari Transportasi Umum di SD NEGERI BRINGIN 01',
            'kategori' => 'Peringatan',
            'foto' => 'galeri/3.jpeg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Penerapan Protokol Kesehatan di SDN Bringin 01',
            'kategori' => 'kegiatan',
            'foto' => 'galeri/3.jpeg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Dukungan Stakeholder dalam Pembelajaran Tatap Muka di SDN Bringin 01',
            'kategori' => 'kegiatan',
            'foto' => 'galeri/6.jpeg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
        Galeri::create([
            'judul' => 'Selamat Hari Raya Waisak 2565 BE',
            'kategori' => 'peringatan',
            'foto' => 'galeri/6.jpg',
            'tanggal' => '2025-03-05',
            'admin_id' => 1
        ]);
    }
}
