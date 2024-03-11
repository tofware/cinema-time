<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\ScheduledMovie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reservation>
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
            'scheduled_movie_id' => ScheduledMovie::factory(),
            'client_id' => Client::factory()
        ];
    }
}
