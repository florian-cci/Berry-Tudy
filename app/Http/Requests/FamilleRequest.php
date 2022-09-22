<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilleRequest extends FormRequest
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
	 * @return array
	 */
	public function rules()
	{
		return [
			'Inscription_User_ID' => 'required',
			//etape 1
			'Inscription_Nom' => 'required|string|max:220',
			'Inscription_Prenom' => 'required|string|max:220',
			'Inscription_Adresse' => 'required|string',
			'Inscription_CP' => 'required|digits:5',
			'Inscription_Ville' => 'required|string|max:220',
			'Inscription_Fixe' => 'required|digits:10',
			'Inscription_Portable' => 'required|digits:10',
			'Inscription_Email' => 'required|email',

			//etape 2
			'Inscription_Pension' => 'required',
		];
	}
}
