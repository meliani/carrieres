<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EventController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        //App\Event::all();
        return view('frontend.events.index');
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

    }

    public function destroy(Request $request, Event $event)
    {
    }
}