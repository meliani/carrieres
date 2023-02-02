<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile\Person;

/** NOT USED ANYMORE */

class CheckpointController extends Controller
{
    public function __invoke()
    {
        $person = Person::find(user()->id);

        if(isset($person) && $person->active()){
            //return view('profile/activation')->with('person',$person);
            return view('/profile/activation');
        }else{
            return route('home');
    }
}
}
