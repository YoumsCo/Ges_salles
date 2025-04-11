<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => 1,
            "room_id" => Room::all()->random()->id,
            "duree" => fake()->numberBetween(1, 24).'H',
            "date" => fake()->dateTimeBetween('now', '1 months'),
        ];
    }
}
