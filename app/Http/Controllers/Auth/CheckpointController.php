<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\School\Profile\People;

class CheckpointController extends Controller
{
    public function __invoke()
    {
        $person = People::find(auth()->user()->id);

        if(isset($person) && $person->active()){
            return '/home';
        }else{
            return '/welcome';
    }
}
