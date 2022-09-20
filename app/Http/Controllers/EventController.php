<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $allEvents = Event::All();

        return view('events', [
            ['events'] => $allEvents
        ]);
    }

    public function store($params) {
        $newEvent = new Event();

        $newEvent->user_id = $params['user_id'] or Auth::user()->id;
        $newEvent->name = $params['name'] or "Name not assigned";
        $newEvent->location = $params['location'];
        $newEvent->description = $params['description'];
        $newEvent->necessities = $params['necessities'];
        $newEvent->cost = $params['cost'] or 0;
        $newEvent->start_time = $params['start_time'];
        $newEvent->end_time = $params['end_time'];
        $newEvent->max_participants = $params['max_participants'];
        $newEvent->has_food = $params['has_food'] or false;
        $newEvent->image = $params['image'] or "";
        $newEvent->min_people = $params['min_people'];
        $newEvent->max_people = $params['max_people'];

        $newEvent->save();
    }

    public function delete($id) {
        $foundEvent = Event::all()->where('id', $id);

        if($foundEvent) {
            $foundEvent->delete();
        }
    }

    public function edit($params) {
        $foundEvent = Event::all()->where('id', $params['id']);

        $foundEvent->user_id = $params['user_id'] or Auth::user()->id;
        $foundEvent->name = $params['name'] or $foundEvent['name'];
        $foundEvent->location = $params['location'] or $foundEvent['location'];
        $foundEvent->description = $params['description'] or $foundEvent['description'];
        $foundEvent->necessities = $params['necessities'] or $foundEvent['necessities'];
        $foundEvent->cost = $params['cost'] or $foundEvent['cost'];
        $foundEvent->start_time = $params['start_time'] or $foundEvent['start_time'];
        $foundEvent->end_time = $params['end_time'] or $foundEvent['end_time'];
        $foundEvent->max_participants = $params['max_participants'] or $foundEvent['max_participants'];
        $foundEvent->has_food = $params['has_food'] or $foundEvent['has_food'];
        $foundEvent->image = $params['image'] or $foundEvent['image'];
        $foundEvent->min_people = $params['min_people'] or $foundEvent['min_people'];
        $foundEvent->max_people = $params['max_people'] or $foundEvent['max_people'];

        $foundEvent->save();
    }

    // public function getEventsWithUser() {

    // }
}
