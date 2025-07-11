<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence,
            'konten' => $this->faker->paragraph(5),
            'foto' => 'images/dummy.jpg', // sesuaikan jika ingin upload sungguhan
            'admin_id' => User::factory(), // relasi ke user
        ];
    }
}
