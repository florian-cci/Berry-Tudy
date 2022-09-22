<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejour extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

		protected $table = 'sejours';

		protected $primaryKey = 'Sejour_ID';

		protected $fillable = [
			'Sejour_Nom',
			'Sejour_Date_Debut',
			'Sejour_Date_Fin',
			'Sejour_Type',
			'Sejour_Etat',
		];
}
