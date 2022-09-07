<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    function users() {
        return $this->hasOne(User::class);
    }

    function events() {
        return $this->hasOne(Event::class);
    }
}
