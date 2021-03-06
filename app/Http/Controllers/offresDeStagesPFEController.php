<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoffresDeStagesRequest;
use App\Http\Requests\UpdateoffresDeStagesRequest;
use App\Repositories\offresDeStagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class offresDeStagesPFEController extends AppBaseController
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

        return view('offresDeStages.create')
            ->with('offresStages', $offresStages);
    }

    /**
     * Show the form for creating a new offresStages.
     *
     * @return Response
     */
    public function create()
    {
        return view('offresDeStages.create');
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
            flash()->error($doc->getErrorMessage());
        }

        $offresStages = $this->offresDeStagesRepository->create($input);

        flash()->success('Offre de stage bien enregistrée.');

        return redirect(route('offresDeStages.thanks'))->with('message', 'Votre proposition a été bien enregistrée');
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
            flash()->error('Offres Stages not found');

            return redirect(route('offresDeStages.index'));
        }

        return view('offresDeStages.show')->with('offresStages', $offresStages);
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
            flash()->error('Offres Stages not found');

            return redirect(route('offresDeStages.index'));
        }

        return view('offresDeStages.edit')->with('offresStages', $offresStages);
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
            flash()->error('Offres Stages not found');

            return redirect(route('offresDeStages.index'));
        }

        $offresStages = $this->offresDeStagesRepository->update($request->all(), $id);

        flash()->success('Offres Stages updated successfully.');

        return redirect(route('offresDeStages.index'));
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
            flash()->error('Offres Stages not found');

            return redirect(route('offresDeStages.index'));
        }

        $this->offresDeStagesRepository->delete($id);

        flash()->success('Offres Stages deleted successfully.');

        return redirect(route('offresDeStages.index'));
    }
    public function thanks()
    {
        return view('offresDeStages.thanks');
    }
}

