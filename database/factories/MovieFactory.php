<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'description' => fake()->text,
            'duration' => fake()->randomNumber(),
            'trailer_url' => fake()->url,
            'image_url' => fake()->url,
            'restriction' => rand(0, 3),
            'format' => rand(0, 3),
            'status' => rand(0, 2)
        ];
    }
}
