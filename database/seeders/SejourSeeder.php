<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sejours')->insert([
				'Sejour_ID' => '1',
				'Sejour_Nom' => 'Test n°1',
				'Sejour_Date_Debut' => '2022-04-07',
				'Sejour_Date_Fin' => '2022-04-09',
				'Sejour_Type' => 'Famille',
				'Sejour_Etat' => '1',
			]);
      DB::table('sejours')->insert([
				'Sejour_ID' => '2',
				'Sejour_Nom' => 'Test n°2',
				'Sejour_Date_Debut' => '2022-04-05',
				'Sejour_Date_Fin' => '2022-04-12',
				'Sejour_Type' => 'Famille',
				'Sejour_Etat' => '1',
			]);
      DB::table('sejours')->insert([
				'Sejour_ID' => '3',
				'Sejour_Nom' => 'Test n°1',
				'Sejour_Date_Debut' => '2022-04-07',
				'Sejour_Date_Fin' => '2022-04-09',
				'Sejour_Type' => 'Enfant',
				'Sejour_Etat' => '1',
			]);
      DB::table('sejours')->insert([
				'Sejour_ID' => '4',
				'Sejour_Nom' => 'Test n°2',
				'Sejour_Date_Debut' => '2022-04-05',
				'Sejour_Date_Fin' => '2022-04-12',
				'Sejour_Type' => 'Enfant',
				'Sejour_Etat' => '1',
			]);
    }
}
