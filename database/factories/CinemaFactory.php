<?php

namespace Database\Factories;

use App\Models\Cinema;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cinema>
 */
class CinemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location' => fake()->unique()->name
        ];
    }
}
