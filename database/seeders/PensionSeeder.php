<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pensions')->insert([
				'Pension_ID' => '1',
				'Pension_Duree' => 'Semaine',
				'Pension_Type' => 'Demi',
				'Prix_Adulte' => '205',
				'Prix_Ado' => '155',
				'Prix_Enfant' => '105',
			]);
      DB::table('pensions')->insert([
				'Pension_ID' => '2',
				'Pension_Duree' => 'Semaine',
				'Pension_Type' => 'Complete',
				'Prix_Adulte' => '250',
				'Prix_Ado' => '185',
				'Prix_Enfant' => '135',
			]);
      DB::table('pensions')->insert([
				'Pension_ID' => '3',
				'Pension_Duree' => 'Nuit',
				'Pension_Type' => 'Nuit',
				'Prix_Adulte' => '26',
				'Prix_Ado' => '18',
				'Prix_Enfant' => '18',
			]);
			DB::table('pensions')->insert([
				'Pension_ID' => '4',
				'Pension_Duree' => 'Repas',
				'Pension_Type' => 'Repas',
				'Prix_Adulte' => '9',
				'Prix_Ado' => '5',
				'Prix_Enfant' => '5',
			]);
    }
}
