<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeople extends FormRequest
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
            'title' => 'required',
            'pin',
            'email_perso' => 'required|max:191|email:rfc,dns',
            'phone' => 'required|max:13|between:8,13',
            'cv' => 'required|url|active_url',
            'lm' => 'nullable|url|active_url',
            'photo' => 'required|url|active_url',
            'abroad_school' 
        ];
    }
}
