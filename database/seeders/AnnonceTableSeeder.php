<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnonceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('annonces')->delete();

        \DB::table('annonces')->insert(array (
            0 =>
            array (
                'id' => 50,
                'created_at' => '2019-10-10 19:04:49',
                'created_by' => 29,
                'annonce_UID' => '79d317cc76048c324abc35360192b181',
                'updated_at' => NULL,
                'updated_by' => 0,
                'annonce_category_id' => 34,
                'annonce_sous_category_id' => 41,
                'client_id' => 3,
                'annonce_type_id' => 1,
                'city_id' => 21,
                'city_sector_id' => -1,
                'vehicule_marque_id' => -1,
                'vehicule_marque_serie_id' => -1,
                'vehicule_carburant_id' => -1,
                'vehicule_class_id' => -1,
                'vehicule_puissance_fiscale_id' => -1,
                'vehicule_model_annee' => '-1',
                'vehicule_kilometrage' => '',
                'nombre_piece' => 0,
                'superficie' => '',
                'titre' => 'Velo',
                'telephone' => '0601340223',
                'description' => 'Téléphone ; 0601340223 li ando legrad marhba khayen mofhama inshallah',
                'prix' => 2200.0,
                'prix_type' => 1,
                'slug' => 'velo',
                'default_image' => 'images.png',
                'counter' => 0,
                'images_path' => NULL,
            ),
            1 =>
            array (
                'id' => 51,
                'created_at' => '2019-10-10 19:06:24',
                'created_by' => 29,
                'annonce_UID' => '5dae9e6051cdc8d5310c356574424da9',
                'updated_at' => NULL,
                'updated_by' => 0,
                'annonce_category_id' => 1,
                'annonce_sous_category_id' => 4,
                'client_id' => 3,
                'annonce_type_id' => 4,
                'city_id' => 23,
                'city_sector_id' => 15001,
                'vehicule_marque_id' => -1,
                'vehicule_marque_serie_id' => -1,
                'vehicule_carburant_id' => -1,
                'vehicule_class_id' => -1,
                'vehicule_puissance_fiscale_id' => -1,
                'vehicule_model_annee' => '-1',
                'vehicule_kilometrage' => '',
                'nombre_piece' => 0,
                'superficie' => '',
                'titre' => 'Bureau a louer',
                'telephone' => '0666213234',
                'description' => 'Okayn partma mfarcha jdida m3a lycée hassan tani chllal tetwan plus d autres 0666213234',
                'prix' => 4000.0,
                'prix_type' => 1,
                'slug' => 'bureau-a-louer',
                'default_image' => 'images.png',
                'counter' => 1,
                'images_path' => NULL,
            ),
        ));


    }
}
