<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\offresDeStagesDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateoffresDeStagesRequest;
use App\Http\Requests\Admin\UpdateoffresDeStagesRequest;
use App\Repositories\Admin\offresDeStagesRepository;

use App\Http\Controllers\AppBaseController;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class offresDeStagesController extends AppBaseController
{
    /** @var  offresDeStagesRepository */
    private $offresDeStagesRepository;

    public function __construct(offresDeStagesRepository $offresDeStagesRepo)
    {
        $this->offresDeStagesRepository = $offresDeStagesRepo;
    }

    /**
     * Display a listing of the offresDeStages.
     *
     * @param offresDeStagesDataTable $offresDeStagesDataTable
     * @return Response
     */
    public function index(offresDeStagesDataTable $offresDeStagesDataTable)
    {
        return $offresDeStagesDataTable->render('admin.offres_de_stages.index');
    }

    /**
     * Show the form for creating a new offresDeStages.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.offres_de_stages.create');
    }

    /**
     * Store a newly created offresDeStages in storage.
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
                $path = $doc->storeAs(config('app.offers_storage_path'),Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $input['document_offre'] = basename($path);
            }elseif($doc->getError()!='UPLOADERROK')
            flash()->error($doc->getErrorMessage());
        }

        $offresDeStages = $this->offresDeStagesRepository->create($input);

        flash()->success('Offres De Stages saved successfully.');

        return redirect(route('admin.offresDeStages.index'));
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
            flash()->error('Offres De Stages not found');

            return redirect(route('admin.offresDeStages.index'));
        }

        return view('admin.offres_de_stages.show')->with('offresDeStages', $offresDeStages);
    }

    /**
     * Show the form for editing the specified offresDeStages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            flash()->error('Offres De Stages not found');

            return redirect(route('admin.offresDeStages.index'));
        }

        return view('admin.offres_de_stages.edit')->with('offresDeStages', $offresDeStages);
    }

    /**
     * Update the specified offresDeStages in storage.
     *
     * @param  int              $id
     * @param UpdateoffresDeStagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoffresDeStagesRequest $request)
    {
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            flash()->error('Offres De Stages non trouvée');

            return redirect(route('admin.offresDeStages.index'));
        }
        if($request->hasFile('document_offre'))
        {
            $doc = $request->file('document_offre');
            if ($doc->isValid())
            {
                $path = $doc->storeAs(config('app.offers_storage_path'),Carbon::now()->format('ymd_hi') .'-'. $doc->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                //$path = Storage::disk('local')->put(config('app.offers_storage_path').Carbon::now()->format('ymd_hi').'Document stage', $doc);
                //$request->merge(['document_offre' => 'basename($path)']);
                $request->document_offre = basename($path);
                $offresDeStages->document_offre = basename($path);
                //dd($request->document_offre);
            }elseif($doc->getError()!='UPLOADERROK')
            flash()->error($doc->getErrorMessage());
        }
        
//dd($request);
        $offres = $this->offresDeStagesRepository->update($request->all(), $id);

        $offresDeStages->save();

        flash()->success('Offres De Stages updated successfully.');

        return redirect(route('admin.offresDeStages.index'));
    }

    /**
     * Remove the specified offresDeStages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offresDeStages)) {
            flash()->error('Offres De Stages not found');

            return redirect(route('admin.offresDeStages.index'));
        }

        $this->offresDeStagesRepository->delete($id);

        flash()->success('Offres De Stages deleted successfully.');

        return redirect(route('admin.offresDeStages.index'));
    }


    public function activate($id)
    {
        $offresDeStages = $this->offresDeStagesRepository->findWithoutFail($id);
    
        if (empty($offresDeStages)) {
            flash()->error('Offres De Stages not found');
    
            return redirect(route('admin.offresDeStages.index'));
        }
        $offresDeStages->is_valid = 1;
        //$offresDeStages = $this->offresDeStagesRepository->update($request->all(), $id);
        $offresDeStages->save();
        flash()->success('Offres De Stages updated successfully.');
    
        return redirect(route('admin.offresDeStages.index'));
    }
}