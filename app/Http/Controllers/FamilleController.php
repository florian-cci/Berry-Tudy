<?php

namespace App\Http\Controllers;

use App\Models\Sejour;
use App\Models\Pension;
use Illuminate\Http\Request;
use App\Models\Famille;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FamilleRequest;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
		$pensionDemi = Pension::where('Pension_Type', 'Demi')->first();
		$pensionComplete = Pension::where('Pension_Type', 'Complete')->first();
		$pensionNuit = Pension::where('Pension_Type', 'Nuit')->first();
		$pensionRepas = Pension::where('Pension_Type', 'Repas')->first();
		$sejours = Sejour::where('Sejour_Type', 'Famille')->get();
		return view('famille', compact('sejours','pensionDemi','pensionComplete','pensionNuit','pensionRepas','user'));
    }
    public function tarif()
    {
      $user = Auth::user();
		$pensionDemi = Pension::where('Pension_Type', 'Demi')->first();
		$pensionComplete = Pension::where('Pension_Type', 'Complete')->first();
		$pensionNuit = Pension::where('Pension_Type', 'Nuit')->first();
		$pensionRepas = Pension::where('Pension_Type', 'Repas')->first();
		$sejours = Sejour::where('Sejour_Type', 'Famille')->get();
		return view('tarif', compact('sejours','pensionDemi','pensionComplete','pensionNuit','pensionRepas','user'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$dates = $request->input('Inscription_Nuit');
			$Inscription_Nuit = [];

			if (!empty($dates)) {
				foreach ($dates as $date) {
					array_push($Inscription_Nuit, $date);
				}
			}

			$inscription = Famille::create([
				'Inscription_User_ID' => $request->input('Inscription_User_ID'),
				//etape 1
				'Inscription_Nom' => $request->input('Inscription_Nom'),
				'Inscription_Prenom' => $request->input('Inscription_Prenom'),
				'Inscription_Adresse' => $request->input('Inscription_Adresse'),
				'Inscription_CP' => $request->input('Inscription_CP'),
				'Inscription_Ville' => $request->input('Inscription_Ville'),
				'Inscription_Fixe' => $request->input('Inscription_Fixe'),
				'Inscription_Portable' => $request->input('Inscription_Portable'),
				'Inscription_Email' => $request->input('Inscription_Email'),
				//etape 2
				'Inscription_Pension' => $request->input('Inscription_Pension'),
				'Inscription_Nuit' => json_encode($Inscription_Nuit),
				'Inscription_Semaine_Demi_Adulte_nb' => $request->input('Inscription_Semaine_Demi_Adulte_nb'),
				'Inscription_Semaine_Demi_Ado_nb' => $request->input('Inscription_Semaine_Demi_Ado_nb'),
				'Inscription_Semaine_Demi_Enfant_12_nb' => $request->input('Inscription_Semaine_Demi_Enfant_nb'),
				'Inscription_Semaine_Demi_Enfant_3_nb' => $request->input('Inscription_Semaine_Demi_Enfant_nb'),
				'Inscription_Semaine_Complete_Adulte_nb' => $request->input('Inscription_Semaine_Complete_Adulte_nb'),
				'Inscription_Semaine_Complete_Ado_nb' => $request->input('Inscription_Semaine_Complete_Ado_nb'),
				'Inscription_Semaine_Complete_Enfant_12_nb' => $request->input('Inscription_Semaine_Complete_Enfant_nb'),
				'Inscription_Semaine_Complete_Enfant_3_nb' => $request->input('Inscription_Semaine_Complete_Enfant_nb'),
				'Inscription_Nuit_Adulte_nb' => $request->input('Inscription_Nuit_Adulte_nb'),
				'Inscription_Nuit_Adulte_nbNuits' => $request->input('Inscription_Nuit_Adulte_nbNuits'),
				'Inscription_Nuit_Ado_nb' => $request->input('Inscription_Nuit_Ado_nb'),
				'Inscription_Nuit_Ado_nbNuits' => $request->input('Inscription_Nuit_Ado_nbNuits'),
				'Inscription_Nuit_Enfant_12_nb' => $request->input('Inscription_Nuit_Enfant_nb'),
				'Inscription_Nuit_Enfant_12_nbNuits' => $request->input('Inscription_Nuit_Enfant_nbNuits'),
				'Inscription_Nuit_Enfant_3_nb' => $request->input('Inscription_Nuit_Enfant_nb'),
				'Inscription_Nuit_Enfant_3_nbNuits' => $request->input('Inscription_Nuit_Enfant_nbNuits'),
				'Inscription_Montant_A' => $request->input('Inscription_Montant_A'),
				'Inscription_Montant_B' => $request->input('Inscription_Montant_B'),
				'Inscription_Montant_Total' => $request->input('Inscription_Montant_Total'),
				'date_debut' => $request->input('start_date'),
				'date_fin' => $request->input('end_date'),
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
