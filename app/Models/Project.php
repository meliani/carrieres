<?php

namespace App\Models;

use App\Enums;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    // use HasFactory;
    // use HasUuids;
    protected $connection = 'backend_database';

    protected $fillable = [
        'id_pfe',
        'title',
        'organization',
        'description',
        'start_date',
        'end_date',
        'jury_id',
        'status',
        'pending',
        'binome_id',
    ];

    public $cast = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'status' => Enums\ProjectStatus::class,
    ];

    public function internships(): HasMany
    {
        return $this->hasMany(Internship::class);
    }

    public function internship(): HasOne
    {
        return $this->hasOne(Internship::class)->latestOfMany();
    }

    public function jury()
    {
        return $this->hasOne(Jury::class);
    }
}
