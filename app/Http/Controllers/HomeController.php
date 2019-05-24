<?php

namespace App\Http\Controllers;

use App\Models\Profile\Person;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::find(auth()->user()->id);
        return view('home',compact('person'));
        /*if(Auth::user()->can('encadrer'))
            return redirect(route('mesEcadrements.index'));
        else
            return redirect(route('monStage.index'));*/

    }
}
