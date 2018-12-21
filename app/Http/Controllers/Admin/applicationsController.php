<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;



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
        /** temporary disabled but we gonna see
        $applications = Application::paginate(100);
        */
        /** the new waaaaaaaay */
        $applications = DB::table('ApplicationsView')
        ->select('*')
        ->orderBy('created_at', 'DESC')
        ->get();

        /** just do it simple at first */
        //->where('OffreDeStage.status', 'is', null);
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