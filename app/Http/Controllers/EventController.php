<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function getEventPage() {
        return view('events');
    }
    public function allEvents(){
        return view('events', ['data' => Events::all()]);
    }
}
