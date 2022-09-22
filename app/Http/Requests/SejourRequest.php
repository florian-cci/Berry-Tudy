<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SejourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
					'Sejour_Nom'=> 'required|string|max:220',
					'Sejour_Date_Debut'=> 'required|date',
					'Sejour_Date_Fin'=> 'required|date',
					'Sejour_Type'=> 'required|in:Enfant,Famille',
					'Sejour_Etat'=> 'required|in',
        ];
    }
}
