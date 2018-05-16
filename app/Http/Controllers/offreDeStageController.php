<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoffresDeStagesRequest;
use App\Http\Requests\UpdateoffresDeStagesRequest;
use App\Repositories\offresDeStagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class offreDeStageController extends AppBaseController
{
    /** @var  offresDeStagesRepository */
    private $offresDeStagesRepository;

    public function __construct(offresDeStagesRepository $offresDeStagesRepo)
    {
        $this->offresDeStagesRepository = $offresDeStagesRepo;
    }

    /**
     * Display a listing of the offresStages.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->offresDeStagesRepository->pushCriteria(new RequestCriteria($request));
        $offresStages = $this->offresDeStagesRepository->all();

        return view('offreDeStage.create')
            ->with('offresStages', $offresStages);
    }

    /**
     * Show the form for creating a new offresStages.
     *
     * @return Response
     */
    public function create()
    {
        return view('offreDeStage.create');
    }

    /**
     * Store a newly created offresStages in storage.
     *
     * @param CreateoffresDeStagesRequest $request
     *
     * @return Response
     */
    public function store(CreateoffresDeStagesRequest $request)
    {
        $input = $request->all();

        if($request->hasFile('document_offre'))
        {
            $doc = $request->file('document_offre');
            if ($doc->isValid())
            {
                $path = $doc->storeAs('uploads/Stages/Offres/',Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $input['document_offre'] = 'storage/'.$path;
            }elseif($doc->getError()!='UPLOADERROK')
            Flash::error($doc->getErrorMessage());
        }

        $offresStages = $this->offresDeStagesRepository->create($input);

        Flash::success('Offre de stage bien enregistrée. elle sera transmise aux ayants droit après vérification et validation.');

        return redirect(route('offreDeStage.create'))->with('message', 'Votre proposition a été bien enregistrée');
    }

    /**
     * Display the specified offresStages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offresStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresStages)) {
            Flash::error('Offres Stages not found');

            return redirect(route('offresStages.index'));
        }

        return view('offres_stages.show')->with('offresStages', $offresStages);
    }

    /**
     * Show the form for editing the specified offresStages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offresStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresStages)) {
            Flash::error('Offres Stages not found');

            return redirect(route('offresStages.index'));
        }

        return view('offres_stages.edit')->with('offresStages', $offresStages);
    }

    /**
     * Update the specified offresStages in storage.
     *
     * @param  int              $id
     * @param UpdateoffresStagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoffresStagesRequest $request)
    {
        $offresStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresStages)) {
            Flash::error('Offres Stages not found');

            return redirect(route('offresStages.index'));
        }

        $offresStages = $this->offresDeStagesRepository->update($request->all(), $id);

        Flash::success('Offres Stages updated successfully.');

        return redirect(route('offresStages.index'));
    }

    /**
     * Remove the specified offresStages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offresStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresStages)) {
            Flash::error('Offres Stages not found');

            return redirect(route('offresStages.index'));
        }

        $this->offresDeStagesRepository->delete($id);

        Flash::success('Offres Stages deleted successfully.');

        return redirect(route('offresStages.index'));
    }
}

