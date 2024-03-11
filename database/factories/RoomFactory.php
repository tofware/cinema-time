<?php

namespace Database\Factories;

use App\Models\Cinema;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Room>
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
        return [
            'cinema_id' => Cinema::factory(),
            'number_of_seats' => fake()->numberBetween(1, 50)
        ];
    }
}
