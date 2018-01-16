<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoffresDeStagesRequest;
use App\Http\Requests\UpdateoffresDeStagesRequest;
use App\Repositories\offresDeStagesRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\offreDeStage;
use App\Models\Application;
use App\User;


class monStageController extends Controller
{
    /** @var  offresDeStagesRepository */
    private $offresDeStagesRepository;
    
    public function __construct(offresDeStagesRepository $offresDeStagesRepo)
    {
        $this->middleware(['auth']);        
        $this->offresDeStagesRepository = $offresDeStagesRepo;
    }

    /**
     * Display a listing of the offresDeStages.
     *
     * @param Request $request
     * @return Response
     */
    public function index($offersPerPage=10)
    {
        //$this->offresDeStagesRepository->pushCriteria(new RequestCriteria($request));
        $offresDeStages = $this->offresDeStagesRepository->paginate($offersPerPage);
        $links = $offresDeStages->render();
        //$offresDeStages = offreDeStage::orderby('created_at', 'desc');//->paginate(5);
          //dd($offresDeStages);
          /*return view('monStage.index')
            ->with('offresDeStages', $offresDeStages);*/
           
            return view('monStage.index', compact('offresDeStages','links'));
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
            Flash::error('Offres Stages not found');

            return redirect(route('monStage.index'));
        }

        return view('monStage.show')->with('offre', $offresDeStages);
    }
    /**
     * Display the specified offresDeStages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function postuler($id)
    {
        $offre = $this->offresDeStagesRepository->findWithoutFail($id);

        if (empty($offre)) {
            Flash::error('Offres stages not found');

            return redirect(route('monStage.index'));
        }

        return view('monStage.postuler')->with('offre', $offre);
    }

    public function store(Request $request)
    {        
        //$this->validate($request, []);
        //dd($request);
        if($request->hasFile('cv'))
        {
            $cv = $request->file('cv');
            if ($cv->isValid())
            {
                $path = $cv->storeAs('uploads/students/CVs',Carbon::now()->format('ymd_hi') .'-'. $cv->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $cv_path = 'storage/'.$path;
            }elseif($cv->getError()!='UPLOADERROK')
            Flash::error($cv->getErrorMessage());
        }
        if($request->hasFile('lettre_de_motivation'))
        {
            $lettre_de_motivation = $request->file('lettre_de_motivation');
            if ($lettre_de_motivation->isValid())
            {
                $path = $lettre_de_motivation->storeAs('uploads/students/LRs',Carbon::now()->format('ymd_hi') .'-'. $lettre_de_motivation->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                $lettre_de_motivation_path = 'storage/'.$path;
            }elseif($lettre_de_motivation->getError()!='UPLOADERROK')
            Flash::error($lettre_de_motivation->getErrorMessage());
        }


        $application = Application::create([
            'user_id' => $request->user()->id,
            'offre_de_stage_id' => $request->monStage,
            'cv' => $cv_path,
            'lettre_de_motivation' => $lettre_de_motivation_path
        ]);

        $offresDeStages = offreDeStage::find($request->monStage);

        $offresDeStages->applications()->attach($application->id);//, ['cv' => $cv,'lettre_de_motivation' => $lettre_de_motivation ]);

        return redirect(route('monStage.index'));
    }


}

