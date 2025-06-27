<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin SDN',
            'email' => 'admin@sdn.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // // Teacher
        // User::create([
        //     'name' => 'Bapak Guru',
        //     'email' => 'guru@sdn.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'teacher',
        // ]);

        // // Student
        // User::create([
        //     'name' => 'Siswa Cerdas',
        //     'email' => 'siswa@sdn.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'student',
        // ]);
    }
}
