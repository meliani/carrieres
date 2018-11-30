<?php

namespace App\Http\Controllers\Admin;

use App\Models\Application;
use App\Models\offreDeStage;
use App\Http\Requests\Admin;
use Flash;
use App\Http\Controllers\Controller;
use Response;
use Carbon\Carbon;

class applicationsController extends Controller
{
    /** @var  offresDeStagesRepository */
    private $offresDeStagesRepository;

    public function __construct()
    {

    }

    /**
     * Display a listing of the offresDeStages.
     *
     * @param applicationsDataTable $applicationsDataTable
     * @return Response
     */
    public function index()
    {
        //withCount('')->get() paginate(15)
        $applications = Application::paginate(50)->where('OffresDeStages.status', '=', NULL );
        //$offers = offreDeStage::all();
        //dump($applications);
        //dd($applications->offresDeStages);
        return view('admin.applications.index')->with([
            'applications' => $applications
        ]);
    }

    /**
     * Display the specified offresDeStages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            Flash::error('Offres De Stages not found');

            return redirect(route('admin.offresDeStages.index'));
        }

        return view('admin.applications.show')->with('offresDeStages', $offresDeStages);
    }

}