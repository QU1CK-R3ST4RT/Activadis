<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

use function PHPUnit\Framework\once;

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
    public function store() {
        $newEvent = new Event();

        $newEvent->user_id = Auth::user()->id;
        $newEvent->name = request('name') or "Name not assigned";
        $newEvent->location = request('location');
        $newEvent->start_time = request('start_time');
        $newEvent->end_time = request('end_time');
        $newEvent->description = request('description');

        if(request('food_included') == "on") {
            $newEvent->has_food = '1';
        }
        else {
            $newEvent->has_food = '0';
         }

        $newEvent->cost = request('price');
        $newEvent->min_people = request('minParticipant');
        $newEvent->max_people = request('maxParticipants');
        $newEvent->color = request('color');
        $newEvent->necessities = request('description');
        $newEvent->image = '1';

        $newEvent->save();

        return redirect('/');
    }

    public function delete($id) {
       $event = Event::all()->where('id', $id)->first();

        if ($event) {
            $event->delete();
        }

        return redirect('/');
    }

    public function edit() {
//        $userId = Auth::user()['id'];
        $foundEvent = Event::all()->where('id', request('id'))->first();

        $foundEvent->user_id = Auth::user()['id'];
        $foundEvent->name = request('name') ?: $foundEvent['name'];
        $foundEvent->color = request('color') ?: $foundEvent['color'];
        $foundEvent->location = request('location') ?: $foundEvent['location'];
        $foundEvent->description = request('description') ?: $foundEvent['description'];
        $foundEvent->cost = request('cost') ?: $foundEvent['cost'];
        $foundEvent->start_time = request('start_time') ?: $foundEvent['start_time'];
        $foundEvent->end_time = request('end_time') ?: $foundEvent['end_time'];
        $foundEvent->max_participants = request('max_participants') ?: $foundEvent['max_participants'];
        $foundEvent->has_food = request('has_food') ?: $foundEvent['has_food'];
        $foundEvent->image = request('image') ?: $foundEvent['image'];
        $foundEvent->min_people = request('minParticipant') ?: $foundEvent['min_people'];
        $foundEvent->max_people = request('maxParticipants') ?: $foundEvent['max_people'];

        $foundEvent->save();
        return redirect('/');
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
