<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Frontend\BaseController;
use App\Event;
use Illuminate\Http\Request;
use App\Models\Profile\Student;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;*/

class EventController extends BaseController
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        //Events::all();
        return view('backend.events.index');
    }
 
    public function show(Event $event)
    {
    }   
    
    public function create()
    {
        return view('backend.events.create');
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Event $event)
    {
        $input=$request->all();
        $event = new Event($input);
        $event->save();
        return view('backend.events.create');
    }

    public function destroy(Request $request, Event $event)
    {
    }
}