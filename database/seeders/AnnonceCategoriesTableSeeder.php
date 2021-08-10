<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnonceCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('annonce_categories')->delete();
        
        \DB::table('annonce_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'annonce_UID' => '97705997529297b83198b475aa9126ec',
                'annonce_category_name' => 'IMMOBILIER',
                'level' => 1,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/immobilier.png',
                'slug' => 'immobilier-1',
            ),
            1 => 
            array (
                'id' => 2,
                'annonce_UID' => '1443a733ec0a57e1c0c6f664221fc2a8',
                'annonce_category_name' => 'Appartements',
                'level' => 2,
                'category_status' => 1,
                'annonce_category_id' => 1,
                'picture' => '',
                'slug' => 'appartements-2',
            ),
            2 => 
            array (
                'id' => 3,
                'annonce_UID' => '93578958c70610a3d7688f29dee2f87d',
                'annonce_category_name' => 'Maisons et Villas',
                'level' => 3,
                'category_status' => 1,
                'annonce_category_id' => 1,
                'picture' => '',
                'slug' => 'maisons-et-villas-3',
            ),
            3 => 
            array (
                'id' => 4,
                'annonce_UID' => '40d5cc991d9d85ef938c43a793c30802',
                'annonce_category_name' => 'Magasins, Commerces et Locaux industriels',
                'level' => 4,
                'category_status' => 1,
                'annonce_category_id' => 1,
                'picture' => '',
                'slug' => 'magasins,-commerces-et-locaux-industriels-4',
            ),
            4 => 
            array (
                'id' => 5,
                'annonce_UID' => '95c7ff53e8bc2dff9a9d8d880b2e17e0',
                'annonce_category_name' => 'Terrains et Fermes',
                'level' => 5,
                'category_status' => 1,
                'annonce_category_id' => 1,
                'picture' => '',
                'slug' => 'terrains-et-fermes-5',
            ),
            5 => 
            array (
                'id' => 6,
                'annonce_UID' => 'b1af144acdaceef1d59893548f85fcae',
                'annonce_category_name' => 'Autres immobiliers',
                'level' => 6,
                'category_status' => 1,
                'annonce_category_id' => 1,
                'picture' => '',
                'slug' => 'autres-immobiliers-6',
            ),
            6 => 
            array (
                'id' => 7,
                'annonce_UID' => 'd265abd5bd09ea6b03113a51ed788fd8',
                'annonce_category_name' => 'VEHICULES',
                'level' => 6,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/vehicules.png',
                'slug' => 'vehicules-7',
            ),
            7 => 
            array (
                'id' => 8,
                'annonce_UID' => '9e627ff52d150500ab34281060edb4e1',
                'annonce_category_name' => 'Voitures',
                'level' => 7,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'voitures-8',
            ),
            8 => 
            array (
                'id' => 9,
                'annonce_UID' => '5dfd615a5765840e3bbc613bce911295',
                'annonce_category_name' => 'Motos',
                'level' => 8,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'motos-9',
            ),
            9 => 
            array (
                'id' => 10,
                'annonce_UID' => '6e2e600f8c68e63b7e2c0fc14d62ec1d',
                'annonce_category_name' => 'Véhicules Professionnels',
                'level' => 9,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'véhicules-professionnels-10',
            ),
            10 => 
            array (
                'id' => 11,
                'annonce_UID' => '809385959986f201ba58ee8a3ca496cc',
                'annonce_category_name' => 'Nautisme',
                'level' => 10,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'nautisme-11',
            ),
            11 => 
            array (
                'id' => 12,
                'annonce_UID' => 'f41ddc3cd4b4a7a5acb5c03fbf322710',
                'annonce_category_name' => 'Equipements et pièces auto',
                'level' => 11,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'equipements-et-pièces-auto-12',
            ),
            12 => 
            array (
                'id' => 13,
                'annonce_UID' => '991aab6867251dfb1e747e68b28fb10b',
                'annonce_category_name' => 'Equipements et pièces moto',
                'level' => 12,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'equipements-et-pièces-moto-13',
            ),
            13 => 
            array (
                'id' => 14,
                'annonce_UID' => 'c7102a53280772cff212225566407667',
                'annonce_category_name' => 'Equipements et pièces nautisme',
                'level' => 13,
                'category_status' => 1,
                'annonce_category_id' => 7,
                'picture' => '',
                'slug' => 'equipements-et-pièces-nautisme-14',
            ),
            14 => 
            array (
                'id' => 15,
                'annonce_UID' => '23391088a17146e0b3c27b79046f5494',
                'annonce_category_name' => 'MAISON ET JARDIN',
                'level' => 13,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/maison_jardin.png',
                'slug' => 'maison-et-jardin-15',
            ),
            15 => 
            array (
                'id' => 16,
                'annonce_UID' => '2cfa25924705f68bd29192dd1f7f13a0',
                'annonce_category_name' => 'Electroménager et Vaisselles',
                'level' => 14,
                'category_status' => 1,
                'annonce_category_id' => 15,
                'picture' => '',
                'slug' => 'electroménager-et-vaisselles-16',
            ),
            16 => 
            array (
                'id' => 17,
                'annonce_UID' => '6e3626db83e3ea124d26778ee4a7d90b',
                'annonce_category_name' => 'Ameublement et Décoration',
                'level' => 15,
                'category_status' => 1,
                'annonce_category_id' => 15,
                'picture' => '',
                'slug' => 'ameublement-et-décoration-17',
            ),
            17 => 
            array (
                'id' => 18,
                'annonce_UID' => '67b8dd1002977ab47c0c5c7048dcbb7e',
                'annonce_category_name' => 'Jardin et Outils de bricolage',
                'level' => 16,
                'category_status' => 1,
                'annonce_category_id' => 15,
                'picture' => '',
                'slug' => 'jardin-et-outils-de-bricolage-18',
            ),
            18 => 
            array (
                'id' => 19,
                'annonce_UID' => 'a838750cdc8ba359b1eb854d6d3f1b4f',
                'annonce_category_name' => 'MULTIMEDIA',
                'level' => 16,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/multimedia.png',
                'slug' => 'multimedia-19',
            ),
            19 => 
            array (
                'id' => 20,
                'annonce_UID' => 'edc83fb4667ed69a581e87a21bc20686',
                'annonce_category_name' => 'Téléphones',
                'level' => 17,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'téléphones-20',
            ),
            20 => 
            array (
                'id' => 21,
                'annonce_UID' => '45160072ceca495460e60c7e313dfbfe',
                'annonce_category_name' => 'Image & Son',
                'level' => 18,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'image-&-son-21',
            ),
            21 => 
            array (
                'id' => 22,
                'annonce_UID' => '62e244e5e52aa893064258a10297a0b6',
                'annonce_category_name' => 'Ordinateurs portables',
                'level' => 19,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'ordinateurs-portables-22',
            ),
            22 => 
            array (
                'id' => 23,
                'annonce_UID' => '65a274e65ff131f7eb3ff8d7f8708716',
                'annonce_category_name' => 'Jeux vidéo et Consoles',
                'level' => 20,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'jeux-vidéo-et-consoles-23',
            ),
            23 => 
            array (
                'id' => 24,
                'annonce_UID' => '62ac79c3850203ac3a25a29a0734d8a3',
                'annonce_category_name' => 'Ordinateurs de bureau',
                'level' => 21,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'ordinateurs-de-bureau-24',
            ),
            24 => 
            array (
                'id' => 25,
                'annonce_UID' => '0c2ceadb48aa6840cad30ce560c88ecc',
                'annonce_category_name' => 'Accessoires informatique et Gadgets',
                'level' => 22,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'accessoires-informatique-et-gadgets-25',
            ),
            25 => 
            array (
                'id' => 26,
                'annonce_UID' => '6eeb1c9e3f5e8ed4a57b936ae6e6e1d3',
                'annonce_category_name' => 'Appareils photo et Caméras',
                'level' => 23,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'appareils-photo-et-caméras-26',
            ),
            26 => 
            array (
                'id' => 27,
                'annonce_UID' => '674da9845d376c3e9a11dbc7f073b99e',
                'annonce_category_name' => 'Tablettes',
                'level' => 24,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'tablettes-27',
            ),
            27 => 
            array (
                'id' => 28,
                'annonce_UID' => '86d6b398336653401673f88e49db592e',
                'annonce_category_name' => 'Télévisions',
                'level' => 25,
                'category_status' => 1,
                'annonce_category_id' => 19,
                'picture' => '',
                'slug' => 'télévisions-28',
            ),
            28 => 
            array (
                'id' => 29,
                'annonce_UID' => 'e0bd55c7a2bf3528a3c7decf8ed4ab92',
                'annonce_category_name' => 'EMPLOI',
                'level' => 25,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/emploi.png',
                'slug' => 'emploi-29',
            ),
            29 => 
            array (
                'id' => 30,
                'annonce_UID' => 'dfcaf947ad6f445afaf517f2de86bc64',
                'annonce_category_name' => 'Offres d\' emploi',
                'level' => 26,
                'category_status' => 1,
                'annonce_category_id' => 29,
                'picture' => '',
                'slug' => 'offres-d\'-emploi-30',
            ),
            30 => 
            array (
                'id' => 31,
                'annonce_UID' => '5cbbc8ba62f75c516b9ccb97ed238771',
                'annonce_category_name' => 'Demandes d\'emploi',
                'level' => 27,
                'category_status' => 1,
                'annonce_category_id' => 29,
                'picture' => '',
                'slug' => 'demandes-d\'emploi-31',
            ),
            31 => 
            array (
                'id' => 32,
                'annonce_UID' => 'f310ca237934c2ad1cd631c869a472b9',
                'annonce_category_name' => 'Cours et Formations',
                'level' => 28,
                'category_status' => 1,
                'annonce_category_id' => 29,
                'picture' => '',
                'slug' => 'cours-et-formations-32',
            ),
            32 => 
            array (
                'id' => 33,
                'annonce_UID' => 'bd9bd0c4c25cca41fc78958e729af308',
                'annonce_category_name' => 'Stages',
                'level' => 29,
                'category_status' => 1,
                'annonce_category_id' => 29,
                'picture' => '',
                'slug' => 'stages-33',
            ),
            33 => 
            array (
                'id' => 34,
                'annonce_UID' => '10a98b592000039d8a788ff7145b9b99',
                'annonce_category_name' => 'LOISIRS',
                'level' => 29,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/loisir.png',
                'slug' => 'loisirs-34',
            ),
            34 => 
            array (
                'id' => 35,
                'annonce_UID' => '42329fc76ce309cc602393e12c292c41',
                'annonce_category_name' => 'Sports et Loisirs',
                'level' => 30,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'sports-et-loisirs-35',
            ),
            35 => 
            array (
                'id' => 36,
                'annonce_UID' => 'c8242309c495acab384bbfb728dcd7cf',
                'annonce_category_name' => 'Animaux',
                'level' => 31,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'animaux-36',
            ),
            36 => 
            array (
                'id' => 37,
                'annonce_UID' => '0f44501ffaf067ab3c6818e18c506338',
                'annonce_category_name' => 'Jeux, Livres, consoles',
                'level' => 32,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'jeux,-livres,-consoles-37',
            ),
            37 => 
            array (
                'id' => 38,
                'annonce_UID' => 'b1708f65491b7c81dd97202bf6b68be6',
                'annonce_category_name' => 'Matériel de péche',
                'level' => 33,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'matériel-de-péche-38',
            ),
            38 => 
            array (
                'id' => 39,
                'annonce_UID' => '30d97286a7d2fa632fa316ec73358ab1',
                'annonce_category_name' => 'Art et Collections',
                'level' => 34,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'art-et-collections-39',
            ),
            39 => 
            array (
                'id' => 40,
                'annonce_UID' => '10d150b57f15bac8d3cb09632c6be0e2',
                'annonce_category_name' => 'Instruments de Musique',
                'level' => 35,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'instruments-de-musique-40',
            ),
            40 => 
            array (
                'id' => 41,
                'annonce_UID' => '0adb1ec1d45b8753aa5147faee197117',
                'annonce_category_name' => 'Vélos',
                'level' => 36,
                'category_status' => 1,
                'annonce_category_id' => 34,
                'picture' => '',
                'slug' => 'vélos-41',
            ),
            41 => 
            array (
                'id' => 42,
                'annonce_UID' => 'e4abf14a6c5a44bc893b097a340d35e0',
                'annonce_category_name' => 'ENTREPRISES ',
                'level' => 36,
                'category_status' => 0,
                'annonce_category_id' => -1,
                'picture' => '',
                'slug' => 'entreprises-42',
            ),
            42 => 
            array (
                'id' => 43,
                'annonce_UID' => '7103f91161ec9fd36343dc5c11fccf0e',
                'annonce_category_name' => 'Matériels Professionnels',
                'level' => 37,
                'category_status' => 1,
                'annonce_category_id' => 42,
                'picture' => '',
                'slug' => 'matériels-professionnels-43',
            ),
            43 => 
            array (
                'id' => 44,
                'annonce_UID' => 'ac546ad22613af834e27d7d5848ae78b',
                'annonce_category_name' => 'Business et Affaires commerciales',
                'level' => 38,
                'category_status' => 1,
                'annonce_category_id' => 42,
                'picture' => '',
                'slug' => 'business-et-affaires-commerciales-44',
            ),
            44 => 
            array (
                'id' => 45,
                'annonce_UID' => '3d5364c48f07cd2d6aa6df77c0dacfa3',
                'annonce_category_name' => 'Stocks et Vente en gros',
                'level' => 39,
                'category_status' => 1,
                'annonce_category_id' => 42,
                'picture' => '',
                'slug' => 'stocks-et-vente-en-gros-45',
            ),
            45 => 
            array (
                'id' => 46,
                'annonce_UID' => 'fe3be67f7158d21b34378499d95baa88',
                'annonce_category_name' => 'HABILLEMENT ET BIEN ETRE',
                'level' => 39,
                'category_status' => 0,
                'annonce_category_id' => -1,
                'picture' => '',
                'slug' => 'habillement-et-bien-etre-46',
            ),
            46 => 
            array (
                'id' => 47,
                'annonce_UID' => 'f411047446ff59698265c72331a84122',
                'annonce_category_name' => 'Vêtements',
                'level' => 40,
                'category_status' => 1,
                'annonce_category_id' => 46,
                'picture' => '',
                'slug' => 'vêtements-47',
            ),
            47 => 
            array (
                'id' => 48,
                'annonce_UID' => 'f857213bdb76cdd02a1048f7cbb79f5d',
                'annonce_category_name' => 'Chaussures',
                'level' => 41,
                'category_status' => 1,
                'annonce_category_id' => 46,
                'picture' => '',
                'slug' => 'chaussures-48',
            ),
            48 => 
            array (
                'id' => 49,
                'annonce_UID' => 'fa9e8b1c3b5cee2d5f9668163334e2b8',
                'annonce_category_name' => 'Sacs et Accessoires',
                'level' => 42,
                'category_status' => 1,
                'annonce_category_id' => 46,
                'picture' => '',
                'slug' => 'sacs-et-accessoires-49',
            ),
            49 => 
            array (
                'id' => 50,
                'annonce_UID' => 'e11b075dd89bd6739bddd0ca4d2041c2',
                'annonce_category_name' => 'Produits de beauté',
                'level' => 43,
                'category_status' => 1,
                'annonce_category_id' => 46,
                'picture' => '',
                'slug' => 'produits-de-beauté-50',
            ),
            50 => 
            array (
                'id' => 51,
                'annonce_UID' => '99aba59fcff25598061f55572f25dede',
                'annonce_category_name' => 'Equipements pour enfant et bébé',
                'level' => 44,
                'category_status' => 1,
                'annonce_category_id' => 46,
                'picture' => '',
                'slug' => 'equipements-pour-enfant-et-bébé-51',
            ),
            51 => 
            array (
                'id' => 53,
                'annonce_UID' => '6d293f2f282efb7ee11233660fcb107f',
                'annonce_category_name' => 'Montres et Bijoux',
                'level' => 46,
                'category_status' => 1,
                'annonce_category_id' => 46,
                'picture' => '',
                'slug' => 'montres-et-bijoux-53',
            ),
            52 => 
            array (
                'id' => 54,
                'annonce_UID' => 'a1b7bb5bdb0c61caa758f3197e5487a5',
                'annonce_category_name' => 'AUTRES',
                'level' => 146,
                'category_status' => 0,
                'annonce_category_id' => -1,
                'picture' => '',
                'slug' => 'autres-54',
            ),
            53 => 
            array (
                'id' => 55,
                'annonce_UID' => 'c5af228399bd40ed68295ec58e628afd',
                'annonce_category_name' => 'VACANCES',
                'level' => 46,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/location_voiture.png',
                'slug' => 'vacances-55',
            ),
            54 => 
            array (
                'id' => 56,
                'annonce_UID' => 'aa2d52f3106d6a05a9d768a0f2cf69ed',
                'annonce_category_name' => 'Locations et Gîtes',
                'level' => 47,
                'category_status' => 1,
                'annonce_category_id' => 55,
                'picture' => '',
                'slug' => 'locations-et-gîtes-56',
            ),
            55 => 
            array (
                'id' => 57,
                'annonce_UID' => '13a5199f9bdc9eeb1083cca1682e74e9',
                'annonce_category_name' => 'Hotels et Appart hotels',
                'level' => 48,
                'category_status' => 1,
                'annonce_category_id' => 55,
                'picture' => '',
                'slug' => 'hotels-et-appart-hotels-57',
            ),
            56 => 
            array (
                'id' => 58,
                'annonce_UID' => '5ad59c5e09c7e0063f5da9a447708827',
                'annonce_category_name' => 'Voyages organisés',
                'level' => 49,
                'category_status' => 1,
                'annonce_category_id' => 55,
                'picture' => '',
                'slug' => 'voyages-organisés-58',
            ),
            57 => 
            array (
                'id' => 59,
                'annonce_UID' => '8302e6cfeea4545736baec3c14f4e5cb',
                'annonce_category_name' => 'Location de voitures',
                'level' => 50,
                'category_status' => 1,
                'annonce_category_id' => 55,
                'picture' => '',
                'slug' => 'location-de-voitures-59',
            ),
            58 => 
            array (
                'id' => 60,
                'annonce_UID' => 'bb463311a2642f636f850019f68c6031',
                'annonce_category_name' => 'SERVICES',
                'level' => 50,
                'category_status' => 1,
                'annonce_category_id' => -1,
                'picture' => 'annonce_category/evenements.png',
                'slug' => 'services-60',
            ),
            59 => 
            array (
                'id' => 61,
                'annonce_UID' => '24e17757096e1fac788a3b7a136a8799',
                'annonce_category_name' => 'Prestations de services',
                'level' => 51,
                'category_status' => 1,
                'annonce_category_id' => 60,
                'picture' => '',
                'slug' => 'prestations-de-services-61',
            ),
            60 => 
            array (
                'id' => 62,
                'annonce_UID' => 'ac43aded878ddd4805b3a8b646a3e128',
                'annonce_category_name' => 'Billetterie',
                'level' => 52,
                'category_status' => 1,
                'annonce_category_id' => 60,
                'picture' => '',
                'slug' => 'billetterie-62',
            ),
            61 => 
            array (
                'id' => 63,
                'annonce_UID' => 'cb41d355883fa748e33a0b9eca849616',
                'annonce_category_name' => 'Evenements et traiteurs',
                'level' => 53,
                'category_status' => 1,
                'annonce_category_id' => 60,
                'picture' => '',
                'slug' => 'evenements-et-traiteurs-63',
            ),
            62 => 
            array (
                'id' => 64,
                'annonce_UID' => '39de9b111303505392bb7a0b29b096a6',
                'annonce_category_name' => 'Cours particuliers',
                'level' => 54,
                'category_status' => 1,
                'annonce_category_id' => 60,
                'picture' => '',
                'slug' => 'cours-particuliers-64',
            ),
            63 => 
            array (
                'id' => 65,
                'annonce_UID' => 'd5d077c87d1f26ab3a367e5e09355bbc',
                'annonce_category_name' => 'Covoiturage',
                'level' => 55,
                'category_status' => 1,
                'annonce_category_id' => 60,
                'picture' => '',
                'slug' => 'covoiturage-65',
            ),
            64 => 
            array (
                'id' => 66,
                'annonce_UID' => '96136fe4816ce77c50834cfe2f1992a3',
                'annonce_category_name' => 'Autres',
                'level' => 0,
                'category_status' => 1,
                'annonce_category_id' => 54,
                'picture' => '',
                'slug' => 'autres-66',
            ),
            65 => 
            array (
                'id' => 67,
                'annonce_UID' => 'e4aca306c388af8fb9f088dfd5b3aec1',
                'annonce_category_name' => 'bureaux et plateaux',
                'level' => 2,
                'category_status' => 1,
                'annonce_category_id' => 1,
                'picture' => '',
                'slug' => 'bureaux-et-plateaux-67',
            ),
        ));
        
        
    }
}