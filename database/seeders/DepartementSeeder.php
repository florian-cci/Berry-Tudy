<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments=[
            'Alsace' => [
              0 => [
                'name' => 'Bas Rhin',
                'code' => '67',
              ],
              1 => [
                'name' => 'Haut Rhin',
                'code' => '68',
              ],
            ],
            'Aquitaine' => [
              0 => [
                'name' => 'Dordogne',
                'code' => '24',
              ],
              1 => [
                'name' => 'Gironde',
                'code' => '33',
              ],
              2 => [
                'name' => 'Landes',
                'code' => '40',
              ],
              3 => [
                'name' => 'Lot et Garonne',
                'code' => '47',
              ],
              4 => [
                'name' => 'Pyrénées Atlantiques',
                'code' => '64',
              ],
            ],
            'Auvergne' => [
              0 => [
                'name' => 'Allier',
                'code' => '03',
              ],
              1 => [
                'name' => 'Cantal',
                'code' => '15',
              ],
              2 => [
                'name' => 'Haute Loire',
                'code' => '43',
              ],
              3 => [
                'name' => 'Puy de Dôme',
                'code' => '63',
              ],
            ],
            'Basse-Normandie' => [
              0 => [
                'name' => 'Calvados',
                'code' => '14',
              ],
              1 => [
                'name' => 'Manche',
                'code' => '50',
              ],
              2 => [
                'name' => 'Orne',
                'code' => '61',
              ],
            ],
            'Bourgogne' => [
              0 => [
                'name' => 'Côte d\'Or',
                'code' => '21',
              ],
              1 => [
                'name' => 'Nièvre',
                'code' => '58',
              ],
              2 => [
                'name' => 'Saône et Loire',
                'code' => '71',
              ],
              3 => [
                'name' => 'Yonne',
                'code' => '89',
              ],
            ],
            'Bretagne' => [
              0 => [
                'name' => 'Côtes d\'Armor',
                'code' => '22',
              ],
              1 => [
                'name' => 'Finistère',
                'code' => '29',
              ],
              2 => [
                'name' => 'Ille et Vilaine',
                'code' => '35',
              ],
              3 => [
                'name' => 'Morbihan',
                'code' => '56',
              ],
            ],
            'Centre' => [
              0 => [
                'name' => 'Cher',
                'code' => '18',
              ],
              1 => [
                'name' => 'Eure et Loir',
                'code' => '28',
              ],
              2 => [
                'name' => 'Indre',
                'code' => '36',
              ],
              3 => [
                'name' => 'Indre et Loire',
                'code' => '37',
              ],
              4 => [
                'name' => 'Loir et Cher',
                'code' => '41',
              ],
              5 => [
                'name' => 'Loiret',
                'code' => '45',
              ],
            ],
            'Champagne-Ardenne' => [
              0 => [
                'name' => 'Ardennes',
                'code' => '08',
              ],
              1 => [
                'name' => 'Aube',
                'code' => '10',
              ],
              2 => [
                'name' => 'Marne',
                'code' => '51',
              ],
              3 => [
                'name' => 'Haute Marne',
                'code' => '52',
              ],
            ],
            'Corse' => [
              0 => [
                'name' => 'Corse du Sud',
                'code' => '2A',
              ],
              1 => [
                'name' => 'Haute Corse',
                'code' => '2B',
              ],
            ],
            'Franche-Comté' => [
              0 => [
                'name' => 'Doubs',
                'code' => '25',
              ],
              1 => [
                'name' => 'Jura',
                'code' => '39',
              ],
              2 => [
                'name' => 'Haute Saône',
                'code' => '70',
              ],
              3 => [
                'name' => 'Territoire de Belfort',
                'code' => '90',
              ],
            ],
            'Haute-Normandie' => [
              0 => [
                'name' => 'Eure',
                'code' => '27',
              ],
              1 => [
                'name' => 'Seine Maritime',
                'code' => '76',
              ],
            ],
            'Ile-de-France' => [
              0 => [
                'name' => 'Paris',
                'code' => '75',
              ],
              1 => [
                'name' => 'Seine et Marne',
                'code' => '77',
              ],
              2 => [
                'name' => 'Yvelines',
                'code' => '78',
              ],
              3 => [
                'name' => 'Essonne',
                'code' => '91',
              ],
              4 => [
                'name' => 'Hauts de Seine',
                'code' => '92',
              ],
              5 => [
                'name' => 'Seine St Denis',
                'code' => '93',
              ],
              6 => [
                'name' => 'Val de Marne',
                'code' => '94',
              ],
              7 => [
                'name' => 'Val d\'Oise',
                'code' => '95',
              ],
            ],
            'Languedoc-Roussillon' => [
              0 => [
                'name' => 'Aude',
                'code' => '11',
              ],
              1 => [
                'name' => 'Gard',
                'code' => '30',
              ],
              2 => [
                'name' => 'Hérault',
                'code' => '34',
              ],
              3 => [
                'name' => 'Lozère',
                'code' => '48',
              ],
              4 => [
                'name' => 'Pyrénées Orientales',
                'code' => '66',
              ],
            ],
            'Limousin' => [
              0 => [
                'name' => 'Corrèze',
                'code' => '19',
              ],
              1 => [
                'name' => 'Creuse',
                'code' => '23',
              ],
              2 => [
                'name' => 'Haute Vienne',
                'code' => '87',
              ],
            ],
            'Lorraine' => [
              0 => [
                'name' => 'Meurthe et Moselle',
                'code' => '54',
              ],
              1 => [
                'name' => 'Meuse',
                'code' => '55',
              ],
              2 => [
                'name' => 'Moselle',
                'code' => '57',
              ],
              3 => [
                'name' => 'Vosges',
                'code' => '88',
              ],
            ],
            'Midi-Pyrénées' => [
              0 => [
                'name' => 'Ariège',
                'code' => '09',
              ],
              1 => [
                'name' => 'Aveyron',
                'code' => '12',
              ],
              2 => [
                'name' => 'Haute Garonne',
                'code' => '31',
              ],
              3 => [
                'name' => 'Gers',
                'code' => '32',
              ],
              4 => [
                'name' => 'Lot',
                'code' => '46',
              ],
              5 => [
                'name' => 'Hautes Pyrénées',
                'code' => '65',
              ],
              6 => [
                'name' => 'Tarn',
                'code' => '81',
              ],
              7 => [
                'name' => 'Tarn et Garonne',
                'code' => '82',
              ],
            ],
            'Nord-Pas-de-Calais' => [
              0 => [
                'name' => 'Nord',
                'code' => '59',
              ],
              1 => [
                'name' => 'Pas de Calais',
                'code' => '62',
              ],
            ],
            'Pays de la Loire' => [
              0 => [
                'name' => 'Loire Atlantique',
                'code' => '44',
              ],
              1 => [
                'name' => 'Maine et Loire',
                'code' => '49',
              ],
              2 => [
                'name' => 'Mayenne',
                'code' => '53',
              ],
              3 => [
                'name' => 'Sarthe',
                'code' => '72',
              ],
              4 => [
                'name' => 'Vendée',
                'code' => '85',
              ],
            ],
            'Picardie' => [
              0 => [
                'name' => 'Aisne',
                'code' => '02',
              ],
              1 => [
                'name' => 'Oise',
                'code' => '60',
              ],
              2 => [
                'name' => 'Somme',
                'code' => '80',
              ],
            ],
            'Poitou-Charentes' => [
              0 => [
                'name' => 'Charente',
                'code' => '16',
              ],
              1 => [
                'name' => 'Charente Maritime',
                'code' => '17',
              ],
              2 => [
                'name' => 'Deux Sèvres',
                'code' => '79',
              ],
              3 => [
                'name' => 'Vienne',
                'code' => '86',
              ],
            ],
            'Provence-Alpes-Côte-d\'Azur' => [
              0 => [
                'name' => 'Alpes de Haute Provence',
                'code' => '04',
              ],
              1 => [
                'name' => 'Hautes Alpes',
                'code' => '05',
              ],
              2 => [
                'name' => 'Alpes Maritimes',
                'code' => '06',
              ],
              3 => [
                'name' => 'Bouches du Rhône',
                'code' => '13',
              ],
              4 => [
                'name' => 'Var',
                'code' => '83',
              ],
              5 => [
                'name' => 'Vaucluse',
                'code' => '84',
              ],
            ],
            'Rhône-Alpes' => [
              0 => [
                'name' => 'Ain',
                'code' => '01',
              ],
              1 => [
                'name' => 'Ardèche',
                'code' => '07',
              ],
              2 => [
                'name' => 'Drôme',
                'code' => '26',
              ],
              3 => [
                'name' => 'Isère',
                'code' => '38',
              ],
              4 => [
                'name' => 'Loire',
                'code' => '42',
              ],
              5 => [
                'name' => 'Rhône-Alpes',
                'code' => '69',
              ],
              6 => [
                'name' => 'Savoie',
                'code' => '73',
              ],
              7 => [
                'name' => 'Haute Savoie',
                'code' => '74',
              ],
            ],
            'DOM' => [
              0 => [
                'name' => 'Guadeloupe',
                'code' => '971',
              ],
              1 => [
                'name' => 'Martinique',
                'code' => '972',
              ],
              2 => [
                'name' => 'Guyane',
                'code' => '973',
              ],
              3 => [
                'name' => 'Réunion',
                'code' => '974',
              ],
            ],
        ];
        // create department
        foreach ($departments as $region => $department) {
            foreach ($department as $dep) {
                Departement::create([
                    'region' => $region,
                    'name' => $dep['name'],
                    'code' => $dep['code'],
                ]);
            }
        }
    }
}
