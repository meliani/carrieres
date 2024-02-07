<?php

namespace App\Models\School\Internship;

use App\Models\Core\baseModel as Model;
use App\Models\Profile\Professor;
use App\Models\Profile\Student;
use App\Models\School\Project\Project;
use App\Models\School\Project\Team;
use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internship extends Model
{
    use FormAccessible;
    use SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'carrieres.internships';

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
        'organization_name',
        'adresse',
        'city',
        'country',
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
        'title',
        'description',
        'keywords',
        'starting_at',
        'ending_at',
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
        // 'model_status_id',
        'status',
    ];

    //protected $dateFormat = 'm/d/Y';
    protected $casts = [
        'starting_at' => 'date',
        'ending_at' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /** --------------------------------- Relations ----------------------------- */
    public function binome()
    {
        return $this->belongsTo(Student::class, 'binome_user_id', 'id');
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
        return $this->hasOne(Team::class, 'student_id', 'student_id');
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
        //return $this->ending_at->diffForHumans($this->starting_at);
        //return $this->ending_at->longAbsoluteDiffForHumans($this->starting_at,null,7);
        return $this->ending_at->diffInWeeks($this->starting_at).' semaines';
    }

    public function getDurationInMonthsAttribute()
    {
        //return $this->ending_at->diffForHumans($this->starting_at);
        //return $this->ending_at->longAbsoluteDiffForHumans($this->starting_at,null,7);
        return $this->ending_at->diffInMonths($this->starting_at).' mois';
    }

    public function getNotesTipAttribute()
    {
        $notes = null;
        // dd($this->attributes['notes'][1]);
        if (! empty($this->attributes['notes'])) {
            // dd(json_decode($this->attributes['notes']));
            $note = json_decode($this->attributes['notes']);
            // json_decode($this->attributes['notes']);
            if (isset($note->note)) {
                $notes = $note->agent_name.': '.$note->note.' @ '.Carbon::create($note->noted_at)->format('j M Y h:m:s');
            }
        }

        return $notes;
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'int_adviser_id', 'id');
    }

    public function __construct()
    {
    }
}
