<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnonceStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('annonce_statuses')->delete();

        \DB::table('annonce_statuses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'annonce_status' => 'EN ATTENTE',
                'color' => 'rgba(255,220,0,0.5)',
                'is_default' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'annonce_status' => 'PUBLIER',
                'color' => '-1',
                'is_default' => 0,
            ),
            2 =>
            array (
                'id' => 4,
                'annonce_status' => 'TERMINE',
                'color' => 'rgba(255,65,54,0.5)',
                'is_default' => 0,
            ),
        ));


    }
}
