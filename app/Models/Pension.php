<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

		protected $table = 'pensions';

		protected $primaryKey = 'Pension_ID';

		protected $fillable = [
			'Pension_Duree',
			'Pension_Type',
			'Prix_Adulte',
			'Prix_Ado',
			'Prix_Enfant',
		];
}
