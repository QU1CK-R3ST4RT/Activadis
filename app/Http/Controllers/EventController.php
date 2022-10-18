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
        * This function returns a view with all the events within the system.
        * @return View - A view passed alongside a collection of the events.
        * @see \Illuminate\Database\Eloquent\Collection
    */
    public function index() {
        $allEvents = Event::All();

        return view('events.index', [
            'events' => Event::all()
        ]);
    }

    /**
        * This function return the event modal alongside the wildcard of the event.
        * @see Event
    */
    public function event() {
        return view('event-modal');
    }

    /**
        * This function adds a new event to the database,
        * @see Event
        * @implnote - The request is used as a wildcard used in @link routes/web.php
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
         $newEvent->max_participants = request('maxParticipants');
         $newEvent->min_people = request('minParticipant');
         $newEvent->max_people = request('maxParticipants');
        $newEvent->color = request('color');
        $newEvent->necessities = request('description');
        $newEvent->image = '1';

        $newEvent->save();

        return redirect('/');
    }

    /**
        * This function deletes an event from the database.
        * @see Event
        * @implnote - The $id parameter is supplied in the route itself.
    */
    public function delete($id) {
       $event = Event::all()->where('id', $id)->first();

        if ($event) {
            $event->delete();
        }

        return redirect('/');
    }

    /**
        * This function edits an existing event that is inside of the database.
        * @see Event
        * @return Redirect - When editing has been completed.
        * @implnote - The request is used as a wildcard used in @link routes/web.php
    */
    public function edit() {
        $foundEvent = Event::all()->where('id', request('id'))->first();

        $foundEvent->user_id = Auth::user()['id'];
        $foundEvent->name = request('name') ?: $foundEvent['name'];
        $foundEvent->color = request('color') ?: $foundEvent['color'];
        $foundEvent->location = request('location') ?: $foundEvent['location'];
        $foundEvent->description = request('description') ?: $foundEvent['description'];
        $foundEvent->necessities = request('necessities') ?: $foundEvent['necessities'];
        $foundEvent->cost = request('cost') ?: $foundEvent['cost'];
        $foundEvent->start_time = request('start_time') ?: $foundEvent['start_time'];
        $foundEvent->end_time = request('end_time') ?: $foundEvent['end_time'];
        $foundEvent->max_participants = request('max_participants') ?: $foundEvent['max_participants'];
        $foundEvent->has_food = request('has_food') ?: $foundEvent['has_food'];
        $foundEvent->image = request('image') ?: $foundEvent['image'];
        $foundEvent->min_people = request('min_people') ?: $foundEvent['min_people'];
        $foundEvent->max_people = request('max_people') ?: $foundEvent['max_people'];

        $foundEvent->save();
        return redirect('/');
    }

    /**
        * This function returns the editing modal alongside the data that is required.
        * @return View - A view alongside the required information.
        * @throws \Symfony\Component\HttpKernel\Exception\HttpException - If the event does not exist.
    */
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

    /**
        * This function returns all the events associated with a specific user.
        * @return Collection - A collection with all the events. 
    */
    public function getEventsWithUser($userID) {
        return Event::all()->where('user_id', $userID);
    }

    /**
        * This function returns all the reservation associated with an event.
        * @return Collection - A collection with all the reservations. 
    */
    public function getReservations($eventID) {
        return Reservation::all()->where('event_id', $eventID);
    }
}
