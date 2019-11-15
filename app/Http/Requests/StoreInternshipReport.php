<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternshipReport extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('Use Frontend');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_email' => 'required|email',
            'student_phone' => 'required',
            'report_title' => 'required',
            'project_description' => 'required',
            'company_name' => 'required',
            'company_city' => 'required',
            'internship_started_at' => 'required',
            'internship_ended_at' => 'required',
            'internship_responsible_name' => 'required',
            'internship_responsible_position' => 'required',
            'internship_responsible_email' => 'required',
            'file_report' => 'required',
            'file_agreement' => 'required',
            'file_certificate' => 'required',
        ];
    }
}
