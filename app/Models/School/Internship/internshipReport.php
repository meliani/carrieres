<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\User;

class internshipReport extends Model
{
    use SoftDeletes;
    public $table = 'internship_reports';
    //public $current_year = config('school.current.academic_year');
    //protected $primaryKey = "";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public $fillable = [
        'student_email',
        'student_phone',
        'report_title',
        'project_description',
        'company_name',
        'company_city',
        'internship_started_at',
        'internship_ended_at',
        'internship_responsible_name',
        'internship_responsible_position',
        'internship_responsible_email',
        'file_report',
        'file_agreement',
        'file_certificate',
        'paper_report',
        'paper_agreement',
        'paper_certificate'
    ];

    protected $casts = [

    ];

    public function setFileReportAttribute($value){
        auth()->user()->people
        ->addMedia($value)
        ->toMediaCollection('file_report','internship_reports');
    }    
    public function setFileAgreementAttribute($value){
        auth()->user()->people
        ->addMedia($value)
        ->toMediaCollection('file_agreement','internship_agreements');
    }    
    public function setFileCertificateAttribute($value){
        auth()->user()->people
        ->addMedia($value)
        ->toMediaCollection('file_certificate','internship_certificates');
    }

    public function user()
	{
		return $this->belongsTo(User::class);
    }
    public function student()
	{
		return $this->belongsTo(\App\Models\Profile\Student::class,'user_id','user_id');
    }    
}
