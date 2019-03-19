<?php

namespace App\Http\Controllers\School;

use App\Models\School\Profile\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PeopleController extends Controller
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
        return view('space.people.profile.activation');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        //dd($r);
        if($r->hasFile('cv'))
        $this->storeFile($r->file('cv'),'uploads/students/init_data/CVs');        
        if($r->hasFile('lm'))
        $this->storeFile($r->file('lm'),'uploads/students/init_data/LMs');        
        if($r->hasFile('photo'))
        $this->storeFile($r->file('photo'),'uploads/students/init_data/picture');

        $person = People::find(auth()->user()->id);
        $person->update($r->all());
        $person->activate();
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
        $person = People::find(auth()->user()->id);
        return view('space.people.profile.activation',compact('person'));
    }

    public function storeFile($file,$basePath='uploads/students/init_data/')
    {
        if ($file->isValid())
        {
            $path = $file->storeAs($basePath,Carbon::now()->format('ymd_hi') .'-'. $file->getClientOriginalName(),'public');      
            //$path = Storage::disk('uploads')->put('', $doc);
            $path = 'storage/'.$path;
        }elseif($file->getError()!='UPLOADERROK')
        Flash::error($file->getErrorMessage());
        //return back();
        }
    }
