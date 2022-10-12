<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class EventController extends Controller
{

    /**
        * Deze functie geeft een overzicht van alle evenementen terug.
    */
    public function index() {
        $allEvents = Event::All();

        return view('events.index', [
            'events' => Event::all()
        ]);
    }

    public function event() {
        return view('event-modal');
    }

    /**
        * Deze functie maakt een nieuw evenement aan.
    */
    public function store($params) {
        $newEvent = new Event();

        $newEvent->user_id = request('user_id') or Auth::user()->id;
        $newEvent->name = request('name') or "Name not assigned";
        $newEvent->location = request('location');
        $newEvent->description = request('description');
        $newEvent->necessities = request('necessities');
        $newEvent->cost = request('cost') or 0;
        $newEvent->start_time = request('start_time');
        $newEvent->end_time = request('end_time');
        $newEvent->max_participants = request('max_participants');
        $newEvent->has_food = request('has_food') or false;
        $newEvent->image = request('image') or "";
        $newEvent->min_people = request('min_people');
        $newEvent->max_people = request('max_people');

        $newEvent->save();
    }

    public function delete($id) {
       $event = Event::all()->where('id', $id)->first();

        if ($event) {
            $event->delete();
        }

        return redirect('/');
    }

    public function edit() {
        $foundEvent = Event::all()->where('id', request('id'))->first();

        $foundEvent->user_id = Auth::user()->id;
        $foundEvent->name = request('name') or $foundEvent['name'];
        $foundEvent->location = request('location') or $foundEvent['location'];
        $foundEvent->description = request('description') or $foundEvent['description'];
        $foundEvent->necessities = request('necessities') or $foundEvent['necessities'];
        $foundEvent->cost = request('cost') or $foundEvent['cost'];
        $foundEvent->start_time = request('start_time') or $foundEvent['start_time'];
        $foundEvent->end_time = request('end_time') or $foundEvent['end_time'];
        $foundEvent->max_participants = request('max_participants') or $foundEvent['max_participants'];
        $foundEvent->has_food = request('has_food') or $foundEvent['has_food'];
        $foundEvent->image = request('image') or $foundEvent['image'];
        $foundEvent->min_people = request('min_people') or $foundEvent['min_people'];
        $foundEvent->max_people = request('max_people') or $foundEvent['max_people'];

        $foundEvent->save();
    }

    public function editing($eventID) {
        $foundEvent = Event::all()->find($eventID);
        $Event = isset($foundEvent);

        // Bekijk of de order bestaat, zo wel, laat dan alle data zien.
        if($Event) {
            return view('event-modal', [
                'event' => $foundEvent
            ]);
        } else {
            abort(404);
        }
    }

    public function getEventsWithUser($userID) {
        return Event::all()->where('user_id', $userID);
    }

    public function getReservations($eventID) {
        return Reservation::all()->where('event_id', $eventID);
    }
}
