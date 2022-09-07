<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasOne(User::class);
    }

    public function events() {
        return $this->hasOne(Event::class);
    }
}
