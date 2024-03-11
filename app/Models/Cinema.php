<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cinema extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function scheduledMovies(): HasMany
    {
        return $this->hasMany(ScheduledMovie::class);
    }
}
