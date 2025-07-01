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
            'foto' => 'guru/1.jpeg',
        ]);

        Teacher::create([
            'nama' => 'Desy Indar Kusumastuti, S.Pd',
            'kelas' => 'V',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/2.png',
        ]);

        Teacher::create([
            'nama' => 'Ester Eny Puspitawati, S.Pd',
            'kelas' => 'VI',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/3.png',
        ]);

        Teacher::create([
            'nama' => 'Ika Yuliawati  A.Md.',
            'kelas' => null,
            'mapel' => null,
            'kategori' => 'Staff',
            'foto' => 'guru/4.png',
        ]);

        Teacher::create([
            'nama' => 'Mustofa, S.Pd',
            'kelas' => null,
            'mapel' => 'PAI',
            'kategori' => 'Guru',
            'foto' => 'guru/5.png',
        ]);

        Teacher::create([
            'nama' => 'Paryono, S.Pd',
            'kelas' => 'IV',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/6.png',
        ]);

        Teacher::create([
            'nama' => 'Puryanto, A.Ma.Pd',
            'kelas' => null,
            'mapel' => 'PJOK',
            'kategori' => 'Guru',
            'foto' => 'guru/7.png',
        ]);

        Teacher::create([
            'nama' => 'Rahmad Suryo Atmojo, S.Pd',
            'kelas' => 'II',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/8.png',
        ]);

        Teacher::create([
            'nama' => 'Sri Hastutik, S.Pd',
            'kelas' => 'I',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/9.png',
        ]);

        Teacher::create([
            'nama' => 'Sri Utami, S.Pd',
            'kelas' => 'III',
            'mapel' => 'Wali Kelas',
            'kategori' => 'Guru',
            'foto' => 'guru/10.png',
        ]);

        Teacher::create([
            'nama' => 'Djoni Chrissensia',
            'kelas' => null,
            'mapel' => null,
            'kategori' => 'Staff',
            'foto' => 'guru/11.png',
        ]);
    }
}