<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'judul' => 'Selamat dan Sukses Atas Dilantinya Hevearita G. Rahayu (Mbak Ita) Sebagai Pelantikan Wali Kota Semarang Tahun 2021-2026',
            'foto' => 'berita/7.jpg',
            'konten' => 'DN Bringin 01 Mengucapkan Selamat dan Sukses atas dilantiknya Hevearita G. Rahayu sebagai Wali Kota Semarang periode 2021-2026.',
            'admin_id' => 1,
        ]);
        Berita::create([
            'judul' => 'DAYA TAMPUNG SD NEGERI BRINGIN 01',
            'foto' => 'berita/2.png',
            'konten' => 'Jumlah Daya Tampung Peserta Didik Baru untuk SD Negeri Bringin 01 adalah 28 Peserta Didik Baru.',
            'admin_id' => 1,
        ]);
        Berita::create([
            'judul' => 'PANDUAN PPD KOTA SEMARANG TAHUN 2022',
            'foto' => 'berita/4.jpg',
            'konten' => 'Daftar Panduan Pendaftaran SD Tahun Pelajaran 2022/2023.',
            'admin_id' => 1,
        ]);
        Berita::create([
            'judul' => 'ALUR PPD SD KOTA SEMARANG TAHUN 2022',
            'foto' => 'berita/3.png',
            'konten' => 'PENTING!! Perhatikan Alur PPD SD Negeri Tahun 2022 dengan cermat!',
            'admin_id' => 1,
        ]);
    }
}