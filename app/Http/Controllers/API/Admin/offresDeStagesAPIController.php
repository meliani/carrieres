<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Requests\API\Admin\CreateoffresDeStagesAPIRequest;
use App\Http\Requests\API\Admin\UpdateoffresDeStagesAPIRequest;
use App\Models\Admin\offresDeStages;
use App\Repositories\Admin\offresDeStagesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class offresDeStagesController
 * @package App\Http\Controllers\API\Admin
 */

class offresDeStagesAPIController extends AppBaseController
{
    /** @var  offresDeStagesRepository */
    private $offresDeStagesRepository;

    public function __construct(offresDeStagesRepository $offresDeStagesRepo)
    {
        $this->offresDeStagesRepository = $offresDeStagesRepo;
    }

    /**
     * Display a listing of the offresDeStages.
     * GET|HEAD /offresDeStages
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->offresDeStagesRepository->pushCriteria(new RequestCriteria($request));
        $this->offresDeStagesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $offresDeStages = $this->offresDeStagesRepository->all();

        return $this->sendResponse($offresDeStages->toArray(), 'Offres De Stages retrieved successfully');
    }

    /**
     * Store a newly created offresDeStages in storage.
     * POST /offresDeStages
     *
     * @param CreateoffresDeStagesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateoffresDeStagesAPIRequest $request)
    {
        $input = $request->all();

        $offresDeStages = $this->offresDeStagesRepository->create($input);

        return $this->sendResponse($offresDeStages->toArray(), 'Offres De Stages saved successfully');
    }

    /**
     * Display the specified offresDeStages.
     * GET|HEAD /offresDeStages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var offresDeStages $offresDeStages */
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            return $this->sendError('Offres De Stages not found');
        }

        return $this->sendResponse($offresDeStages->toArray(), 'Offres De Stages retrieved successfully');
    }

    /**
     * Update the specified offresDeStages in storage.
     * PUT/PATCH /offresDeStages/{id}
     *
     * @param  int $id
     * @param UpdateoffresDeStagesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoffresDeStagesAPIRequest $request)
    {
        $input = $request->all();

        /** @var offresDeStages $offresDeStages */
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            return $this->sendError('Offres De Stages not found');
        }

        $offresDeStages = $this->offresDeStagesRepository->update($input, $id);

        return $this->sendResponse($offresDeStages->toArray(), 'offresDeStages updated successfully');
    }

    /**
     * Remove the specified offresDeStages from storage.
     * DELETE /offresDeStages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var offresDeStages $offresDeStages */
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            return $this->sendError('Offres De Stages not found');
        }

        $offresDeStages->delete();

        return $this->sendResponse($id, 'Offres De Stages deleted successfully');
    }
}
