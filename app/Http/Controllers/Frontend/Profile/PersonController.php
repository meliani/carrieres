<?php

namespace App\Http\Controllers\Frontend\Profile;

use App\Models\Profile\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeople;

use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('frontend.profile.person.activation');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePeople $request)
    {
        $person = Person::find(user()->id);
/*
        $validated = $request->validate([
            'gender_id' => 'required',
            'pfe_id' => 'required',
            'title' => 'required',
            'full_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_perso' => 'required|max:191',
            'phone' => 'required',
            'cv' => 'required',
            'lm' => 'required',
            'photo' => 'required',
            'birth_date',
            'ine',
            'branche_id',
            'filiere_text' => 'required',
            'is_mobility',
            'abroad_school',
            'scholar_year',
            'is_active'
        ]);
*/
        if(isset($request->action)=='validate')
                dd(isset($request->action));
        $person->update(
            $request->all()
        );

        $person->activate();
        flash('votre profil a été mis a jour.','success');

        return view('home',compact('person'))->with('message','votre profil a été mis a jour.');
        /*$person->update($r->all());
        $person->activate();
        $person->save();*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Activate the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate()
    {
        $person = Person::firstOrCreate(['user_id' => user()->id]);
        return view('frontend.profile.person.activation',compact('person'));
    }

    }
