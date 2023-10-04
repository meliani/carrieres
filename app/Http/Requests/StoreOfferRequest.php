<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'id' => 'nullable',
        'year_id' => 'nullable',
        'program_id' => 'nullable',
        'organization_name' => 'nullable',
        'internship_type' => 'nullable',
        'responsible_fullname' => 'nullable',
        'responsible_occupation' => 'nullable',
        'responsible_phone' => 'nullable',
        'responsible_email' => 'nullable',        
        'project_title' => 'nullable',
        'project_details' => 'nullable',
        'internship_location' => 'nullable',
        'keywords' => 'nullable',
        'attached_file' => 'nullable',
        'link' => 'nullable',
        'paycheck' => 'nullable',
        'recruting_type' => 'nullable',
        'application_email' => 'nullable',
        'event_id' => 'nullable',
        'event_date' => 'nullable',
        'badge' => 'nullable',
        'display_permissions' => 'nullable',
        'status' => 'nullable',
        'is_valid' => 'nullable',
        'applyable' => 'nullable',
        'expire_at' => 'nullable'        
        ];
    }
}
