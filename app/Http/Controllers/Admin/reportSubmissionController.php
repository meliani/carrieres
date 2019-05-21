<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\reportSubmissionDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreatereportSubmissionRequest;
use App\Http\Requests\Admin\UpdatereportSubmissionRequest;
use App\Repositories\Admin\reportSubmissionRepository;

use App\Http\Controllers\AppBaseController;
use Response;

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
        return $reportSubmissionDataTable->render('admin.report_submissions.index');
    }

    /**
     * Show the form for creating a new reportSubmission.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.report_submissions.create');
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
        if($request->hasFile('doc_rapport'))
        {
            $doc = $request->file('doc_rapport');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('yyyy').'/rapports/',Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $input['doc_rapport'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            flash()->error($doc->getErrorMessage());
        }
        if($request->hasFile('doc_fiche_evaluation'))
        {
            $doc = $request->file('doc_fiche_evaluation');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('yyyy').'/fiche_evaluation/',Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $input['doc_fiche_evaluation'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            flash()->error($doc->getErrorMessage());
        }
        if($request->hasFile('doc_convention'))
        {
            $doc = $request->file('doc_convention');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('yyyy').'/conventions/',Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $input['doc_convention'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            flash()->error($doc->getErrorMessage());
        }
        if($request->hasFile('doc_attestation'))
        {
            $doc = $request->file('doc_attestation');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/remise/'.Carbon::now()->format('yyyy').'/attestations/',Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $input['doc_attestation'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            flash()->error($doc->getErrorMessage());
        }
        $input = $request->all();

        $reportSubmission = $this->reportSubmissionRepository->create($input);

        flash()->success('Report Submission saved successfully.');

        return redirect(route('admin.reportSubmissions.index'));
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
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            flash()->error('Report Submission not found');

            return redirect(route('admin.reportSubmissions.index'));
        }

        return view('admin.report_submissions.show')->with('reportSubmission', $reportSubmission);
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
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            flash()->error('Report Submission not found');

            return redirect(route('admin.reportSubmissions.index'));
        }

        return view('admin.report_submissions.edit')->with('reportSubmission', $reportSubmission);
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
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            flash()->error('Report Submission not found');

            return redirect(route('admin.reportSubmissions.index'));
        }

        $reportSubmission = $this->reportSubmissionRepository->update($request->all(), $id);

        flash()->success('Report Submission updated successfully.');

        return redirect(route('admin.reportSubmissions.index'));
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
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            flash()->error('Report Submission not found');

            return redirect(route('admin.reportSubmissions.index'));
        }

        $this->reportSubmissionRepository->delete($id);

        flash()->success('Report Submission deleted successfully.');

        return redirect(route('admin.reportSubmissions.index'));
    }
}
