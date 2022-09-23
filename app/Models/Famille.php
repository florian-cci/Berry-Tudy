<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'inscriptions_famille';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['Inscription_ID'];
		protected $primaryKey = 'Inscription_ID';
    protected $fillable = [
			'Inscription_User_ID',
			'Inscription_Nom',
			'Inscription_Prenom',
			'Inscription_Adresse',
			'Inscription_CP',
			'Inscription_Ville',
			'Inscription_Fixe',
			'Inscription_Portable',
			'Inscription_Email',
			'Inscription_Pension',
			'Inscription_Nuit',
			'Inscription_Semaine_Demi_Adulte_nb',
			'Inscription_Semaine_Demi_Ado_nb',
			'Inscription_Semaine_Demi_Enfant_12_nb',
			'Inscription_Semaine_Demi_Enfant_3_nb',
			'Inscription_Semaine_Complete_Adulte_nb',
			'Inscription_Semaine_Complete_Ado_nb',
			'Inscription_Semaine_Complete_Enfant_12_nb',
			'Inscription_Semaine_Complete_Enfant_3_nb',
			'Inscription_Nuit_Adulte_nb',
			'Inscription_Nuit_Adulte_nbNuits',
			'Inscription_Nuit_Ado_nb',
			'Inscription_Nuit_Ado_nbNuits',
			'Inscription_Nuit_Enfant_12_nb',
			'Inscription_Nuit_Enfant_12_nbNuits',
			'Inscription_Nuit_Enfant_3_nb',
			'Inscription_Nuit_Enfant_3_nbNuits',
			'Inscription_Montant_A',
			'Inscription_Montant_B',
			'Inscription_Montant_Total',
			'start_date',
			'end_date',
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
