<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\ReservationSeat;
use App\Models\Seat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ReservationSeat>
 */
class ReservationSeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reservation_id' => Reservation::factory(),
            'seat_id' => Seat::factory()
        ];
    }
}
