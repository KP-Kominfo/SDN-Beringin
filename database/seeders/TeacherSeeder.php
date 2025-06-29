<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'nama' => 'Muh Hasan Rifai, S.Pd',
            'kelas' => null,
            'mapel' => null,
            'kategori' => 'kepsek',
            'foto' => 'guru/Muh Hasan Rifai, S.Pd KepSek.jpeg',
        ]);

        Teacher::create([
            'nama' => 'Desy Indar Kusumastuti, S.Pd',
            'kelas' => 'V',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/Desy Indar Kusumastuti, S.Pd Guru Kelas V.png',
        ]);

        Teacher::create([
            'nama' => 'Ester Eny Puspitawati, S.Pd',
            'kelas' => 'VI',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/Ester Eny Puspitawati, S.Pd Guru Kelas VI.png',
        ]);

        Teacher::create([
            'nama' => 'Ika Yuliawati  A.Md.',
            'kelas' => null,
            'mapel' => null,
            'kategori' => 'Staff',
            'foto' => 'guru/Ika Yuliawati  A.Md. Pegawai Administrasi.png',
        ]);

        Teacher::create([
            'nama' => 'Mustofa, S.Pd',
            'kelas' => null,
            'mapel' => 'PAI',
            'kategori' => 'Guru',
            'foto' => 'guru/Mustofa, S.Pd Guru PAI.png',
        ]);

        Teacher::create([
            'nama' => 'Paryono, S.Pd',
            'kelas' => 'IV',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/Paryono, S.Pd Guru Kelas IV.png',
        ]);

        Teacher::create([
            'nama' => 'Puryanto, A.Ma.Pd',
            'kelas' => null,
            'mapel' => 'PJOK',
            'kategori' => 'Guru',
            'foto' => 'guru/Puryanto, A.Ma.Pd Guru PJOK.png',
        ]);

        Teacher::create([
            'nama' => 'Rahmad Suryo Atmojo, S.Pd',
            'kelas' => 'II',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/Rahmad Suryo Atmojo, S.Pd Guru Kelas ll.png',
        ]);

        Teacher::create([
            'nama' => 'Sri Hastutik, S.Pd',
            'kelas' => 'I',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/Sri Hastutik, S.Pd Guru Kelas l.png',
        ]);

        Teacher::create([
            'nama' => 'Sri Utami, S.Pd',
            'kelas' => 'III',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/Sri Utami, S.Pd Guru Kelas III.png',
        ]);

        Teacher::create([
            'nama' => 'Djoni Chrissensia',
            'kelas' => null,
            'mapel' => null,
            'kategori' => 'Staff',
            'foto' => 'guru/Djoni Chrissensia Pegawai Keamanan.png',
        ]);
    }
}
