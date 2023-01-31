<?php

namespace App\Http\Controllers\Frontend\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Core\Documents\renderController;
use App\Models\Profile\Student;

class myDocumentsController extends Controller
{

    private $documents;
    private $student;

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

        $this->student = auth()->user()->student;
        // dd($this->student);

        if(!auth()->user()->student->internship()->exists()){
            if(isset($r->action) && in_array('render',$r->action))
            {
                if(in_array('delete',$r->action)){
                    auth()->user()->student->clearMediaCollection('internship');
                }
                if(in_array('lr',$r->action)){
                    $pdf = new renderController;
                    $pdf->recommendation_letter();
                }

            }
            if(auth()->user()->student->hasMedia('internship')){
                $this->documents = auth()->user()->student->getMedia('internship');
            }
            return view('frontend.documents.partials.fillforms',['documents'=>$this->documents]);
        }else{
        if(isset($r->action))
        {
            if(auth()->user()->student->internship->is_valid == 0)
                return view('frontend.documents.partials.fillforms',['documents'=>$this->documents]);

            if($this->student->is_mobility==1){
                //dd($this->person->is_mobility);
            }
            if(in_array('delete',$r->action)){
                auth()->user()->student->clearMediaCollection('internship');
            }
            if(in_array('render',$r->action))
            {
                if(in_array('global_agreement',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionGlobale();
                }
                if(in_array('france_agreement',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionFrance();
                }
                if(in_array('mobility_global_agreement',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionMobilityAutre();
                }
                if(in_array('mobility_france_agreement',$r->action)){
                    $pdf = new renderController;
                    $pdf->conventionMobilityFrance();
                }

            }
        }

        if(auth()->user()->student->hasMedia('internship')){
            $this->documents = auth()->user()->student->getMedia('internship');

            if(auth()->user()->student->internship->is_valid == 0)
                return view('frontend.documents.partials.fillforms');

            return view('frontend.documents.index',['documents'=>$this->documents]);
        }
        else return view('frontend.documents.index');
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
