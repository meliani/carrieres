<?php

namespace App\Models\School\Internship;

use App\Models\Core\baseModel as Model;
use App\Models\Profile\Person;
use App\Models\Profile\Professor;
use App\Models\Profile\Student;
use App\Models\School\Internship\Adviser;
use App\Models\School\Internship\Advising;
use App\Models\School\Internship\Defense;
use App\Models\School\Project\Team;
use App\Models\User;
use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\School\Project\Project;

class Internship extends Model
{
    use FormAccessible;     

    use SoftDeletes;

    protected $table = 'internships';


    protected static function boot()
    {
        parent::boot();
    
        static::addGlobalScope(function ($query) {
                $query->where('year_id', config('school.current.year_id'))
                ->orderBy('created_at', 'asc');
        });

    }

    protected $attributes = [
        // 'internship_id'
    ];
    protected $guarded = [

    ];
    
    public $fillable = [
        'id',
        'raison_sociale',
        'adresse',
        'ville',
        'pays',
        'office_location',
        'parrain_titre',
        'parrain_nom',
        'parrain_prenom',
        'parrain_fonction',
        'parrain_tel',
        'parrain_mail',
        'encadrant_ext_titre',
        'encadrant_ext_nom',
        'encadrant_ext_prenom',
        'encadrant_ext_fonction',
        'encadrant_ext_tel',
        'encadrant_ext_mail',
        'intitule',
        'descriptif',
        'keywords',
        'date_debut',
        'date_fin',
        'abroad',
        'remuneration',
        'currency',
        'load',
        'abdoard_school',
        'int_adviser_id',
        'int_adviser_name',
        'is_signed',
        'student_id',
        'year_id',
        'is_valid',
        'model_status_id',
        'status',
        'procedure_achieved_at',
        'pedagogic_validation_date',
        'meta_pedagogic_validation',
        'adviser_validated_at',
        'meta_adviser_validation',
        'administration_signed_at',
        'meta_administration_signature',
        'notes',
        'notes->agent_id',
        'notes->note',
    ];

    //protected $dateFormat = 'm/d/Y';
    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
        'defense_at' => 'date',
        'defense_start_time' => 'time:H:i',
        'defense_end_time' => 'time:H:i',
        'procedure_achieved_at' => 'date',
        'meta_pedagogic_validation' => 'array',
        'pedagogic_validation_date' => 'date',
        'adviser_validated_at' => 'date',
        'meta_adviser_validation' => 'array',
        'administration_signed_at' => 'date',
        'meta_administration_signature' => 'array',
        'notes' => 'array',
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
        'deleted_at'=> 'datetime',    
    ];
    
    
    /** --------------------------------- Relations ----------------------------- */
    public function binome()
    {
        return $this->belongsTo(Student::class,'binome_user_id','id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function project()
    {
        // return $this->hasOne(Project::class,'id');
        // return $intern->student->team->project;
    }
    public function team()
    {
        return $this->hasOne(Team::class,'student_id','student_id');
        // return $intern->student->team->project;
    }

     public function supervisor()
	{
        // return $intern->student->team->project->supervisors;
    }
    public function year()
	{
		return $this->belongsTo(App\Models\Year::class);
	}
/*     public function program()
	{
		return $this->belongsTo(App\Models\School\Program::class);
    } */

    /** ---------------------------------  Getters ----------------------------- */
    public function getParrainNameAttribute()
	{
		return $this->getTitle($this->parrain_titre).' '.$this->parrain_nom.' '.$this->parrain_prenom;
    }
    public function getEncadrantExtNameAttribute()
	{
		return $this->getTitle($this->encadrant_ext_titre).' '.$this->encadrant_ext_nom.' '.$this->encadrant_ext_prenom;
    }

    public function getDureeAttribute()
	{
        //return $this->date_fin->diffForHumans($this->date_debut);
        //return $this->date_fin->longAbsoluteDiffForHumans($this->date_debut,null,7);
        return $this->date_fin->diffInWeeks($this->date_debut).' semaines';
    }
    public function getDurationInMonthsAttribute()
	{
        //return $this->date_fin->diffForHumans($this->date_debut);
        //return $this->date_fin->longAbsoluteDiffForHumans($this->date_debut,null,7);
        return $this->date_fin->diffInMonths($this->date_debut).' mois';
    }
    public function getNotesTipAttribute()
    {
        $notes = null;
        // dd($this->attributes['notes'][1]);
        if(!empty($this->attributes['notes'])){
            // dd(json_decode($this->attributes['notes']));
            $note = json_decode($this->attributes['notes']);
        // json_decode($this->attributes['notes']);
            if(isset($note->note))
            $notes = $note->agent_name.': '.$note->note.' @ '.Carbon::create($note->noted_at)->format('j M Y h:m:s');
        }

        return $notes;
    }
    
    public function professor()
    {
        return $this->belongsTo(Professor::class,'int_adviser_id','id');
    }

    /**
     */
    public function __construct() {
    }
}
