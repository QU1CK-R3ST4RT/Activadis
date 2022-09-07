<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function user() {
        return User::all()->find($this->user_id);
    }

    public function reservation() {
        return $this->hasMany(Reservation::class);
    }
}
