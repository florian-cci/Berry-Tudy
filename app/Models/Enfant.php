<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'inscriptions_enfant';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['Inscription_ID'];
		protected $primaryKey = 'Inscription_ID';
    protected $fillable = [
			'Inscription_User_ID',
			'Inscription_Nom',
			'Inscription_Prenom',
			'Inscription_Date_Naissance',
			'Inscription_Sexe',
			'Inscription_Adresse',
			'Inscription_CP',
			'Inscription_Ville',
			'Inscription_Experience',
			'Inscription_Venu',
			'Inscription_Ville_Depart_ID',
			'Inscription_Groupe',
			'Inscription_Legal1_Lien',
			'Inscription_Legal1_Nom',
			'Inscription_Legal1_Prenom',
			'Inscription_Legal1_Adresse',
			'Inscription_Legal1_CP',
			'Inscription_Legal1_Ville',
			'Inscription_Legal1_Fixe',
			'Inscription_Legal1_Portable',
			'Inscription_Legal1_Email',
			'Inscription_Legal1_Employeur',
			'Inscription_Legal2_Lien',
			'Inscription_Legal2_Nom',
			'Inscription_Legal2_Prenom',
			'Inscription_Legal2_Adresse',
			'Inscription_Legal2_CP',
			'Inscription_Legal2_Ville',
			'Inscription_Legal2_Fixe',
			'Inscription_Legal2_Portable',
			'Inscription_Legal2_Email',
			'Inscription_Legal2_Employeur',
			'Inscription_Situation_Ecole',
			'Inscription_Situation_Classe',
			'Inscription_Situation_Frere',
			'Inscription_Situation_Frere_Description',
			'Inscription_Situation_Description',
			'Inscription_Organisme_Intitule',
			'Inscription_Organisme_Nom',
			'Inscription_Organisme_Qualite',
			'Inscription_Organisme_Fixe',
			'Inscription_Organisme_Portable',
			'Inscription_Organisme_Email',
			'Inscription_Regime_Porc',
			'Inscription_Regime_Intolerance',
			'Inscription_Regime_Allergie',
			'Inscription_Regime_Autre',
			'Inscription_Urgence_Nom',
			'Inscription_Urgence_Prenom',
			'Inscription_Urgence_Parente',
			'Inscription_Urgence_Adresse',
			'Inscription_Urgence_CP',
			'Inscription_Urgence_Ville',
			'Inscription_Urgence_Fixe',
			'Inscription_Urgence_Portable',
			'Inscription_Urgence_Pro',
			'Inscription_Urgence_Email',
			'Inscription_Caf_Numero',
			'Inscription_Caf_Ville',
		];
    // protected $hidden = [];
    // protected $dates = [];


    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
