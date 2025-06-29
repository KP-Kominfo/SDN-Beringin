<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengumuman::create([
            'judul' => 'Pengumuman Siswa Diterima  22-23 JUNI 2025',
            'konten' => 'Sekolah akan libur mulai tanggal 1 Juli hingga 14 Juli 2025.',
            'tanggal' => '2025-06-30',
            'kategori' => 'Akademik',
            'tag' => 'lolos,semester',
            'status' => 'Aktif',
            'icon' => 'fa-calendar',
            'admin_id' => 1, // Assuming admin_id is the ID of the user creating the announcement
        ]);
        Pengumuman::create([
            'judul' => 'Pengumuman Pendaftaran Siswa Baru 18 - 20 JUNI 2025',
            'konten' => 'Akan diadakan lomba kebersihan kelas pada bulan Agustus.',
            'tanggal' => '2025-07-15',
            'kategori' => 'Akademik',
            'tag' => 'Pendaftaran,semester',
            'status' => 'Aktif',
            'icon' => 'fa-trophy',
            'admin_id' => 1, // Assuming admin_id is the ID of the user creating the announcement
        ]);
    }
}
