<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $description = fake()->unique()->paragraph(20);
        return [
            "intitule" => fake()->unique()->sentence(1),
            "apercu" => Str::limit($description, 150, '...'),
            "description" => $description,
            "localisation" => fake()->sentence(3),
            "dimensions" => fake()->sentence(2),
            "image" => fake()->imageUrl(),
            "prix" => fake()->numberBetween(77, 153).'€',
        ];
    }
}
