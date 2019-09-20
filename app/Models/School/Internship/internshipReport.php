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
        'file_certificate'
    ];

    protected $casts = [

    ];

    public function setFileReportAttribute($value){
        $this->attributes['file_report']=Storage::putFile('public/uploads/internships/reports/2019/report', new File($value));
    }
    public function setFileAgreementAttribute($value){
        $this->attributes['file_agreement']=Storage::putFile('public/uploads/internships/reports/2019/agreement', new File($value));
    }
    public function setFileCertificateAttribute($value){
        $this->attributes['file_certificate']=Storage::putFile('public/uploads/internships/reports/2019/certificate', new File($value));
    }
    public function user()
	{
		return $this->belongsTo(User::class);
    }
}
