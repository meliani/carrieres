<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship;
use App\Models\School\Internship\Defense;
use Illuminate\Http\Request;
use \App\Models\Profile\Student;
use Route;

class InternshipController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $internships = Internship::latest()->paginate();
        if(request()->has('s')){
            $internships = Internship::whereHas('student', function ($query) {
                $query->where('pfe_id', 'like', request('s'));
                
            })->get();

        }else{
        $internships = Internship::latest()->whereHas('student', function ($query) {
            $query->where('ine', '=', 3)
            ->where('scholar_year','2018-2019');
        })->paginate();
        }

        session(['last_url' => route(Route::current()->getName())]);
        return view('backend.internships.index',compact('internships'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clone($intertnship_id,$user_id)
    {
        session(['internship_id' => $intertnship_id]);
        session(['user_id' => $user_id]);
        $internship = Internship::find($intertnship_id);
        return view('backend.internships.create',compact('internship'));
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
    public function store(Request $request)
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
    public function update(Request $request, Internship $internship)
    {
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

        return view('backend.internships.edit',compact('internship'))
        ->with('message', 'Votre déclaration a été bien modifiee.');


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
