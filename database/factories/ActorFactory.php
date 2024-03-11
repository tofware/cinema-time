<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Actor>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => Movie::factory(),
            'name' => fake()->name
        ];
    }
}
