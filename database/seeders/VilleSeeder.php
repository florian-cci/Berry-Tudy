<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('villes')->insert([
				'Ville_ID' => '1',
				'Ville_Nom' => 'Sancerre',
				'Ville_CP' => '18300',
				'Ville_Departement' => '18',
				'Ville_Region' => 'CH',
				'Ville_Pays' => 'FR',
			]);

			DB::table('villes')->insert([
				'Ville_ID' => '2',
				'Ville_Nom' => 'Les Aix d\'angillon',
				'Ville_CP' => '18220',
				'Ville_Departement' => '18',
				'Ville_Region' => 'CH',
				'Ville_Pays' => 'FR',
			]);

			DB::table('villes')->insert([
				'Ville_ID' => '3',
				'Ville_Nom' => 'Bourges',
				'Ville_CP' => '18000',
				'Ville_Departement' => '18',
				'Ville_Region' => 'CH',
				'Ville_Pays' => 'FR',
			]);

			DB::table('villes')->insert([
				'Ville_ID' => '4',
				'Ville_Nom' => 'Vierzon',
				'Ville_CP' => '18100',
				'Ville_Departement' => '18',
				'Ville_Region' => 'CH',
				'Ville_Pays' => 'FR',
			]);
    }
}
