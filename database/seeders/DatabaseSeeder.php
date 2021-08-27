<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AnnonceCategoriesTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CitySectorTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(AnnonceStatusTableSeeder::class);
        $this->call(AnnoncesTableSeeder::class);
        $this->call(AnnonceCategoriesTableSeeder::class);
        $this->call(AnnonceFavoriteTableSeeder::class);
        $this->call(AnnonceImagesTableSeeder::class);
    }
}
