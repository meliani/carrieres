<?php

namespace App\Http\Controllers;

use App\DataTables\Admin\reportSubmissionDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreatereportSubmissionRequest;
use App\Http\Requests\Admin\UpdatereportSubmissionRequest;
use App\Repositories\Admin\reportSubmissionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Carbon\Carbon;


class reportSubmissionController extends AppBaseController
{
    /** @var  reportSubmissionRepository */
    private $reportSubmissionRepository;

    public function __construct(reportSubmissionRepository $reportSubmissionRepo)
    {
        $this->reportSubmissionRepository = $reportSubmissionRepo;
    }

    /**
     * Display a listing of the reportSubmission.
     *
     * @param reportSubmissionDataTable $reportSubmissionDataTable
     * @return Response
     */
    public function index(reportSubmissionDataTable $reportSubmissionDataTable)
    {
        return $reportSubmissionDataTable->render('report_submissions.create');
    }

    /**
     * Show the form for creating a new reportSubmission.
     *
     * @return Response
     */
    public function create()
    {
        return view('report_submissions.create');
    }

    /**
     * Store a newly created reportSubmission in storage.
     *
     * @param CreatereportSubmissionRequest $request
     *
     * @return Response
     */
    public function store(CreatereportSubmissionRequest $request)
    {
        $input = $request->all();

        if($request->hasFile('doc_rapport'))
        {
            $doc = $request->file('doc_rapport');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('Y').'/rapports',$input['nom'].' '.$input['prenom'].' - '.Carbon::now()->format('d-M h.i').'.'.$doc->getClientOriginalExtension(),'public');      
                $input['doc_rapport'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            Flash::error($doc->getErrorMessage());
        }
        if($request->hasFile('doc_fiche_evaluation'))
        {
            $doc = $request->file('doc_fiche_evaluation');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('Y').'/fiche_evaluation',$input['nom'].' '.$input['prenom'].' - '.Carbon::now()->format('d-M h.i').'.'.$doc->getClientOriginalExtension(),'public');      
                $input['doc_fiche_evaluation'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            Flash::error($doc->getErrorMessage());
        }
        if($request->hasFile('doc_convention'))
        {
            $doc = $request->file('doc_convention');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('Y').'/conventions',$input['nom'].' '.$input['prenom'].' - '.Carbon::now()->format('d-M h.i').'.'.$doc->getClientOriginalExtension(),'public');      
                $input['doc_convention'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            Flash::error($doc->getErrorMessage());
        }
        if($request->hasFile('doc_attestation'))
        {
            $doc = $request->file('doc_attestation');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('Y').'/attestations',$input['nom'].' '.$input['prenom'].' - '.Carbon::now()->format('d-M h.i').'.'.$doc->getClientOriginalExtension(),'public');      
                $input['doc_attestation'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            Flash::error($doc->getErrorMessage());
        }

        
        $reportSubmission = $this->reportSubmissionRepository->create($input);

        Flash::success('Report Submission saved successfully.');

        return redirect(route('reportSubmissions.create'))->with('message', 'Documents bien soumis.');
    }

    /**
     * Display the specified reportSubmission.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified reportSubmission.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified reportSubmission in storage.
     *
     * @param  int              $id
     * @param UpdatereportSubmissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereportSubmissionRequest $request)
    {
       
    }

    /**
     * Remove the specified reportSubmission from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

    }
}
