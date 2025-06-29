<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BeritaSeeder::class,
            GaleriSeeder::class,
            LombaSeeder::class,
            PengumumanSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
