<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use \App\Models\Event;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EventStudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $events = \App\Models\Event::all();
        return view('frontend.events.index',compact('events'));
    }
 
    public function show(Event $event)
    {
    }   
    
    public function create(Event $event)
    {
        $event->students()->attach(user()->student());
        $event->save();
        $events = Event::all();
        return view('frontend.events.index',compact('events'));   
     }

    public function store(Request $request)
    {
    }

    public function update(Request $request, Event $event)
    {
        //dd($event->id);

    }

    public function destroy(Request $request, Event $event)
    {
    }
}