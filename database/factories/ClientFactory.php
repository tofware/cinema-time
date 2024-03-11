<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'reservation_id' => Reservation::factory()
        ];
    }
}
