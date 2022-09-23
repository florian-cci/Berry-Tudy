<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Sejour;
use Illuminate\Http\Request;
use App\Models\Enfant;
use App\Http\Requests\EnfantRequest;
use Illuminate\Support\Facades\Auth;

class EnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
			$sejours = Sejour::where('Sejour_Type', 'Enfant')->get();
			$villes = Ville::all();
			return view('enfant', compact('sejours', 'villes', 'user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. EnfantRequest
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
      $inscription = Enfant::create([
				'Inscription_User_ID' => $request->input('Inscription_User_ID'),
				//etape 1
				'Inscription_Nom' => $request->input('Inscription_Nom'),
				'Inscription_Prenom' => $request->input('Inscription_Prenom'),
				'Inscription_Date_Naissance' => $request->input('Inscription_Date_Naissance'),
				'Inscription_Sexe' => $request->input('Inscription_Sexe'),
				'Inscription_Adresse' => $request->input('Inscription_Adresse'),
				'Inscription_CP' => $request->input('Inscription_CP'),
				'Inscription_Ville' => $request->input('Inscription_Ville'),
				'Inscription_Experience' => $request->input('Inscription_Experience'),
				'Inscription_Venu' => $request->input('Inscription_Venu'),
				//etape 2
				'Inscription_Sejour_ID' => $request->input('Inscription_Sejour_ID'),
				'Inscription_Ville_Depart_ID' => $request->input('Inscription_Ville_Depart_ID'),
				'Inscription_Groupe' => $request->input('Inscription_Groupe'),
				'inscription_frere_info' => $request->input('inscription_frere_info'),
				//etape 3
				'Inscription_Legal1_Lien' => $request->input('Inscription_Legal1_Lien'),
				'Inscription_Legal1_Nom' => $request->input('Inscription_Legal1_Nom'),
				'Inscription_Legal1_Prenom' => $request->input('Inscription_Legal1_Prenom'),
				'Inscription_Legal1_Adresse' => $request->input('Inscription_Legal1_Adresse'),
				'Inscription_Legal1_CP' => $request->input('Inscription_Legal1_CP'),
				'Inscription_Legal1_Ville' => $request->input('Inscription_Legal1_Ville'),
				'Inscription_Legal1_Fixe' => $request->input('Inscription_Legal1_Fixe'),
				'Inscription_Legal1_Portable' => $request->input('Inscription_Legal1_Portable'),
				'Inscription_Legal1_Email' => $request->input('Inscription_Legal1_Email'),
				'Inscription_Legal1_Employeur' => $request->input('Inscription_Legal1_Employeur'),
				'Inscription_autre_enfant' => $request->input('Inscription_autre_enfant'),
				//etape 4
				'Inscription_Legal2_Lien' => $request->input('Inscription_Legal2_Lien'),
				'Inscription_Legal2_Nom' => $request->input('Inscription_Legal2_Nom'),
				'Inscription_Legal2_Prenom' => $request->input('Inscription_Legal2_Prenom'),
				'Inscription_Legal2_Adresse' => $request->input('Inscription_Legal2_Adresse'),
				'Inscription_Legal2_CP' => $request->input('Inscription_Legal2_CP'),
				'Inscription_Legal2_Ville' => $request->input('Inscription_Legal2_Ville'),
				'Inscription_Legal2_Fixe' => $request->input('Inscription_Legal2_Fixe'),
				'Inscription_Legal2_Portable' => $request->input('Inscription_Legal2_Portable'),
				'Inscription_Legal2_Email' => $request->input('Inscription_Legal2_Email'),
				'Inscription_Legal2_Employeur' => $request->input('Inscription_Legal2_Employeur'),
				//etape 5
				'Inscription_Situation_Ecole' => $request->input('Inscription_Situation_Ecole'),
				'Inscription_Situation_Classe' => $request->input('Inscription_Situation_Classe'),
				'Inscription_Situation_Frere' => $request->input('Inscription_Situation_Frere'),
				'Inscription_Situation_Description' => $request->input('Inscription_Situation_Description'),
				'Inscription_Situation_prise_en_change_caf' => $request->input('Inscription_Situation_prise_en_change_caf'),
				'Inscription_Caf_ref' => $request->input('Inscription_Caf_ref'),
				//etape 6
				'Inscription_Organisme_Intitule' => $request->input('Inscription_Organisme_Intitule'),
				'Inscription_Organisme_Nom' => $request->input('Inscription_Organisme_Nom'),
				'Inscription_Organisme_Qualite' => $request->input('Inscription_Organisme_Qualite'),
				'Inscription_Organisme_Fixe' => $request->input('Inscription_Organisme_Fixe'),
				'Inscription_Organisme_Portable' => $request->input('Inscription_Organisme_Portable'),
				'Inscription_Organisme_Email' => $request->input('Inscription_Organisme_Email'),
				//etape 7
				'Inscription_Regime_Porc' => $request->input('Inscription_Regime_Porc'),
				'Inscription_Regime_Intolerance' => $request->input('Inscription_Regime_Intolerance'),
				'Inscription_Regime_Allergie' => $request->input('Inscription_Regime_Allergie'),
				'Inscription_Regime_Autre' => $request->input('Inscription_Regime_Autre'),
				//etape 8
				'Inscription_Urgence_Nom' => $request->input('Inscription_Urgence_Nom'),
				'Inscription_Urgence_Prenom' => $request->input('Inscription_Urgence_Prenom'),
				'Inscription_Urgence_Parente' => $request->input('Inscription_Urgence_Parente'),
				'Inscription_Urgence_Adresse' => $request->input('Inscription_Urgence_Adresse'),
				'Inscription_Urgence_CP' => $request->input('Inscription_Urgence_CP'),
				'Inscription_Urgence_Ville' => $request->input('Inscription_Urgence_Ville'),
				'Inscription_Urgence_Fixe' => $request->input('Inscription_Urgence_Fixe'),
				'Inscription_Urgence_Portable' => $request->input('Inscription_Urgence_Portable'),
				'Inscription_Urgence_Pro' => $request->input('Inscription_Urgence_Pro'),
				//etape 9
				'Inscription_Caf_Numero' => $request->input('Inscription_Caf_Numero'),
				'Inscription_Caf_Ville' => $request->input('Inscription_Caf_Ville'),
			]);

			return response()->json(['msg' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
