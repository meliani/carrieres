<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile\Person;

class CheckpointController extends Controller
{
    public function __invoke()
    {
        $person = Person::find(auth()->user()->id);

        if(isset($person) && $person->active()){
            return '/home';
        }else{
            return '/Profile';
    }
}
}
