<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternship extends FormRequest
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
            'intitule' => 'required|max:65535',
            'descriptif' => 'required|max:65535',
            'keywords' => 'required|max:65535',
            'date_debut' => 'required|date|after:today|after_or_equal:01-02-2022',
            'date_fin' => 'required|date|after:date_debut',
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
            'internal_adviser_name' => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'adresse email',

        ];
    }
}
