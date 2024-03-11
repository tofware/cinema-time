<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function scheduledMovie(): HasOne
    {
        return $this->hasOne(ScheduledMovie::class);
    }

    public function seats(): BelongsToMany
    {
        return $this->belongsToMany(Seat::class)->using(ReservationSeat::class);
    }
}
