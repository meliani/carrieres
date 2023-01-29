<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\Models\Profile\Student::where('is_active')->WhereNot('model_status_id')->with('internship')
        ->with(['stream' => function ($query) {$query->orderBy('order','ASC');}])->orderBy('full_name', 'ASC')->get();
        //return view with list of possible actions
        return view('backend.init.index',['students'=>$students]);
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
    public function generateIds()
    {
        $students = App\Models\Profile\Student::orderBy('full_name', 'ASC')->get();
        App\Models\Profile\Student::where('is_active')->WhereNot('model_status_id')
        ->with(['stream' => function ($query) {$query->orderBy('order','ASC');}])->orderBy('full_name', 'ASC')->first();
        $i=1;
        // $students->each(func($student){
        //     $student->setPin($student->stream->order,$i);
        //     $i++;
        //     });

    }
    public function setPin($order,$i){
        $this->pin = 0;
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
