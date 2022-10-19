<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function crud() {
        return view('crud-panel', [
            'users' => User::all(),
            'events' => Event::all(),
            'reservations' => Reservation::all(),
        ]);
    }
}