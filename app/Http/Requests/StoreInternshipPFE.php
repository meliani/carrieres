<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternshipPFE extends FormRequest
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
            'organization_name' => 'required|max:191',
            'adresse' => 'required|max:191',
            'city' => 'required|max:191',
            'country' => 'required|max:191',
            'office_location' => 'required|max:191',
            'parrain_titre' => 'required',
            'parrain_nom' => 'required|max:191',
            'parrain_prenom' => 'required|max:191',
            'parrain_fonction' => 'required|max:191',
            'parrain_tel' => 'required|max:13|between:8,13',
            'parrain_mail' => 'required|email:rfc',
            'encadrant_ext_titre' => 'required',
            'encadrant_ext_nom' => 'required|max:191',
            'encadrant_ext_prenom' => 'required|max:191',
            'encadrant_ext_fonction' => 'required|max:191',
            'encadrant_ext_tel' => 'required|max:13|between:8,13',
            'encadrant_ext_mail' => 'required|email:rfc',
            'title' => 'required|max:65535',
            'description' => 'required|max:65535',
            'keywords' => 'required|max:65535',
            'starting_at' => 'required|date|before:ending_at|after_or_equal:'.
            config('school.current.time_limits.ouverture_plateforme').'|after_or_equal:today|after_or_equal:'.
            config('school.current.time_limits.min_debut_pfe').
            '|before_or_equal:'.
            config('school.current.time_limits.max_debut_pfe'),
            '|valid_date_range:starting_at,6',
            'ending_at' => 'required|date|after:starting_at|after_or_equal:'.
            config('school.current.time_limits.ouverture_plateforme').
            '|before_or_equal:'.
            config('school.current.time_limits.max_fin_pfe'),
            'abroad' => 'nullable',
            'remuneration' => 'nullable|numeric',
            'currency' => 'nullable',
            'load' => 'nullable|numeric',
            'abdoard_school' => 'nullable',
            'int_adviser_id' => 'nullable',
            'int_adviser_name' => 'nullable',
            'is_signed' => 'nullable',
            'student_id' => 'nullable',
            'year_id' => 'nullable',
            'is_valid' => 'nullable',
            // 'model_status_id' => 'nullable',
            'status' => 'nullable',
            'procedure_achieved_at' => 'nullable',
            'pedagogic_validation_date' => 'nullable',
            'meta_pedagogic_validation' => 'nullable',
            'adviser_validated_at' => 'nullable',
            'meta_adviser_validation' => 'nullable',
            'administration_signed_at' => 'nullable',
            'meta_administration_signature' => 'nullable',
            // 'notes',
            // 'notes->agent_id',
            // 'notes->note',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'adresse email',
        ];
    }
}
