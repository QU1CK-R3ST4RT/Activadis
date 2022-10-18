<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store($event_id) {
        # First, check if the event that we are trying to make a reservation for
        # Actually exists in the current context:
        $foundEvent = Event::all()->where("id", $event_id)->first();
        $eventExists = empty($foundEvent) == false;

        # Check if the current user exists:
        $currentUser =  Auth::user();
        $userExists = isset($currentUser);

        # Add new reservation to database:
        if($userExists && $eventExists) {

            $foundReservation = Reservation::all()->where([
                "event_id" => $event_id,
                "user_id" => $currentUser->id
            ])->first();

            # Check if a reservation already exists:
            $reservationExists = empty($foundReservation) == false;
            if($reservationExists) {
                return redirect("/");
            }

            # Start adding a new reservation:
            $newReservation = new Reservation();
            $newReservation->user_id = $currentUser->id;
            $newReservation->event_id = $event_id;

            # Save the new reservation after having assigned the attributes:
            $newReservation->save();
            return redirect("/")->with([
                'message' => "Successfully joined event."
            ]);
        } else {
            if (!$userExists) {
                return redirect("/login");
            } else {
                return redirect("/");
            }
        }
    }
}
