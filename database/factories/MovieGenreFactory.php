<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MovieGenre>
 */
class MovieGenreFactory extends Factory
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
            'genre_id' => Genre::factory()
        ];
    }
}
