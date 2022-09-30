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
            'raison_sociale' => 'required|max:191',
            'adresse' => 'required|max:191',
            'ville' => 'required|max:191',
            'pays' => 'required|max:191',
            'intitule' => 'required|max:65535',
            'descriptif' => 'required|max:65535',
            'keywords' => 'required|max:65535',
            'date_debut' => 'required|date|before:date_fin|after_or_equal:'.
            config('school.current.time_limits.ouverture_plateforme').'|after_or_equal:today|after_or_equal:'.
            config('school.current.time_limits.max_debut_pfe'),
            //'|valid_date_range:date_debut,6',
            'date_fin' => 'required|date|after:date_debut|after_or_equal:'.
            config('school.current.time_limits.ouverture_plateforme').
            '|before_or_equal:'.
            config('school.current.time_limits.max_fin_pfe'),
            'parrain_titre' => 'required',
            'parrain_nom' => 'required|max:191',
            'parrain_prenom' => 'required|max:191',
            'parrain_fonction' => 'required|max:191',
            'parrain_tel' => 'required|max:13|between:8,13',
            'parrain_mail' => 'required|email:rfc,dns,spoof',
            'encadrant_ext_titre' => 'required',
            'encadrant_ext_nom' => 'required|max:191',
            'encadrant_ext_prenom' => 'required|max:191',
            'encadrant_ext_fonction' => 'required|max:191',
            'encadrant_ext_tel' => 'required|max:13|between:8,13',
            'encadrant_ext_mail' => 'required|email:rfc,dns,spoof',
            'abroad' => 'nullable',
            'remuneration' => 'nullable|numeric',
            'currency' => 'nullable',
            'load' => 'nullable|numeric',
            'abdoard_school' => 'nullable',
            'is_valid' => 'nullable',
            'status' => 'nullable',
            'internal_adviser_id' => 'nullable',
            'internal_adviser_name' => 'nullable'
        ];
    }

    public function attributes()
    {
    return [
        'email' => 'adresse email',
        
    ];
    }
}
