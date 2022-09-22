<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\VilleSeeder;
use Database\Seeders\SejourSeeder;
use Database\Seeders\DepartementSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        VilleSeeder::class,
        SejourSeeder::class,
        PensionSeeder::class,
				UserSeeder::class,
				DepartementSeeder::class,
    ]);
    }
}
