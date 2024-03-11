<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function actors(): HasMany
    {
        return $this->hasMany(Actor::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class)->using(MovieGenre::class);
    }

    public function scheduledMovies(): HasMany
    {
        return $this->hasMany(ScheduledMovie::class);
    }
}
