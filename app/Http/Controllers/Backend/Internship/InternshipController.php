<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Backend\BaseController;
use App\Http\Livewire\Internships;
use App\Models\School\Internship;
use App\Models\School\Internship\Defense;
use Illuminate\Http\Request;
use \App\Models\Profile\Student;
//use Route;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreInternship;

/* I guess this class is not working anymore */

class InternshipController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(request()->has('s')){
            $internships = Internship::whereHas('student', function ($query) {
                $query->where('user_id','=', request('s'));
                
            })->with('student')->get();
            $internships = Internship::with('student')->get();

        }else{
        $internships = Internship::with('student')->latest()
        ->whereHas('student', 
        function ($query) {
            $query->where('year_id','like','%');
        })->get();
        }

        // $internships = Internship::with('student')->first();
        session(['last_url' => route(Route::current()->getName())]);

        $internships->load(['student','binome']);
// dd($internships[0]->student);
        return view('backend.internships.index',['internships'=> $internships]);
        // return view('backend.internships.index')->with('internships',$internships);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clone($intertnship_id,$user_id)
    {
/*         session(['internship_id' => $intertnship_id]);
        session(['user_id' => $user_id]);
        $internship = Internship::find($intertnship_id);
        return view('backend.internships.create',compact('internship')); */
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($internship = null)
    {
        return view('backend.internships.create',compact('internship'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternship $request)
    {   
        $input = $request->all();
        //dd($request->user()->id);
        $internship = new Internship($input);
        if($request->session()->has('user_id'))
        {
            $internship->user()->associate(session('user_id'));
        }else{
            $internship->user()->associate(user()->id);
        }
        
        
        $internship->groupes()->attach(request('binome_user_id'));
        $internship->save();
        //flash()->success('Votre déclaration a été bien enregistrée.');
        if($request->session()->has('last_url'))
        return session('last_url');
        else
        return back()
        ->with('message', 'Votre déclaration a été bien enregistrée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        return view('backend.internships.edit',compact('internship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(StoreInternship $request, Internship $internship)
    {
        //dd($internship);
        $input = $request->all();
        $internship = Internship::findOrFail($internship->id);

        if($internship->defense()->exists())
        {
            $internship->defense->internship()->associate($internship->id);
            
            /*Defense::Where('internship_id','=',$internship->id)
            ->internship()->associate($internship->id)->save();*/
        }else{
            Defense::create()
            ->fill($input)
            ->internship()
            ->associate($internship->id)
            ->save();
        }
            $internship->fill($input)->save();

        return view('backend.internships.edit',compact('internship'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
