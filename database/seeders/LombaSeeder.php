<?php

namespace Database\Seeders;

use App\Models\Lomba;
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
            'nama_lomba' => 'LOMBA BACA CERPEN',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-03-10',
            'deskripsi' => 'Prestasi LOMBA BACA CERPEN tingkat Sekolah.',
            'gambar' => 'lomba/literasi/syifa.jpeg',
            'kategori' => 'LITERASI',
            'nama_peserta' => ['SYIFA MAR ATUL KHOIRIYAH'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA MENDONGENG',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-04-15',
            'deskripsi' => 'LOMBA MENDONGENG tingkat Sekolah.',
            'gambar' => 'lomba/literasi/BITAQUILLA.jpeg',
            'kategori' => 'LITERASI',
            'nama_peserta' => ['BITAQUILLA ZAGIA AZZAHRA'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA BACA PUISI',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-04-15',
            'deskripsi' => 'LOMBA BACA PUISI tingkat Sekolah.',
            'gambar' => 'lomba/literasi/AURORA.jpeg',
            'kategori' => 'LITERASI',
            'nama_peserta' => ['AURORA NUR KAMELA'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA CERDAS CERMAT',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-04-15',
            'deskripsi' => 'LOMBA CERDAS CERMAT tingkat Sekolah.',
            'gambar' => 'lomba/mapsi/lcc.jpeg',
            'kategori' => 'MAPSI',
            'nama_peserta' => [
                'HIMAWAN AHMAD FAUZI',
                'BITAQUILLA ZAGIA AZZAHRA',
                'SYIFA MAR ATUL KHOIRIYAH',
            ],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA MURATTAL PUTRA',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-04-15',
            'deskripsi' => 'LOMBA MURATTAL PUTRA tingkat Sekolah.',
            'gambar' => 'lomba/mapsi/MURATTAL.jpeg',
            'kategori' => 'MAPSI',
            'nama_peserta' => ['FITZAL ASHFA LUBNA'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA MURATTAL PUTRI',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-04-15',
            'deskripsi' => 'LOMBA MURATTAL PUTRI tingkat Sekolah.',
            'gambar' => 'lomba/mapsi/MURATTAL.jpeg',
            'kategori' => 'MAPSI',
            'nama_peserta' => ['KURNIA ZAIN CHOLISATUN MARFUAH'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA KHAT',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2025-04-15',
            'deskripsi' => 'LOMBA KHAT tingkat Sekolah.',
            'gambar' => 'lomba/mapsi/khat.jpeg',
            'kategori' => 'MAPSI',
            'nama_peserta' => ['FATIMAH AZZAHRA'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA GEGURITAN',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2021-04-15',
            'deskripsi' => 'LOMBA GEGURITAN tingkat Sekolah.',
            'gambar' => 'lomba/jowo/1.jpeg',
            'kategori' => 'bahasa-jawa',
            'nama_peserta' => ['ANDIKA ABDULLAH KHILMI'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA SISWA BERPRESTASI PUTRI',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2021-04-15',
            'deskripsi' => 'LOMBA SISWA BERPRESTASI tingkat Sekolah.',
            'gambar' => 'lomba/berprestasi/1.jpeg',
            'kategori' => 'berprestasi',
            'nama_peserta' => ['KHANZA YUNIAR MAHARANI'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA SISWA BERPRESTASI PUTRA',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2021-04-15',
            'deskripsi' => 'LOMBA SISWA BERPRESTASI tingkat Sekolah.',
            'gambar' => 'lomba/berprestasi/2.jpeg',
            'kategori' => 'berprestasi',
            'nama_peserta' => ['WISNU SETIYO NUGROHO'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA TULISAN MOTIVASI ATAU INSPIRATIF PUTRI',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2021-04-15',
            'deskripsi' => 'LOMBA TULISAN MOTIVASI ATAU INSPIRATIF PUTRI tingkat Sekolah.',
            'gambar' => 'lomba/motivasi/1.jpeg',
            'kategori' => 'motivasi-inspiratif',
            'nama_peserta' => ['NOVIA AURELIA DESWANDARI'],
        ]);

        Lomba::create([
            'admin_id' => 1,
            'nama_lomba' => 'LOMBA TULISAN MOTIVASI ATAU INSPIRATIF PUTRA',
            'tingkat' => 'Tingkat Sekolah',
            'prestasi' => 'Juara 1 Sekolah',
            'tanggal' => '2021-04-15',
            'deskripsi' => 'LOMBA TULISAN MOTIVASI ATAU INSPIRATIF PUTRA tingkat Sekolah.',
            'gambar' => 'lomba/motivasi/2.jpeg',
            'kategori' => 'motivasi-inspiratif',
            'nama_peserta' => ['MUHAMMAD KHOIRUL ANAM'],
        ]);
    }
}
