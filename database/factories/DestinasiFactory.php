<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destinasi>
 */
class DestinasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'slug' => $this->faker->slug,
            'lokasi' => $this->faker->address,
            'harga' => $this->faker->numberBetween(100000, 1000000),
            'excerpt' => $this->faker->paragraph(1),
            'deskripsi' => $this->faker->paragraphs(5, true), // 'This is a sentence.
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'user_id' => 1,
            'category_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
