<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

		protected $table = 'villes';

		protected $primaryKey = 'Ville_ID';

		protected $fillable = [
			'Ville_Nom',
			'Ville_CP',
			'Ville_Departement',
			'Ville_Region',
			'Ville_Pays',
		];
}
