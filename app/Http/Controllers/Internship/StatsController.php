<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\School\Profile\Professor;

class StatsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Teacher']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $professors=\App\User::where('is_professor',1)
        ->Where('name','like','%'.$r['s'].'%')
        ->get();

        $department_list=Professor::get()
        ->unique('department_id')
        ->pluck('department_id','department_id')
        ->all();

        $professors = Professor::Where('first_name','like','%'.$r['s'].'%')
        ->orWhere('last_name','like','%'.$r['s'].'%')
        ->get();

        if($r['department'])
        $professors = Professor::Where('department_id','like','%'.$r['department'].'%')
        ->get();

        return view("space.internship.stats.index",compact('professors','department_list'));
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
