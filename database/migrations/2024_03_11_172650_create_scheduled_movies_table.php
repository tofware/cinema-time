<?php

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Schedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scheduled_movies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cinema::class, 'cinema_id');
            $table->foreignIdFor(Movie::class, 'movie_id');
            $table->foreignIdFor(Schedule::class, 'schedule_id');
            $table->time('hour');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_movies');
    }
};
