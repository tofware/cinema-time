<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Cinema;
use App\Models\Client;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use App\Models\Reservation;
use App\Models\ReservationSeat;
use App\Models\Room;
use App\Models\Schedule;
use App\Models\ScheduledMovie;
use App\Models\Seat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        Actor::factory(50)->create();
//        Cinema::factory(5)->create();
//        Client::factory(50)->create();
//        Genre::factory(50)->create();
//        MovieGenre::factory(50)->create();
//        Movie::factory(5)->create();
//        ReservationSeat::factory(100)->create();
//        Reservation::factory(50)->create();
//        Room::factory(10)->create();
        ScheduledMovie::factory(5)->create();
//        Schedule::factory(50)->create();
//        Seat::factory(150)->create();
    }
}
