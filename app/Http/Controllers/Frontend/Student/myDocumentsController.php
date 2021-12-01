<?php

namespace App\Http\Controllers\Frontend\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Core\Documents\renderController;
use App\Models\Profile\Person;

class myDocumentsController extends Controller
{

    private $documents;
    private $person;

    public function __construct()
    {
        $this->middleware(['auth','Student']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {

        $this->person = auth()->user()->people;

        if(!auth()->user()->people->internship()->exists()){
            if(isset($r->action) && in_array('render',$r->action))
            {
                if(in_array('delete',$r->action)){
                    auth()->user()->people->clearMediaCollection('internship');
                }
                if(in_array('lr',$r->action)){
                    $pdf = new renderController;
                    $pdf->recommendation_letter();
                }

            }
            if(auth()->user()->people->hasMedia('internship')){
                $this->documents = auth()->user()->people->getMedia('internship');
            }
            return view('frontend.documents.partials.fillforms')->with(['documents'=>$this->documents]);
        }else{
        if(isset($r->action))
        {
            if(auth()->user()->people->internship->is_valid == 0)
                return view('frontend.documents.partials.fillforms')->with(['documents'=>$this->documents]);

            if($this->person->is_mobility==1){
                //dd($this->person->is_mobility);
            }
            if(in_array('delete',$r->action)){
                auth()->user()->people->clearMediaCollection('internship');
            }
            if(in_array('render',$r->action))
            {
                if(in_array('convention',$r->action)){
                    $pdf = new renderController;
                    $pdf->convention();
                }
                if(in_array('convention_pfe_maroc',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionPfeMaroc();
                }
                if(in_array('convention_pfe_france',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionPfeFrance();
                }
                if(in_array('convention_pfe_mobilite_autre',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionMobilityPfeAutre();
                }
                if(in_array('convention_mobilite_pfe_autre',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionPfeMaroc();
                }

            }
        }

        if(auth()->user()->people->hasMedia('internship')){
            $this->documents = auth()->user()->people->getMedia('internship');

            if(auth()->user()->people->internship->is_valid == 0)
                return view('frontend.documents.partials.fillforms');

            return view('frontend.documents.index')->with(['documents'=>$this->documents]);
        }
        else return view('frontend.documents.partials.nodocs');
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
