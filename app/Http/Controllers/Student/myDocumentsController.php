<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Documents\renderController;

class myDocumentsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','Etudiant']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        if(!auth()->user()->people->internship()->exists()){
            return view('edocs.partials.fillforms');
        }else{
        if(isset($r->action)){
        if(in_array('delete',$r->action)){
            auth()->user()->people->clearMediaCollection('internship');
        }
        if(in_array('render',$r->action)){
            $pdf = new renderController;
                $pdf->convention();
                $pdf->recommendation_letter();
            }
        }
        if(auth()->user()->people->hasMedia('internship')){
            $documents = auth()->user()->people->getMedia('internship');
            return view('edocs.index', compact('documents'));
        }
        else return view('edocs.partials.nodocs');
    }

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
