<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnfantRequest extends FormRequest
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
			//etape 1
			'Inscription_Nom' => 'required|string|max:220',
			'Inscription_Prenom' => 'required|string|max:220',
			'Inscription_Date_Naissance' => 'required|date',
			'Inscription_Sexe' => 'required|in:garcon,fille',
			'Inscription_Adresse' => 'required|string',
			'Inscription_CP' => 'required|digits:5',
			'Inscription_Ville' => 'required|string|max:220',
			'Inscription_Experience' => 'required|in:oui,non',
			'Inscription_Venu' => 'required|in:oui,non',
			//etape 2
			'Inscription_Sejour_ID' => 'required|exists:sejours,Sejour_ID',
			'Inscription_Ville_Depart_ID' => 'required|exists:villes,Ville_ID',
			'Inscription_Groupe' => 'nullable|string',
			//etape 3
			'Inscription_Legal1_Lien' => 'required|string|max:220',
			'Inscription_Legal1_Nom' => 'required|string|max:220',
			'Inscription_Legal1_Prenom' => 'required|string|max:220',
			'Inscription_Legal1_Adresse' => 'required|string',
			'Inscription_Legal1_CP' => 'required|digits:5',
			'Inscription_Legal1_Ville' => 'required|string|max:220',
			'Inscription_Legal1_Fixe' => 'required|digits:10',
			'Inscription_Legal1_Portable' => 'required|digits:10',
			'Inscription_Legal1_Email' => 'required|email',
			'Inscription_Legal1_Employeur' => 'required|string|max:220',
			//etape 4
			'Inscription_Legal2_Lien' => 'nullable|string|max:220',
			'Inscription_Legal2_Nom' => 'nullable|string|max:220',
			'Inscription_Legal2_Prenom' => 'nullable|string|max:220',
			'Inscription_Legal2_Adresse' => 'nullable|string',
			'Inscription_Legal2_CP' => 'nullable|digits:5',
			'Inscription_Legal2_Ville' => 'nullable|string|max:220',
			'Inscription_Legal2_Fixe' => 'nullable|digits:10',
			'Inscription_Legal2_Portable' => 'nullable|digits:10',
			'Inscription_Legal2_Email' => 'nullable|email',
			'Inscription_Legal2_Employeur' => 'nullable|string|max:220',
			//etape 5
			'Inscription_Situation_Ecole' => 'required|string|max:220',
			'Inscription_Situation_Classe' => 'required|string|max:220',
			'Inscription_Situation_Frere' => 'required|in:oui,non',
			'Inscription_Situation_Frere_Description' => 'nullable|string',
			'Inscription_Situation_Description' => 'string|nullable',
			//etape 6
			'Inscription_Organisme_Intitule' => 'nullable|string|max:220',
			'Inscription_Organisme_Nom' => 'nullable|string|max:220',
			'Inscription_Organisme_Qualite' => 'nullable|string|max:220',
			'Inscription_Organisme_Fixe' => 'nullable|digits:10',
			'Inscription_Organisme_Portable' => 'nullable|digits:10',
			'Inscription_Organisme_Email' => 'nullable|email',
			//etape 7
			'Inscription_Regime_Porc' => 'required|in:oui,non',
			'Inscription_Regime_Intolerance' => 'string|nullable',
			'Inscription_Regime_Allergie' => 'string|nullable',
			'Inscription_Regime_Autre' => 'string|nullable',
			//etape 8
			'Inscription_Urgence_Nom' => 'required|string|max:220',
			'Inscription_Urgence_Prenom' => 'required|string|max:220',
			'Inscription_Urgence_Parente' => 'string|nullable',
			'Inscription_Urgence_Adresse' => 'required|string',
			'Inscription_Urgence_CP' => 'required|digits:5',
			'Inscription_Urgence_Ville' => 'required|string|max:220',
			'Inscription_Urgence_Fixe' => 'required|digits:10',
			'Inscription_Urgence_Portable' => 'required|digits:10',
			'Inscription_Urgence_Pro' => 'required|digits:10',
			//etape 9
			'Inscription_Caf_Numero' => 'required|digits:7',
			'Inscription_Caf_Ville' => 'required|string',
		];
	}
}
