<?php

namespace Database\Factories;

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Room;
use App\Models\Schedule;
use App\Models\ScheduledMovie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ScheduledMovie>
 */
class ScheduledMovieFactory extends Factory
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
            'movie_id' => Movie::factory(),
            'schedule_id' => Schedule::factory(),
            'room_id' => Room::factory(),
            'hour' => fake()->time(),
        ];
    }
}
