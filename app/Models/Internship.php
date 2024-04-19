<?php

namespace App\Models;

use App\Enums;
use App\Models\Core\baseModel as Model;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Student;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internship extends Model
{
    protected $connection = 'backend_database';

    protected $table = 'apprenticeship';

    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();
    }
    // protected static function booted(): void
    // {
    //     static::addGlobalScope(new Scopes\DepartmentCoordinator());
    // }
    // public function scopeFilterByProgramHead($query)
    // {
    //     return $query->whereHas('student', function ($q) {
    //         $q->where('program', auth()->user()->program_coordinator);
    //     });
    // }

    public $fillable = [
        'id_pfe',
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
        'remuneration',
        'currency',
        'load',
        'int_adviser_name',
        'student_id',
        'year_id',
        'is_valid',
        'status',
        'announced_at',
        'validated_at',
        'assigned_department',
        'received_at',
        'signed_at',
        'project_id',
        'binome_user_id',
        'partner_internship_id',
        'partnership_status',
        'observations',
    ];

    protected $casts = [
        // 'title' => Title::class,
        'status' => Enums\Status::class,

        'starting_at' => 'date',
        'ending_at' => 'date',
        'validated_at' => 'datetime',
        'signed_at' => 'datetime',
        'received_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'is_active' => 'boolean',
        'is_mobility' => 'boolean',
        'parrain_titre' => Enums\Title::class,
        'encadrant_ext_titre' => Enums\Title::class,
        'assigned_department' => Enums\Department::class,
    ];
    /* Validate function to be exexuted only by SuperAdministrator Administrator ProgramCoordinator */

    public function changeStatus($status)
    {
        $this->status = $status;
        $this->save();
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
    /* End edits for a new logic by mel */

    public function binome()
    {
        return $this->belongsTo(Student::class, 'binome_user_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

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
        return $this->ending_at->diffInWeeks($this->starting_at).' semaines';
    }

    public function getDurationInMonthsAttribute()
    {
        return $this->ending_at->diffInMonths($this->starting_at).' mois';
    }
}
