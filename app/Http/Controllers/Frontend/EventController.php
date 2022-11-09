<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use \App\Models\Event;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EventController extends BaseController
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
    
    public function create()
    {
        return view('frontend.events.create');
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request, Event $event)
    {
        //dd($event->id);
        $event->students()->attach(user()->student());
        $event->save();
        $events = Event::all();
        return view('frontend.events.index',compact('events'));
    }

    public function destroy(Request $request, Event $event)
    {
    }
}