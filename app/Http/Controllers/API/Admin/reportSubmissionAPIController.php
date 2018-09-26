<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Requests\API\Admin\CreatereportSubmissionAPIRequest;
use App\Http\Requests\API\Admin\UpdatereportSubmissionAPIRequest;
use App\Models\Admin\reportSubmission;
use App\Repositories\Admin\reportSubmissionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class reportSubmissionController
 * @package App\Http\Controllers\API\Admin
 */

class reportSubmissionAPIController extends AppBaseController
{
    /** @var  reportSubmissionRepository */
    private $reportSubmissionRepository;

    public function __construct(reportSubmissionRepository $reportSubmissionRepo)
    {
        $this->reportSubmissionRepository = $reportSubmissionRepo;
    }

    /**
     * Display a listing of the reportSubmission.
     * GET|HEAD /reportSubmissions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->reportSubmissionRepository->pushCriteria(new RequestCriteria($request));
        $this->reportSubmissionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $reportSubmissions = $this->reportSubmissionRepository->all();

        return $this->sendResponse($reportSubmissions->toArray(), 'Report Submissions retrieved successfully');
    }

    /**
     * Store a newly created reportSubmission in storage.
     * POST /reportSubmissions
     *
     * @param CreatereportSubmissionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatereportSubmissionAPIRequest $request)
    {
        $input = $request->all();

        $reportSubmissions = $this->reportSubmissionRepository->create($input);

        return $this->sendResponse($reportSubmissions->toArray(), 'Report Submission saved successfully');
    }

    /**
     * Display the specified reportSubmission.
     * GET|HEAD /reportSubmissions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var reportSubmission $reportSubmission */
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            return $this->sendError('Report Submission not found');
        }

        return $this->sendResponse($reportSubmission->toArray(), 'Report Submission retrieved successfully');
    }

    /**
     * Update the specified reportSubmission in storage.
     * PUT/PATCH /reportSubmissions/{id}
     *
     * @param  int $id
     * @param UpdatereportSubmissionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereportSubmissionAPIRequest $request)
    {
        $input = $request->all();

        /** @var reportSubmission $reportSubmission */
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            return $this->sendError('Report Submission not found');
        }

        $reportSubmission = $this->reportSubmissionRepository->update($input, $id);

        return $this->sendResponse($reportSubmission->toArray(), 'reportSubmission updated successfully');
    }

    /**
     * Remove the specified reportSubmission from storage.
     * DELETE /reportSubmissions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var reportSubmission $reportSubmission */
        $reportSubmission = $this->reportSubmissionRepository->findWithoutFail($id);

        if (empty($reportSubmission)) {
            return $this->sendError('Report Submission not found');
        }

        $reportSubmission->delete();

        return $this->sendResponse($id, 'Report Submission deleted successfully');
    }
}
