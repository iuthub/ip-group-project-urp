<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    public function getEventPage() {
        return view('events');
    }
    public function getEventRegistrationPage(){
        return view('eregister');
    }
    public function registerEvent(EventRequest $req){
        $event = new Events();
        $event->name = $req->input('name');
        $event->organization = $req->input('organization');
        $event->place = $req->input('place');
        $event->date = $req->input('date');
        $event->requirements = $req->input('requirements');
        $event->description = $req->input('description');

        $event->save();

        return redirect()->route('registerEventPage')->with('success', 'Event has been registered.');
    }
    public function allEvents(){
        return view('events', ['data' => Events::all()]);
    }
}
