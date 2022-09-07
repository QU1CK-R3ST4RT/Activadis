<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    function user() {
        return $this->hasOne(User::class);
    }

    function reservation() {
        return $this->hasMany(Reservation::class);
    }
}
