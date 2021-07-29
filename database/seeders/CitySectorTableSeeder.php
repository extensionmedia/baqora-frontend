<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySectorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('city_sectors')->delete();

        \DB::table('city_sectors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'city_id' => 4,
                'city_sector_name' => 'Aïn chock',
                'city_sector_status' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'city_id' => 4,
                'city_sector_name' => 'aïn sebaâ',
                'city_sector_status' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'city_id' => 4,
                'city_sector_name' => 'Anfa',
                'city_sector_status' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'city_id' => 4,
                'city_sector_name' => 'Al Fida',
                'city_sector_status' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'city_id' => 4,
                'city_sector_name' => 'Ben M sick',
                'city_sector_status' => 1,
            ),
            5 =>
            array (
                'id' => 6,
                'city_id' => 4,
                'city_sector_name' => 'Sidi Bernoussi',
                'city_sector_status' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'city_id' => 4,
                'city_sector_name' => 'Hay hassani',
                'city_sector_status' => 1,
            ),
            7 =>
            array (
                'id' => 8,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid',
                'city_sector_status' => 1,
            ),
            8 =>
            array (
                'id' => 9,
                'city_id' => 4,
                'city_sector_name' => '02-mars',
                'city_sector_status' => 1,
            ),
            9 =>
            array (
                'id' => 10,
                'city_id' => 4,
                'city_sector_name' => 'Aïn Borja',
                'city_sector_status' => 1,
            ),
            10 =>
            array (
                'id' => 11,
                'city_id' => 4,
                'city_sector_name' => 'Aïn Diab',
                'city_sector_status' => 1,
            ),
            11 =>
            array (
                'id' => 12,
                'city_id' => 4,
                'city_sector_name' => 'Al batha',
                'city_sector_status' => 1,
            ),
            12 =>
            array (
                'id' => 13,
                'city_id' => 4,
                'city_sector_name' => 'Alsace Lorraine',
                'city_sector_status' => 1,
            ),
            13 =>
            array (
                'id' => 14,
                'city_id' => 4,
                'city_sector_name' => 'Beauséjour',
                'city_sector_status' => 1,
            ),
            14 =>
            array (
                'id' => 15,
                'city_id' => 4,
                'city_sector_name' => 'Bélvédère',
                'city_sector_status' => 1,
            ),
            15 =>
            array (
                'id' => 16,
                'city_id' => 4,
                'city_sector_name' => 'Ben Ejdia',
                'city_sector_status' => 1,
            ),
            16 =>
            array (
                'id' => 17,
                'city_id' => 4,
                'city_sector_name' => 'Benmsik',
                'city_sector_status' => 1,
            ),
            17 =>
            array (
                'id' => 18,
                'city_id' => 4,
                'city_sector_name' => 'Bourgogne',
                'city_sector_status' => 1,
            ),
            18 =>
            array (
                'id' => 19,
                'city_id' => 4,
                'city_sector_name' => 'Californie',
                'city_sector_status' => 1,
            ),
            19 =>
            array (
                'id' => 20,
                'city_id' => 4,
                'city_sector_name' => 'Centre ville',
                'city_sector_status' => 1,
            ),
            20 =>
            array (
                'id' => 21,
                'city_id' => 4,
                'city_sector_name' => 'C.I.L',
                'city_sector_status' => 1,
            ),
            21 =>
            array (
                'id' => 22,
                'city_id' => 4,
                'city_sector_name' => 'Derb Ghallef',
                'city_sector_status' => 1,
            ),
            22 =>
            array (
                'id' => 23,
                'city_id' => 4,
                'city_sector_name' => 'Derb Omar',
                'city_sector_status' => 1,
            ),
            23 =>
            array (
                'id' => 24,
                'city_id' => 4,
                'city_sector_name' => 'El manar El hank',
                'city_sector_status' => 1,
            ),
            24 =>
            array (
                'id' => 25,
                'city_id' => 4,
                'city_sector_name' => 'Ferme Bretone',
                'city_sector_status' => 1,
            ),
            25 =>
            array (
                'id' => 26,
                'city_id' => 4,
                'city_sector_name' => 'Florida',
                'city_sector_status' => 1,
            ),
            26 =>
            array (
                'id' => 27,
                'city_id' => 4,
                'city_sector_name' => 'Foncière',
                'city_sector_status' => 1,
            ),
            27 =>
            array (
                'id' => 28,
                'city_id' => 4,
                'city_sector_name' => 'Gauthier',
                'city_sector_status' => 1,
            ),
            28 =>
            array (
                'id' => 29,
                'city_id' => 4,
                'city_sector_name' => 'Habous',
                'city_sector_status' => 1,
            ),
            29 =>
            array (
                'id' => 30,
                'city_id' => 4,
                'city_sector_name' => 'Hay Mohammadi',
                'city_sector_status' => 1,
            ),
            30 =>
            array (
                'id' => 31,
                'city_id' => 4,
                'city_sector_name' => 'Hay hana',
                'city_sector_status' => 1,
            ),
            31 =>
            array (
                'id' => 32,
                'city_id' => 4,
                'city_sector_name' => 'Hay inara',
                'city_sector_status' => 1,
            ),
            32 =>
            array (
                'id' => 33,
                'city_id' => 4,
                'city_sector_name' => 'Hay Laymouna',
                'city_sector_status' => 1,
            ),
            33 =>
            array (
                'id' => 34,
                'city_id' => 4,
                'city_sector_name' => 'Hermitage',
                'city_sector_status' => 1,
            ),
            34 =>
            array (
                'id' => 35,
                'city_id' => 4,
                'city_sector_name' => 'Hippodrome',
                'city_sector_status' => 1,
            ),
            35 =>
            array (
                'id' => 36,
                'city_id' => 4,
                'city_sector_name' => 'Hôrloge',
                'city_sector_status' => 1,
            ),
            36 =>
            array (
                'id' => 37,
                'city_id' => 4,
                'city_sector_name' => 'Industriel Nord',
                'city_sector_status' => 1,
            ),
            37 =>
            array (
                'id' => 38,
                'city_id' => 4,
                'city_sector_name' => 'La gare',
                'city_sector_status' => 1,
            ),
            38 =>
            array (
                'id' => 39,
                'city_id' => 4,
                'city_sector_name' => 'La gironde',
                'city_sector_status' => 1,
            ),
            39 =>
            array (
                'id' => 40,
                'city_id' => 4,
                'city_sector_name' => 'Laimoune',
                'city_sector_status' => 1,
            ),
            40 =>
            array (
                'id' => 41,
                'city_id' => 4,
                'city_sector_name' => 'Les camps',
                'city_sector_status' => 1,
            ),
            41 =>
            array (
                'id' => 42,
                'city_id' => 4,
                'city_sector_name' => 'Les cretes',
                'city_sector_status' => 1,
            ),
            42 =>
            array (
                'id' => 43,
                'city_id' => 4,
                'city_sector_name' => 'Les Princesses',
                'city_sector_status' => 1,
            ),
            43 =>
            array (
                'id' => 44,
                'city_id' => 4,
                'city_sector_name' => 'Lissasfa',
                'city_sector_status' => 1,
            ),
            44 =>
            array (
                'id' => 45,
                'city_id' => 4,
                'city_sector_name' => 'Longchamps',
                'city_sector_status' => 1,
            ),
            45 =>
            array (
                'id' => 46,
                'city_id' => 4,
                'city_sector_name' => 'Lusitania',
                'city_sector_status' => 1,
            ),
            46 =>
            array (
                'id' => 47,
                'city_id' => 4,
                'city_sector_name' => 'Maarif',
                'city_sector_status' => 1,
            ),
            47 =>
            array (
                'id' => 48,
                'city_id' => 4,
                'city_sector_name' => 'Mers sultan',
                'city_sector_status' => 1,
            ),
            48 =>
            array (
                'id' => 49,
                'city_id' => 4,
                'city_sector_name' => 'Oasis',
                'city_sector_status' => 1,
            ),
            49 =>
            array (
                'id' => 50,
                'city_id' => 4,
                'city_sector_name' => 'Oulfa',
                'city_sector_status' => 1,
            ),
            50 =>
            array (
                'id' => 51,
                'city_id' => 4,
                'city_sector_name' => 'Palmier',
                'city_sector_status' => 1,
            ),
            51 =>
            array (
                'id' => 52,
                'city_id' => 4,
                'city_sector_name' => 'Parc',
                'city_sector_status' => 1,
            ),
            52 =>
            array (
                'id' => 53,
                'city_id' => 4,
                'city_sector_name' => 'Polo',
                'city_sector_status' => 1,
            ),
            53 =>
            array (
                'id' => 54,
                'city_id' => 4,
                'city_sector_name' => 'Quartier des hôpitaux',
                'city_sector_status' => 1,
            ),
            54 =>
            array (
                'id' => 55,
                'city_id' => 4,
                'city_sector_name' => 'Racine',
                'city_sector_status' => 1,
            ),
            55 =>
            array (
                'id' => 56,
                'city_id' => 4,
                'city_sector_name' => 'Riviera',
                'city_sector_status' => 1,
            ),
            56 =>
            array (
                'id' => 57,
                'city_id' => 4,
                'city_sector_name' => 'Roches Noires',
                'city_sector_status' => 1,
            ),
            57 =>
            array (
                'id' => 58,
                'city_id' => 4,
                'city_sector_name' => 'Routes d Azzemour',
                'city_sector_status' => 1,
            ),
            58 =>
            array (
                'id' => 59,
                'city_id' => 4,
                'city_sector_name' => 'Route d El jadida',
                'city_sector_status' => 1,
            ),
            59 =>
            array (
                'id' => 60,
                'city_id' => 4,
                'city_sector_name' => 'Sbata',
                'city_sector_status' => 1,
            ),
            60 =>
            array (
                'id' => 61,
                'city_id' => 4,
                'city_sector_name' => 'Sidi Belyout',
                'city_sector_status' => 1,
            ),
            61 =>
            array (
                'id' => 62,
                'city_id' => 4,
                'city_sector_name' => 'Sidi Maarouf',
                'city_sector_status' => 1,
            ),
            62 =>
            array (
                'id' => 63,
                'city_id' => 4,
                'city_sector_name' => 'Sidi Moumen',
                'city_sector_status' => 1,
            ),
            63 =>
            array (
                'id' => 64,
                'city_id' => 4,
                'city_sector_name' => 'Sidi Othmane',
                'city_sector_status' => 1,
            ),
            64 =>
            array (
                'id' => 65,
                'city_id' => 4,
                'city_sector_name' => 'Sour Jdid',
                'city_sector_status' => 1,
            ),
            65 =>
            array (
                'id' => 66,
                'city_id' => 4,
                'city_sector_name' => 'Tantonville',
                'city_sector_status' => 1,
            ),
            66 =>
            array (
                'id' => 67,
                'city_id' => 4,
                'city_sector_name' => 'Triangle d Or',
                'city_sector_status' => 1,
            ),
            67 =>
            array (
                'id' => 68,
                'city_id' => 4,
                'city_sector_name' => 'Val d Anfa',
                'city_sector_status' => 1,
            ),
            68 =>
            array (
                'id' => 69,
                'city_id' => 4,
                'city_sector_name' => 'Val Fleuri',
                'city_sector_status' => 1,
            ),
            69 =>
            array (
                'id' => 70,
                'city_id' => 4,
                'city_sector_name' => 'Alqods',
                'city_sector_status' => 1,
            ),
            70 =>
            array (
                'id' => 71,
                'city_id' => 4,
                'city_sector_name' => 'Bernoussi',
                'city_sector_status' => 1,
            ),
            71 =>
            array (
                'id' => 72,
                'city_id' => 4,
                'city_sector_name' => 'Hay Al amal',
                'city_sector_status' => 1,
            ),
            72 =>
            array (
                'id' => 73,
                'city_id' => 4,
                'city_sector_name' => 'hay Mbarka',
                'city_sector_status' => 1,
            ),
            73 =>
            array (
                'id' => 74,
                'city_id' => 4,
                'city_sector_name' => 'Hay Mansour',
                'city_sector_status' => 1,
            ),
            74 =>
            array (
                'id' => 75,
                'city_id' => 4,
                'city_sector_name' => 'Hay tarik',
                'city_sector_status' => 1,
            ),
            75 =>
            array (
                'id' => 76,
                'city_id' => 4,
                'city_sector_name' => 'Zone Industrielle',
                'city_sector_status' => 1,
            ),
            76 =>
            array (
                'id' => 77,
                'city_id' => 4,
                'city_sector_name' => 'Al madina El jadida',
                'city_sector_status' => 1,
            ),
            77 =>
            array (
                'id' => 78,
                'city_id' => 4,
                'city_sector_name' => 'Boumazil',
                'city_sector_status' => 1,
            ),
            78 =>
            array (
                'id' => 79,
                'city_id' => 4,
                'city_sector_name' => 'Hay Albaraka',
                'city_sector_status' => 1,
            ),
            79 =>
            array (
                'id' => 80,
                'city_id' => 4,
                'city_sector_name' => 'Hay Afalah',
                'city_sector_status' => 1,
            ),
            80 =>
            array (
                'id' => 81,
                'city_id' => 4,
                'city_sector_name' => 'Hay Almassira1',
                'city_sector_status' => 1,
            ),
            81 =>
            array (
                'id' => 82,
                'city_id' => 4,
                'city_sector_name' => 'Hay Almassira2',
                'city_sector_status' => 1,
            ),
            82 =>
            array (
                'id' => 83,
                'city_id' => 4,
                'city_sector_name' => 'Hay Almassira 3',
                'city_sector_status' => 1,
            ),
            83 =>
            array (
                'id' => 84,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid 1',
                'city_sector_status' => 1,
            ),
            84 =>
            array (
                'id' => 85,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid 2',
                'city_sector_status' => 1,
            ),
            85 =>
            array (
                'id' => 86,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid 3',
                'city_sector_status' => 1,
            ),
            86 =>
            array (
                'id' => 87,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid 4',
                'city_sector_status' => 1,
            ),
            87 =>
            array (
                'id' => 88,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid 5',
                'city_sector_status' => 1,
            ),
            88 =>
            array (
                'id' => 89,
                'city_id' => 4,
                'city_sector_name' => 'Hay moulay rachid 6',
                'city_sector_status' => 1,
            ),
            89 =>
            array (
                'id' => 90,
                'city_id' => 4,
                'city_sector_name' => 'Hay rajaa',
                'city_sector_status' => 1,
            ),
            90 =>
            array (
                'id' => 91,
                'city_id' => 4,
                'city_sector_name' => 'Hay sadri',
                'city_sector_status' => 1,
            ),
            91 =>
            array (
                'id' => 92,
                'city_id' => 4,
                'city_sector_name' => 'Zone industrielle Moulay Rachid',
                'city_sector_status' => 1,
            ),
            92 =>
            array (
                'id' => 100,
                'city_id' => 1,
                'city_sector_name' => 'Bouargane',
                'city_sector_status' => 1,
            ),
            93 =>
            array (
                'id' => 101,
                'city_id' => 1,
                'city_sector_name' => 'Charaff',
                'city_sector_status' => 1,
            ),
            94 =>
            array (
                'id' => 102,
                'city_id' => 1,
                'city_sector_name' => 'Hay dakhla',
                'city_sector_status' => 1,
            ),
            95 =>
            array (
                'id' => 103,
                'city_id' => 1,
                'city_sector_name' => 'El houda',
                'city_sector_status' => 1,
            ),
            96 =>
            array (
                'id' => 104,
                'city_id' => 1,
                'city_sector_name' => 'Founty',
                'city_sector_status' => 1,
            ),
            97 =>
            array (
                'id' => 105,
                'city_id' => 1,
                'city_sector_name' => 'Haut-Founty',
                'city_sector_status' => 1,
            ),
            98 =>
            array (
                'id' => 106,
                'city_id' => 1,
                'city_sector_name' => 'Hay mohammadi',
                'city_sector_status' => 1,
            ),
            99 =>
            array (
                'id' => 107,
                'city_id' => 1,
                'city_sector_name' => 'Lligh',
                'city_sector_status' => 1,
            ),
            100 =>
            array (
                'id' => 108,
                'city_id' => 1,
                'city_sector_name' => 'Lkhiam',
                'city_sector_status' => 1,
            ),
            101 =>
            array (
                'id' => 109,
                'city_id' => 1,
                'city_sector_name' => 'le bord de mer ',
                'city_sector_status' => 1,
            ),
            102 =>
            array (
                'id' => 110,
                'city_id' => 1,
                'city_sector_name' => ' centre  ville',
                'city_sector_status' => 1,
            ),
            103 =>
            array (
                'id' => 111,
                'city_id' => 1,
                'city_sector_name' => 'Les amicales ',
                'city_sector_status' => 1,
            ),
            104 =>
            array (
                'id' => 112,
                'city_id' => 1,
                'city_sector_name' => 'Najah',
                'city_sector_status' => 1,
            ),
            105 =>
            array (
                'id' => 113,
                'city_id' => 1,
                'city_sector_name' => 'Hay Qods',
                'city_sector_status' => 1,
            ),
            106 =>
            array (
                'id' => 114,
                'city_id' => 1,
                'city_sector_name' => 'Hay salam',
                'city_sector_status' => 1,
            ),
            107 =>
            array (
                'id' => 115,
                'city_id' => 1,
                'city_sector_name' => 'Suisse ',
                'city_sector_status' => 1,
            ),
            108 =>
            array (
                'id' => 116,
                'city_id' => 1,
                'city_sector_name' => 'Talborjt',
                'city_sector_status' => 1,
            ),
            109 =>
            array (
                'id' => 117,
                'city_id' => 1,
                'city_sector_name' => 'Wafaa',
                'city_sector_status' => 1,
            ),
            110 =>
            array (
                'id' => 118,
                'city_id' => 1,
                'city_sector_name' => 'Arghoud',
                'city_sector_status' => 1,
            ),
            111 =>
            array (
                'id' => 119,
                'city_id' => 1,
                'city_sector_name' => 'Alwifaq',
                'city_sector_status' => 1,
            ),
            112 =>
            array (
                'id' => 120,
                'city_id' => 1,
                'city_sector_name' => 'Anoual Souss ',
                'city_sector_status' => 1,
            ),
            113 =>
            array (
                'id' => 121,
                'city_id' => 1,
                'city_sector_name' => 'Av des FAR',
                'city_sector_status' => 1,
            ),
            114 =>
            array (
                'id' => 122,
                'city_id' => 1,
                'city_sector_name' => 'Av Mokawama',
                'city_sector_status' => 1,
            ),
            115 =>
            array (
                'id' => 123,
                'city_id' => 1,
                'city_sector_name' => 'Ben serguaou',
                'city_sector_status' => 1,
            ),
            116 =>
            array (
                'id' => 124,
                'city_id' => 1,
                'city_sector_name' => 'Centre ville',
                'city_sector_status' => 1,
            ),
            117 =>
            array (
                'id' => 125,
                'city_id' => 1,
                'city_sector_name' => 'Ennahda',
                'city_sector_status' => 1,
            ),
            118 =>
            array (
                'id' => 126,
                'city_id' => 1,
                'city_sector_name' => 'Hay Massira',
                'city_sector_status' => 1,
            ),
            119 =>
            array (
                'id' => 127,
                'city_id' => 1,
                'city_sector_name' => 'Hay najah ',
                'city_sector_status' => 1,
            ),
            120 =>
            array (
                'id' => 128,
                'city_id' => 1,
                'city_sector_name' => 'Marina',
                'city_sector_status' => 1,
            ),
            121 =>
            array (
                'id' => 129,
                'city_id' => 1,
                'city_sector_name' => 'Riad salam',
                'city_sector_status' => 1,
            ),
            122 =>
            array (
                'id' => 130,
                'city_id' => 1,
                'city_sector_name' => 'Sonaba',
                'city_sector_status' => 1,
            ),
            123 =>
            array (
                'id' => 131,
                'city_id' => 1,
                'city_sector_name' => 'Tamaraght',
                'city_sector_status' => 1,
            ),
            124 =>
            array (
                'id' => 132,
                'city_id' => 1,
                'city_sector_name' => 'Tilila',
                'city_sector_status' => 1,
            ),
            125 =>
            array (
                'id' => 133,
                'city_id' => 1,
                'city_sector_name' => 'Ville nouvelle',
                'city_sector_status' => 1,
            ),
            126 =>
            array (
                'id' => 134,
                'city_id' => 1,
                'city_sector_name' => 'Wifaq',
                'city_sector_status' => 1,
            ),
            127 =>
            array (
                'id' => 135,
                'city_id' => 1,
                'city_sector_name' => 'Abbattoirs',
                'city_sector_status' => 1,
            ),
            128 =>
            array (
                'id' => 136,
                'city_id' => 1,
                'city_sector_name' => 'Agadir Oufella',
                'city_sector_status' => 1,
            ),
            129 =>
            array (
                'id' => 137,
                'city_id' => 1,
                'city_sector_name' => 'Amicales',
                'city_sector_status' => 1,
            ),
            130 =>
            array (
                'id' => 138,
                'city_id' => 1,
                'city_sector_name' => 'Amsemate',
                'city_sector_status' => 1,
            ),
            131 =>
            array (
                'id' => 139,
                'city_id' => 1,
                'city_sector_name' => 'Anahda',
                'city_sector_status' => 1,
            ),
            132 =>
            array (
                'id' => 140,
                'city_id' => 1,
                'city_sector_name' => 'Anza',
                'city_sector_status' => 1,
            ),
            133 =>
            array (
                'id' => 141,
                'city_id' => 1,
                'city_sector_name' => 'Assaka',
                'city_sector_status' => 1,
            ),
            134 =>
            array (
                'id' => 142,
                'city_id' => 1,
                'city_sector_name' => 'Boutchakat',
                'city_sector_status' => 1,
            ),
            135 =>
            array (
                'id' => 143,
                'city_id' => 1,
                'city_sector_name' => 'Charaf',
                'city_sector_status' => 1,
            ),
            136 =>
            array (
                'id' => 144,
                'city_id' => 1,
                'city_sector_name' => 'Cité Adrar ',
                'city_sector_status' => 1,
            ),
            137 =>
            array (
                'id' => 145,
                'city_id' => 1,
                'city_sector_name' => 'Extension dakhla',
                'city_sector_status' => 1,
            ),
            138 =>
            array (
                'id' => 146,
                'city_id' => 1,
                'city_sector_name' => 'Founti',
                'city_sector_status' => 1,
            ),
            139 =>
            array (
                'id' => 147,
                'city_id' => 1,
                'city_sector_name' => 'Haut anza',
                'city_sector_status' => 1,
            ),
            140 =>
            array (
                'id' => 148,
                'city_id' => 1,
                'city_sector_name' => 'Hay Al farah ',
                'city_sector_status' => 1,
            ),
            141 =>
            array (
                'id' => 149,
                'city_id' => 1,
                'city_sector_name' => 'Hay Al wafaa',
                'city_sector_status' => 1,
            ),
            142 =>
            array (
                'id' => 150,
                'city_id' => 1,
                'city_sector_name' => 'Hay Hassani ',
                'city_sector_status' => 1,
            ),
            143 =>
            array (
                'id' => 151,
                'city_id' => 1,
                'city_sector_name' => 'Hay houda',
                'city_sector_status' => 1,
            ),
            144 =>
            array (
                'id' => 152,
                'city_id' => 1,
                'city_sector_name' => 'Hay zaytoun',
                'city_sector_status' => 1,
            ),
            145 =>
            array (
                'id' => 153,
                'city_id' => 1,
                'city_sector_name' => 'Lhchach',
                'city_sector_status' => 1,
            ),
            146 =>
            array (
                'id' => 154,
                'city_id' => 1,
                'city_sector_name' => 'Lligh',
                'city_sector_status' => 1,
            ),
            147 =>
            array (
                'id' => 155,
                'city_id' => 1,
                'city_sector_name' => 'Laazib',
                'city_sector_status' => 1,
            ),
            148 =>
            array (
                'id' => 156,
                'city_id' => 1,
                'city_sector_name' => 'Lekhiam',
                'city_sector_status' => 1,
            ),
            149 =>
            array (
                'id' => 157,
                'city_id' => 1,
                'city_sector_name' => 'Port',
                'city_sector_status' => 1,
            ),
            150 =>
            array (
                'id' => 158,
                'city_id' => 1,
                'city_sector_name' => 'Secteur touristique',
                'city_sector_status' => 1,
            ),
            151 =>
            array (
                'id' => 159,
                'city_id' => 1,
                'city_sector_name' => 'Suisse',
                'city_sector_status' => 1,
            ),
            152 =>
            array (
                'id' => 160,
                'city_id' => 1,
                'city_sector_name' => 'Taddart',
                'city_sector_status' => 1,
            ),
            153 =>
            array (
                'id' => 161,
                'city_id' => 1,
                'city_sector_name' => 'Taddart Anza',
                'city_sector_status' => 1,
            ),
            154 =>
            array (
                'id' => 162,
                'city_id' => 1,
                'city_sector_name' => 'Zone industrielle Agadir',
                'city_sector_status' => 1,
            ),
            155 =>
            array (
                'id' => 200,
                'city_id' => 5,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            156 =>
            array (
                'id' => 201,
                'city_id' => 5,
                'city_sector_name' => 'Alaouiyine',
                'city_sector_status' => 1,
            ),
            157 =>
            array (
                'id' => 202,
                'city_id' => 5,
                'city_sector_name' => 'Amal',
                'city_sector_status' => 1,
            ),
            158 =>
            array (
                'id' => 203,
                'city_id' => 5,
                'city_sector_name' => 'Najd',
                'city_sector_status' => 1,
            ),
            159 =>
            array (
                'id' => 204,
                'city_id' => 5,
                'city_sector_name' => 'Saada',
                'city_sector_status' => 1,
            ),
            160 =>
            array (
                'id' => 205,
                'city_id' => 5,
                'city_sector_name' => 'Salama',
                'city_sector_status' => 1,
            ),
            161 =>
            array (
                'id' => 206,
                'city_id' => 5,
                'city_sector_name' => 'Al boustane',
                'city_sector_status' => 1,
            ),
            162 =>
            array (
                'id' => 207,
                'city_id' => 5,
                'city_sector_name' => 'Alkalaa',
                'city_sector_status' => 1,
            ),
            163 =>
            array (
                'id' => 208,
                'city_id' => 5,
                'city_sector_name' => 'Alkodia',
                'city_sector_status' => 1,
            ),
            164 =>
            array (
                'id' => 209,
                'city_id' => 5,
                'city_sector_name' => 'Al Qods',
                'city_sector_status' => 1,
            ),
            165 =>
            array (
                'id' => 210,
                'city_id' => 5,
                'city_sector_name' => 'Biranzarane',
                'city_sector_status' => 1,
            ),
            166 =>
            array (
                'id' => 211,
                'city_id' => 5,
                'city_sector_name' => 'Cheminoits',
                'city_sector_status' => 1,
            ),
            167 =>
            array (
                'id' => 212,
                'city_id' => 5,
                'city_sector_name' => 'Cité des cadres',
                'city_sector_status' => 1,
            ),
            168 =>
            array (
                'id' => 213,
                'city_id' => 5,
                'city_sector_name' => 'Cité Portugaise ',
                'city_sector_status' => 1,
            ),
            169 =>
            array (
                'id' => 214,
                'city_id' => 5,
                'city_sector_name' => 'Corniche ',
                'city_sector_status' => 1,
            ),
            170 =>
            array (
                'id' => 215,
                'city_id' => 5,
                'city_sector_name' => 'Dar essalam',
                'city_sector_status' => 1,
            ),
            171 =>
            array (
                'id' => 216,
                'city_id' => 5,
                'city_sector_name' => 'Derb Al hajjar ',
                'city_sector_status' => 1,
            ),
            172 =>
            array (
                'id' => 217,
                'city_id' => 5,
                'city_sector_name' => 'Derb ghalef',
                'city_sector_status' => 1,
            ),
            173 =>
            array (
                'id' => 218,
                'city_id' => 5,
                'city_sector_name' => 'Derb lahona',
                'city_sector_status' => 1,
            ),
            174 =>
            array (
                'id' => 219,
                'city_id' => 5,
                'city_sector_name' => 'Derb sidi daoui',
                'city_sector_status' => 1,
            ),
            175 =>
            array (
                'id' => 220,
                'city_id' => 5,
                'city_sector_name' => 'Ezzohor',
                'city_sector_status' => 1,
            ),
            176 =>
            array (
                'id' => 221,
                'city_id' => 5,
                'city_sector_name' => 'Hay el amal',
                'city_sector_status' => 1,
            ),
            177 =>
            array (
                'id' => 222,
                'city_id' => 5,
                'city_sector_name' => 'Hay essalam ',
                'city_sector_status' => 1,
            ),
            178 =>
            array (
                'id' => 223,
                'city_id' => 5,
                'city_sector_name' => 'Hay nassim ',
                'city_sector_status' => 1,
            ),
            179 =>
            array (
                'id' => 224,
                'city_id' => 5,
                'city_sector_name' => 'Hay riad ',
                'city_sector_status' => 1,
            ),
            180 =>
            array (
                'id' => 225,
                'city_id' => 5,
                'city_sector_name' => 'Jawhara',
                'city_sector_status' => 1,
            ),
            181 =>
            array (
                'id' => 226,
                'city_id' => 5,
                'city_sector_name' => 'Lalla zahra',
                'city_sector_status' => 1,
            ),
            182 =>
            array (
                'id' => 227,
                'city_id' => 5,
                'city_sector_name' => 'Lot rida',
                'city_sector_status' => 1,
            ),
            183 =>
            array (
                'id' => 228,
                'city_id' => 5,
                'city_sector_name' => 'Mouilha',
                'city_sector_status' => 1,
            ),
            184 =>
            array (
                'id' => 229,
                'city_id' => 5,
                'city_sector_name' => 'Najmat al janoub',
                'city_sector_status' => 1,
            ),
            185 =>
            array (
                'id' => 230,
                'city_id' => 5,
                'city_sector_name' => 'Narjis',
                'city_sector_status' => 1,
            ),
            186 =>
            array (
                'id' => 231,
                'city_id' => 5,
                'city_sector_name' => 'Plateau',
                'city_sector_status' => 1,
            ),
            187 =>
            array (
                'id' => 232,
                'city_id' => 5,
                'city_sector_name' => 'Port ',
                'city_sector_status' => 1,
            ),
            188 =>
            array (
                'id' => 233,
                'city_id' => 5,
                'city_sector_name' => 'Quartier Aérodrome',
                'city_sector_status' => 1,
            ),
            189 =>
            array (
                'id' => 234,
                'city_id' => 5,
                'city_sector_name' => 'Autres secteurs.',
                'city_sector_status' => 1,
            ),
            190 =>
            array (
                'id' => 300,
                'city_id' => 7,
                'city_sector_name' => 'Agdal',
                'city_sector_status' => 1,
            ),
            191 =>
            array (
                'id' => 301,
                'city_id' => 7,
                'city_sector_name' => 'Fes medina',
                'city_sector_status' => 1,
            ),
            192 =>
            array (
                'id' => 302,
                'city_id' => 7,
                'city_sector_name' => 'Jnan el ward',
                'city_sector_status' => 1,
            ),
            193 =>
            array (
                'id' => 303,
                'city_id' => 7,
                'city_sector_name' => 'Les merinides',
                'city_sector_status' => 1,
            ),
            194 =>
            array (
                'id' => 304,
                'city_id' => 7,
                'city_sector_name' => 'Saies',
                'city_sector_status' => 1,
            ),
            195 =>
            array (
                'id' => 305,
                'city_id' => 7,
                'city_sector_name' => 'Zouagha',
                'city_sector_status' => 1,
            ),
            196 =>
            array (
                'id' => 306,
                'city_id' => 7,
                'city_sector_name' => 'Ain haroun',
                'city_sector_status' => 1,
            ),
            197 =>
            array (
                'id' => 307,
                'city_id' => 7,
                'city_sector_name' => 'Ancienne Medina',
                'city_sector_status' => 1,
            ),
            198 =>
            array (
                'id' => 308,
                'city_id' => 7,
                'city_sector_name' => 'Ben souda',
                'city_sector_status' => 1,
            ),
            199 =>
            array (
                'id' => 309,
                'city_id' => 7,
                'city_sector_name' => 'Dar dbibagh',
                'city_sector_status' => 1,
            ),
            200 =>
            array (
                'id' => 310,
                'city_id' => 7,
                'city_sector_name' => 'Dar meherez',
                'city_sector_status' => 1,
            ),
            201 =>
            array (
                'id' => 311,
                'city_id' => 7,
                'city_sector_name' => 'Hay saada',
                'city_sector_status' => 1,
            ),
            202 =>
            array (
                'id' => 312,
                'city_id' => 7,
                'city_sector_name' => 'Lyrac',
                'city_sector_status' => 1,
            ),
            203 =>
            array (
                'id' => 313,
                'city_id' => 7,
                'city_sector_name' => 'Mellah',
                'city_sector_status' => 1,
            ),
            204 =>
            array (
                'id' => 314,
                'city_id' => 7,
                'city_sector_name' => 'Mont fleuri',
                'city_sector_status' => 1,
            ),
            205 =>
            array (
                'id' => 315,
                'city_id' => 7,
                'city_sector_name' => 'Moulay Abdllah',
                'city_sector_status' => 1,
            ),
            206 =>
            array (
                'id' => 316,
                'city_id' => 7,
                'city_sector_name' => 'Oued fes',
                'city_sector_status' => 1,
            ),
            207 =>
            array (
                'id' => 317,
                'city_id' => 7,
                'city_sector_name' => 'Place Alaouine',
                'city_sector_status' => 1,
            ),
            208 =>
            array (
                'id' => 318,
                'city_id' => 7,
                'city_sector_name' => 'Talaa',
                'city_sector_status' => 1,
            ),
            209 =>
            array (
                'id' => 319,
                'city_id' => 7,
                'city_sector_name' => 'Route d Imouzzare',
                'city_sector_status' => 1,
            ),
            210 =>
            array (
                'id' => 320,
                'city_id' => 7,
                'city_sector_name' => 'Mont fleuri2 ',
                'city_sector_status' => 1,
            ),
            211 =>
            array (
                'id' => 321,
                'city_id' => 7,
                'city_sector_name' => 'Route d Aeroport',
                'city_sector_status' => 1,
            ),
            212 =>
            array (
                'id' => 322,
                'city_id' => 7,
                'city_sector_name' => 'Ouled Tayeb',
                'city_sector_status' => 1,
            ),
            213 =>
            array (
                'id' => 323,
                'city_id' => 7,
                'city_sector_name' => 'Route de sefrou',
                'city_sector_status' => 1,
            ),
            214 =>
            array (
                'id' => 324,
                'city_id' => 7,
                'city_sector_name' => 'Route ain chkaf',
                'city_sector_status' => 1,
            ),
            215 =>
            array (
                'id' => 325,
                'city_id' => 7,
                'city_sector_name' => 'Narjis',
                'city_sector_status' => 1,
            ),
            216 =>
            array (
                'id' => 326,
                'city_id' => 7,
                'city_sector_name' => 'boutaaa',
                'city_sector_status' => 1,
            ),
            217 =>
            array (
                'id' => 327,
                'city_id' => 7,
                'city_sector_name' => 'El keddan',
                'city_sector_status' => 1,
            ),
            218 =>
            array (
                'id' => 328,
                'city_id' => 7,
                'city_sector_name' => 'El mokhfia',
                'city_sector_status' => 1,
            ),
            219 =>
            array (
                'id' => 329,
                'city_id' => 7,
                'city_sector_name' => 'Laayoune',
                'city_sector_status' => 1,
            ),
            220 =>
            array (
                'id' => 330,
                'city_id' => 7,
                'city_sector_name' => 'kasbat Ennouar',
                'city_sector_status' => 1,
            ),
            221 =>
            array (
                'id' => 331,
                'city_id' => 7,
                'city_sector_name' => 'Rahebet zbib',
                'city_sector_status' => 1,
            ),
            222 =>
            array (
                'id' => 332,
                'city_id' => 7,
                'city_sector_name' => 'Zekak Erroumane',
                'city_sector_status' => 1,
            ),
            223 =>
            array (
                'id' => 333,
                'city_id' => 7,
                'city_sector_name' => 'Bab boujloud',
                'city_sector_status' => 1,
            ),
            224 =>
            array (
                'id' => 334,
                'city_id' => 7,
                'city_sector_name' => 'Batha',
                'city_sector_status' => 1,
            ),
            225 =>
            array (
                'id' => 335,
                'city_id' => 7,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            226 =>
            array (
                'id' => 336,
                'city_id' => 7,
                'city_sector_name' => 'douh',
                'city_sector_status' => 1,
            ),
            227 =>
            array (
                'id' => 337,
                'city_id' => 7,
                'city_sector_name' => 'hamria',
                'city_sector_status' => 1,
            ),
            228 =>
            array (
                'id' => 338,
                'city_id' => 7,
                'city_sector_name' => 'hay atlas',
                'city_sector_status' => 1,
            ),
            229 =>
            array (
                'id' => 339,
                'city_id' => 7,
                'city_sector_name' => 'hay fadela',
                'city_sector_status' => 1,
            ),
            230 =>
            array (
                'id' => 340,
                'city_id' => 7,
                'city_sector_name' => 'hay palestine',
                'city_sector_status' => 1,
            ),
            231 =>
            array (
                'id' => 341,
                'city_id' => 7,
                'city_sector_name' => 'route de meknes',
                'city_sector_status' => 1,
            ),
            232 =>
            array (
                'id' => 342,
                'city_id' => 7,
                'city_sector_name' => 'sidi brahim',
                'city_sector_status' => 1,
            ),
            233 =>
            array (
                'id' => 343,
                'city_id' => 7,
                'city_sector_name' => 'ain noqbi',
                'city_sector_status' => 1,
            ),
            234 =>
            array (
                'id' => 344,
                'city_id' => 7,
                'city_sector_name' => 'jnan eddar ',
                'city_sector_status' => 1,
            ),
            235 =>
            array (
                'id' => 345,
                'city_id' => 7,
                'city_sector_name' => 'ouad bou fekhane',
                'city_sector_status' => 1,
            ),
            236 =>
            array (
                'id' => 346,
                'city_id' => 7,
                'city_sector_name' => 'sehb el ward',
                'city_sector_status' => 1,
            ),
            237 =>
            array (
                'id' => 347,
                'city_id' => 7,
                'city_sector_name' => 'sehrij gnawa',
                'city_sector_status' => 1,
            ),
            238 =>
            array (
                'id' => 348,
                'city_id' => 7,
                'city_sector_name' => 'ain kadous',
                'city_sector_status' => 1,
            ),
            239 =>
            array (
                'id' => 349,
                'city_id' => 7,
                'city_sector_name' => 'al hadiqa',
                'city_sector_status' => 1,
            ),
            240 =>
            array (
                'id' => 350,
                'city_id' => 7,
                'city_sector_name' => 'belkhiat',
                'city_sector_status' => 1,
            ),
            241 =>
            array (
                'id' => 351,
                'city_id' => 7,
                'city_sector_name' => 'ben debbab ',
                'city_sector_status' => 1,
            ),
            242 =>
            array (
                'id' => 352,
                'city_id' => 7,
                'city_sector_name' => 'ben zakour',
                'city_sector_status' => 1,
            ),
            243 =>
            array (
                'id' => 353,
                'city_id' => 7,
                'city_sector_name' => 'dher lkhmiss',
                'city_sector_status' => 1,
            ),
            244 =>
            array (
                'id' => 354,
                'city_id' => 7,
                'city_sector_name' => 'hay agadir',
                'city_sector_status' => 1,
            ),
            245 =>
            array (
                'id' => 355,
                'city_id' => 7,
                'city_sector_name' => 'hay hassani',
                'city_sector_status' => 1,
            ),
            246 =>
            array (
                'id' => 356,
                'city_id' => 7,
                'city_sector_name' => 'hay mohamadi',
                'city_sector_status' => 1,
            ),
            247 =>
            array (
                'id' => 357,
                'city_id' => 7,
                'city_sector_name' => 'hay ouifak',
                'city_sector_status' => 1,
            ),
            248 =>
            array (
                'id' => 358,
                'city_id' => 7,
                'city_sector_name' => 'quartier benslimane ',
                'city_sector_status' => 1,
            ),
            249 =>
            array (
                'id' => 359,
                'city_id' => 7,
                'city_sector_name' => 'tghat',
                'city_sector_status' => 1,
            ),
            250 =>
            array (
                'id' => 360,
                'city_id' => 7,
                'city_sector_name' => 'fes jdida',
                'city_sector_status' => 1,
            ),
            251 =>
            array (
                'id' => 361,
                'city_id' => 7,
                'city_sector_name' => 'hay moulay abdellah',
                'city_sector_status' => 1,
            ),
            252 =>
            array (
                'id' => 362,
                'city_id' => 7,
                'city_sector_name' => 'mechouar',
                'city_sector_status' => 1,
            ),
            253 =>
            array (
                'id' => 363,
                'city_id' => 7,
                'city_sector_name' => 'aaouinat hajjaj ',
                'city_sector_status' => 1,
            ),
            254 =>
            array (
                'id' => 364,
                'city_id' => 7,
                'city_sector_name' => 'ain amiyer ',
                'city_sector_status' => 1,
            ),
            255 =>
            array (
                'id' => 365,
                'city_id' => 7,
                'city_sector_name' => 'mourabitine',
                'city_sector_status' => 1,
            ),
            256 =>
            array (
                'id' => 366,
                'city_id' => 7,
                'city_sector_name' => 'zone industrielle sidi brahim',
                'city_sector_status' => 1,
            ),
            257 =>
            array (
                'id' => 367,
                'city_id' => 7,
                'city_sector_name' => 'autres secteurs',
                'city_sector_status' => 1,
            ),
            258 =>
            array (
                'id' => 400,
                'city_id' => 8,
                'city_sector_name' => 'khanazat',
                'city_sector_status' => 1,
            ),
            259 =>
            array (
                'id' => 401,
                'city_id' => 8,
                'city_sector_name' => 'bir rami',
                'city_sector_status' => 1,
            ),
            260 =>
            array (
                'id' => 402,
                'city_id' => 8,
                'city_sector_name' => 'el haddada',
                'city_sector_status' => 1,
            ),
            261 =>
            array (
                'id' => 403,
                'city_id' => 8,
                'city_sector_name' => 'bir rami industriel',
                'city_sector_status' => 1,
            ),
            262 =>
            array (
                'id' => 404,
                'city_id' => 8,
                'city_sector_name' => 'la cite',
                'city_sector_status' => 1,
            ),
            263 =>
            array (
                'id' => 405,
                'city_id' => 8,
                'city_sector_name' => 'maamora',
                'city_sector_status' => 1,
            ),
            264 =>
            array (
                'id' => 406,
                'city_id' => 8,
                'city_sector_name' => 'ouled oujih',
                'city_sector_status' => 1,
            ),
            265 =>
            array (
                'id' => 407,
                'city_id' => 8,
                'city_sector_name' => 'ain sebaa',
                'city_sector_status' => 1,
            ),
            266 =>
            array (
                'id' => 408,
                'city_id' => 8,
                'city_sector_name' => 'al alama',
                'city_sector_status' => 1,
            ),
            267 =>
            array (
                'id' => 409,
                'city_id' => 8,
                'city_sector_name' => 'al baladya',
                'city_sector_status' => 1,
            ),
            268 =>
            array (
                'id' => 410,
                'city_id' => 8,
                'city_sector_name' => 'almagherib arabi',
                'city_sector_status' => 1,
            ),
            269 =>
            array (
                'id' => 411,
                'city_id' => 8,
                'city_sector_name' => 'bab fes',
                'city_sector_status' => 1,
            ),
            270 =>
            array (
                'id' => 412,
                'city_id' => 8,
                'city_sector_name' => 'bir anzarane',
                'city_sector_status' => 1,
            ),
            271 =>
            array (
                'id' => 413,
                'city_id' => 8,
                'city_sector_name' => 'corcica',
                'city_sector_status' => 1,
            ),
            272 =>
            array (
                'id' => 414,
                'city_id' => 8,
                'city_sector_name' => 'diour 10000',
                'city_sector_status' => 1,
            ),
            273 =>
            array (
                'id' => 415,
                'city_id' => 8,
                'city_sector_name' => 'diour sniak',
                'city_sector_status' => 1,
            ),
            274 =>
            array (
                'id' => 416,
                'city_id' => 8,
                'city_sector_name' => 'El assam',
                'city_sector_status' => 1,
            ),
            275 =>
            array (
                'id' => 417,
                'city_id' => 8,
                'city_sector_name' => 'el haouzia',
                'city_sector_status' => 1,
            ),
            276 =>
            array (
                'id' => 418,
                'city_id' => 8,
                'city_sector_name' => 'el ismailia',
                'city_sector_status' => 1,
            ),
            277 =>
            array (
                'id' => 419,
                'city_id' => 8,
                'city_sector_name' => 'el menzah',
                'city_sector_status' => 1,
            ),
            278 =>
            array (
                'id' => 420,
                'city_id' => 8,
                'city_sector_name' => 'fouarate',
                'city_sector_status' => 1,
            ),
            279 =>
            array (
                'id' => 421,
                'city_id' => 8,
                'city_sector_name' => 'inara',
                'city_sector_status' => 1,
            ),
            280 =>
            array (
                'id' => 422,
                'city_id' => 8,
                'city_sector_name' => 'la base',
                'city_sector_status' => 1,
            ),
            281 =>
            array (
                'id' => 423,
                'city_id' => 8,
                'city_sector_name' => 'la cigogne',
                'city_sector_status' => 1,
            ),
            282 =>
            array (
                'id' => 424,
                'city_id' => 8,
                'city_sector_name' => 'la ville haute',
                'city_sector_status' => 1,
            ),
            283 =>
            array (
                'id' => 425,
                'city_id' => 8,
                'city_sector_name' => 'mellah',
                'city_sector_status' => 1,
            ),
            284 =>
            array (
                'id' => 426,
                'city_id' => 8,
                'city_sector_name' => 'mimosas',
                'city_sector_status' => 1,
            ),
            285 =>
            array (
                'id' => 427,
                'city_id' => 8,
                'city_sector_name' => 'oueld m barek',
                'city_sector_status' => 1,
            ),
            286 =>
            array (
                'id' => 428,
                'city_id' => 8,
                'city_sector_name' => 'Pam',
                'city_sector_status' => 1,
            ),
            287 =>
            array (
                'id' => 429,
                'city_id' => 8,
                'city_sector_name' => 'quartier el fath',
                'city_sector_status' => 1,
            ),
            288 =>
            array (
                'id' => 430,
                'city_id' => 8,
                'city_sector_name' => 'quartier nahda',
                'city_sector_status' => 1,
            ),
            289 =>
            array (
                'id' => 431,
                'city_id' => 8,
                'city_sector_name' => 'seyad',
                'city_sector_status' => 1,
            ),
            290 =>
            array (
                'id' => 432,
                'city_id' => 8,
                'city_sector_name' => 'taïbia',
                'city_sector_status' => 1,
            ),
            291 =>
            array (
                'id' => 433,
                'city_id' => 8,
                'city_sector_name' => 'val fleury',
                'city_sector_status' => 1,
            ),
            292 =>
            array (
                'id' => 434,
                'city_id' => 8,
                'city_sector_name' => 'village',
                'city_sector_status' => 1,
            ),
            293 =>
            array (
                'id' => 435,
                'city_id' => 8,
                'city_sector_name' => 'assam',
                'city_sector_status' => 1,
            ),
            294 =>
            array (
                'id' => 436,
                'city_id' => 8,
                'city_sector_name' => 'bir rami est',
                'city_sector_status' => 1,
            ),
            295 =>
            array (
                'id' => 437,
                'city_id' => 8,
                'city_sector_name' => 'bir rami ouest',
                'city_sector_status' => 1,
            ),
            296 =>
            array (
                'id' => 438,
                'city_id' => 8,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            297 =>
            array (
                'id' => 439,
                'city_id' => 8,
                'city_sector_name' => 'autres secteurs.',
                'city_sector_status' => 1,
            ),
            298 =>
            array (
                'id' => 500,
                'city_id' => 12,
                'city_sector_name' => 'akioud',
                'city_sector_status' => 1,
            ),
            299 =>
            array (
                'id' => 501,
                'city_id' => 12,
                'city_sector_name' => 'amerchich',
                'city_sector_status' => 1,
            ),
            300 =>
            array (
                'id' => 502,
                'city_id' => 12,
                'city_sector_name' => 'annakhil',
                'city_sector_status' => 1,
            ),
            301 =>
            array (
                'id' => 503,
                'city_id' => 12,
                'city_sector_name' => 'bin lkchali',
                'city_sector_status' => 1,
            ),
            302 =>
            array (
                'id' => 504,
                'city_id' => 12,
                'city_sector_name' => 'daoudiate',
                'city_sector_status' => 1,
            ),
            303 =>
            array (
                'id' => 505,
                'city_id' => 12,
                'city_sector_name' => 'es saada',
                'city_sector_status' => 1,
            ),
            304 =>
            array (
                'id' => 506,
                'city_id' => 12,
                'city_sector_name' => 'fassi',
                'city_sector_status' => 1,
            ),
            305 =>
            array (
                'id' => 507,
                'city_id' => 12,
                'city_sector_name' => 'guéliz',
                'city_sector_status' => 1,
            ),
            306 =>
            array (
                'id' => 508,
                'city_id' => 12,
                'city_sector_name' => 'hivernage',
                'city_sector_status' => 1,
            ),
            307 =>
            array (
                'id' => 509,
                'city_id' => 12,
                'city_sector_name' => 'inara',
                'city_sector_status' => 1,
            ),
            308 =>
            array (
                'id' => 510,
                'city_id' => 12,
                'city_sector_name' => 'masmoudi',
                'city_sector_status' => 1,
            ),
            309 =>
            array (
                'id' => 511,
                'city_id' => 12,
                'city_sector_name' => 'massira',
                'city_sector_status' => 1,
            ),
            310 =>
            array (
                'id' => 512,
                'city_id' => 12,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            311 =>
            array (
                'id' => 513,
                'city_id' => 12,
                'city_sector_name' => 'oued ourika',
                'city_sector_status' => 1,
            ),
            312 =>
            array (
                'id' => 514,
                'city_id' => 12,
                'city_sector_name' => 'oued tensift',
                'city_sector_status' => 1,
            ),
            313 =>
            array (
                'id' => 515,
                'city_id' => 12,
                'city_sector_name' => 'oulade said',
                'city_sector_status' => 1,
            ),
            314 =>
            array (
                'id' => 516,
                'city_id' => 12,
                'city_sector_name' => 'palmerie',
                'city_sector_status' => 1,
            ),
            315 =>
            array (
                'id' => 517,
                'city_id' => 12,
                'city_sector_name' => 'sakar',
                'city_sector_status' => 1,
            ),
            316 =>
            array (
                'id' => 518,
                'city_id' => 12,
                'city_sector_name' => 'sidi youssef ben ali',
                'city_sector_status' => 1,
            ),
            317 =>
            array (
                'id' => 519,
                'city_id' => 12,
                'city_sector_name' => 'sofia',
                'city_sector_status' => 1,
            ),
            318 =>
            array (
                'id' => 520,
                'city_id' => 12,
                'city_sector_name' => 'targa',
                'city_sector_status' => 1,
            ),
            319 =>
            array (
                'id' => 521,
                'city_id' => 12,
                'city_sector_name' => 'afaq',
                'city_sector_status' => 1,
            ),
            320 =>
            array (
                'id' => 522,
                'city_id' => 12,
                'city_sector_name' => 'agdal',
                'city_sector_status' => 1,
            ),
            321 =>
            array (
                'id' => 523,
                'city_id' => 12,
                'city_sector_name' => 'allal fassi',
                'city_sector_status' => 1,
            ),
            322 =>
            array (
                'id' => 524,
                'city_id' => 12,
                'city_sector_name' => 'amelkis',
                'city_sector_status' => 1,
            ),
            323 =>
            array (
                'id' => 525,
                'city_id' => 12,
                'city_sector_name' => 'ancienne medina',
                'city_sector_status' => 1,
            ),
            324 =>
            array (
                'id' => 526,
                'city_id' => 12,
                'city_sector_name' => 'assif',
                'city_sector_status' => 1,
            ),
            325 =>
            array (
                'id' => 527,
                'city_id' => 12,
                'city_sector_name' => 'av abdelkrim el khattabi',
                'city_sector_status' => 1,
            ),
            326 =>
            array (
                'id' => 528,
                'city_id' => 12,
                'city_sector_name' => 'av mohamed V',
                'city_sector_status' => 1,
            ),
            327 =>
            array (
                'id' => 529,
                'city_id' => 12,
                'city_sector_name' => 'av mohamed VI',
                'city_sector_status' => 1,
            ),
            328 =>
            array (
                'id' => 530,
                'city_id' => 12,
                'city_sector_name' => 'azli',
                'city_sector_status' => 1,
            ),
            329 =>
            array (
                'id' => 531,
                'city_id' => 12,
                'city_sector_name' => 'azzouzia',
                'city_sector_status' => 1,
            ),
            330 =>
            array (
                'id' => 532,
                'city_id' => 12,
                'city_sector_name' => 'bab atlas',
                'city_sector_status' => 1,
            ),
            331 =>
            array (
                'id' => 533,
                'city_id' => 12,
                'city_sector_name' => 'bab doukkala',
                'city_sector_status' => 1,
            ),
            332 =>
            array (
                'id' => 534,
                'city_id' => 12,
                'city_sector_name' => 'bab el khemis',
                'city_sector_status' => 1,
            ),
            333 =>
            array (
                'id' => 535,
                'city_id' => 12,
                'city_sector_name' => 'bab ighli',
                'city_sector_status' => 1,
            ),
            334 =>
            array (
                'id' => 536,
                'city_id' => 12,
                'city_sector_name' => 'bab moulay abdellah',
                'city_sector_status' => 1,
            ),
            335 =>
            array (
                'id' => 537,
                'city_id' => 12,
                'city_sector_name' => 'el ghoul',
                'city_sector_status' => 1,
            ),
            336 =>
            array (
                'id' => 538,
                'city_id' => 12,
                'city_sector_name' => 'harti',
                'city_sector_status' => 1,
            ),
            337 =>
            array (
                'id' => 539,
                'city_id' => 12,
                'city_sector_name' => 'hay andalous',
                'city_sector_status' => 1,
            ),
            338 =>
            array (
                'id' => 540,
                'city_id' => 12,
                'city_sector_name' => 'hay charaf',
                'city_sector_status' => 1,
            ),
            339 =>
            array (
                'id' => 541,
                'city_id' => 12,
                'city_sector_name' => 'hay izdihar',
                'city_sector_status' => 1,
            ),
            340 =>
            array (
                'id' => 542,
                'city_id' => 12,
                'city_sector_name' => 'hay massira',
                'city_sector_status' => 1,
            ),
            341 =>
            array (
                'id' => 543,
                'city_id' => 12,
                'city_sector_name' => 'hôpital militaire',
                'city_sector_status' => 1,
            ),
            342 =>
            array (
                'id' => 544,
                'city_id' => 12,
                'city_sector_name' => 'issil',
                'city_sector_status' => 1,
            ),
            343 =>
            array (
                'id' => 545,
                'city_id' => 12,
                'city_sector_name' => 'jamaa el fna',
                'city_sector_status' => 1,
            ),
            344 =>
            array (
                'id' => 546,
                'city_id' => 12,
                'city_sector_name' => 'kadissia',
                'city_sector_status' => 1,
            ),
            345 =>
            array (
                'id' => 547,
                'city_id' => 12,
                'city_sector_name' => 'lac takerkoust',
                'city_sector_status' => 1,
            ),
            346 =>
            array (
                'id' => 548,
                'city_id' => 12,
                'city_sector_name' => 'mabrouka',
                'city_sector_status' => 1,
            ),
            347 =>
            array (
                'id' => 549,
                'city_id' => 12,
                'city_sector_name' => 'majorelle',
                'city_sector_status' => 1,
            ),
            348 =>
            array (
                'id' => 550,
                'city_id' => 12,
                'city_sector_name' => 'massar',
                'city_sector_status' => 1,
            ),
            349 =>
            array (
                'id' => 551,
                'city_id' => 12,
                'city_sector_name' => 'massar',
                'city_sector_status' => 1,
            ),
            350 =>
            array (
                'id' => 552,
                'city_id' => 12,
                'city_sector_name' => 'm hamid',
                'city_sector_status' => 1,
            ),
            351 =>
            array (
                'id' => 553,
                'city_id' => 12,
                'city_sector_name' => 'rouidat',
                'city_sector_status' => 1,
            ),
            352 =>
            array (
                'id' => 554,
                'city_id' => 12,
                'city_sector_name' => 'route d amezmiz',
                'city_sector_status' => 1,
            ),
            353 =>
            array (
                'id' => 555,
                'city_id' => 12,
                'city_sector_name' => 'route de casablanca',
                'city_sector_status' => 1,
            ),
            354 =>
            array (
                'id' => 556,
                'city_id' => 12,
                'city_sector_name' => 'route de fes',
                'city_sector_status' => 1,
            ),
            355 =>
            array (
                'id' => 557,
                'city_id' => 12,
                'city_sector_name' => 'route de lala takerkoust',
                'city_sector_status' => 1,
            ),
            356 =>
            array (
                'id' => 558,
                'city_id' => 12,
                'city_sector_name' => 'route de ouarzazate',
                'city_sector_status' => 1,
            ),
            357 =>
            array (
                'id' => 559,
                'city_id' => 12,
                'city_sector_name' => 'route d ourika',
                'city_sector_status' => 1,
            ),
            358 =>
            array (
                'id' => 560,
                'city_id' => 12,
                'city_sector_name' => 'route de safi',
                'city_sector_status' => 1,
            ),
            359 =>
            array (
                'id' => 561,
                'city_id' => 12,
                'city_sector_name' => 'route de sidi Alghiat',
                'city_sector_status' => 1,
            ),
            360 =>
            array (
                'id' => 562,
                'city_id' => 12,
                'city_sector_name' => 'route de tahanaoute',
                'city_sector_status' => 1,
            ),
            361 =>
            array (
                'id' => 563,
                'city_id' => 12,
                'city_sector_name' => 'route de tamansourt',
                'city_sector_status' => 1,
            ),
            362 =>
            array (
                'id' => 564,
                'city_id' => 12,
                'city_sector_name' => 'semlalia',
                'city_sector_status' => 1,
            ),
            363 =>
            array (
                'id' => 565,
                'city_id' => 12,
                'city_sector_name' => 'sidi abbad',
                'city_sector_status' => 1,
            ),
            364 =>
            array (
                'id' => 566,
                'city_id' => 12,
                'city_sector_name' => 'sidi abdellah ghiat',
                'city_sector_status' => 1,
            ),
            365 =>
            array (
                'id' => 567,
                'city_id' => 12,
                'city_sector_name' => 'sidi ghanem',
                'city_sector_status' => 1,
            ),
            366 =>
            array (
                'id' => 568,
                'city_id' => 12,
                'city_sector_name' => 'victor hugo',
                'city_sector_status' => 1,
            ),
            367 =>
            array (
                'id' => 569,
                'city_id' => 12,
                'city_sector_name' => 'beb lhmar',
                'city_sector_status' => 1,
            ),
            368 =>
            array (
                'id' => 570,
                'city_id' => 12,
                'city_sector_name' => 'berrima',
                'city_sector_status' => 1,
            ),
            369 =>
            array (
                'id' => 571,
                'city_id' => 12,
                'city_sector_name' => 'derb chtouka',
                'city_sector_status' => 1,
            ),
            370 =>
            array (
                'id' => 572,
                'city_id' => 12,
                'city_sector_name' => 'jnan laafia',
                'city_sector_status' => 1,
            ),
            371 =>
            array (
                'id' => 573,
                'city_id' => 12,
                'city_sector_name' => 'ksibat nhas',
                'city_sector_status' => 1,
            ),
            372 =>
            array (
                'id' => 574,
                'city_id' => 12,
                'city_sector_name' => 'moulay lyazid',
                'city_sector_status' => 1,
            ),
            373 =>
            array (
                'id' => 575,
                'city_id' => 12,
                'city_sector_name' => 'sidi mansour',
                'city_sector_status' => 1,
            ),
            374 =>
            array (
                'id' => 576,
                'city_id' => 12,
                'city_sector_name' => 'arset ben chebli',
                'city_sector_status' => 1,
            ),
            375 =>
            array (
                'id' => 577,
                'city_id' => 12,
                'city_sector_name' => 'arset el houta',
                'city_sector_status' => 1,
            ),
            376 =>
            array (
                'id' => 578,
                'city_id' => 12,
                'city_sector_name' => 'harset el maach',
                'city_sector_status' => 1,
            ),
            377 =>
            array (
                'id' => 579,
                'city_id' => 12,
                'city_sector_name' => 'arset lhiri',
                'city_sector_status' => 1,
            ),
            378 =>
            array (
                'id' => 580,
                'city_id' => 12,
                'city_sector_name' => 'arset moulat bouaazza',
                'city_sector_status' => 1,
            ),
            379 =>
            array (
                'id' => 581,
                'city_id' => 12,
                'city_sector_name' => 'arset moulay moussa',
                'city_sector_status' => 1,
            ),
            380 =>
            array (
                'id' => 582,
                'city_id' => 12,
                'city_sector_name' => 'assouel',
                'city_sector_status' => 1,
            ),
            381 =>
            array (
                'id' => 583,
                'city_id' => 12,
                'city_sector_name' => 'bab aylan',
                'city_sector_status' => 1,
            ),
            382 =>
            array (
                'id' => 584,
                'city_id' => 12,
                'city_sector_name' => 'bab ghmat',
                'city_sector_status' => 1,
            ),
            383 =>
            array (
                'id' => 585,
                'city_id' => 12,
                'city_sector_name' => 'ben saleh',
                'city_sector_status' => 1,
            ),
            384 =>
            array (
                'id' => 586,
                'city_id' => 12,
                'city_sector_name' => 'el moukef',
                'city_sector_status' => 1,
            ),
            385 =>
            array (
                'id' => 587,
                'city_id' => 12,
                'city_sector_name' => 'essebtiyen',
                'city_sector_status' => 1,
            ),
            386 =>
            array (
                'id' => 588,
                'city_id' => 12,
                'city_sector_name' => 'jnan benchargra',
                'city_sector_status' => 1,
            ),
            387 =>
            array (
                'id' => 589,
                'city_id' => 12,
                'city_sector_name' => 'kaa el machraa',
                'city_sector_status' => 1,
            ),
            388 =>
            array (
                'id' => 590,
                'city_id' => 12,
                'city_sector_name' => 'kaat ben nahid',
                'city_sector_status' => 1,
            ),
            389 =>
            array (
                'id' => 591,
                'city_id' => 12,
                'city_sector_name' => 'kbour chou',
                'city_sector_status' => 1,
            ),
            390 =>
            array (
                'id' => 592,
                'city_id' => 12,
                'city_sector_name' => 'kechich',
                'city_sector_status' => 1,
            ),
            391 =>
            array (
                'id' => 593,
                'city_id' => 12,
                'city_sector_name' => 'kennaria',
                'city_sector_status' => 1,
            ),
            392 =>
            array (
                'id' => 594,
                'city_id' => 12,
                'city_sector_name' => 'mouassime',
                'city_sector_status' => 1,
            ),
            393 =>
            array (
                'id' => 595,
                'city_id' => 12,
                'city_sector_name' => 'rahba kedima',
                'city_sector_status' => 1,
            ),
            394 =>
            array (
                'id' => 596,
                'city_id' => 12,
                'city_sector_name' => 'riad zitoun',
                'city_sector_status' => 1,
            ),
            395 =>
            array (
                'id' => 597,
                'city_id' => 12,
                'city_sector_name' => 'rmila',
                'city_sector_status' => 1,
            ),
            396 =>
            array (
                'id' => 598,
                'city_id' => 12,
                'city_sector_name' => 'sidi ben slimane el jazouli',
                'city_sector_status' => 1,
            ),
            397 =>
            array (
                'id' => 599,
                'city_id' => 12,
                'city_sector_name' => 'sidi bou amar',
                'city_sector_status' => 1,
            ),
            398 =>
            array (
                'id' => 600,
                'city_id' => 12,
                'city_sector_name' => 'sidi mimoun',
                'city_sector_status' => 1,
            ),
            399 =>
            array (
                'id' => 601,
                'city_id' => 12,
                'city_sector_name' => 'zaouia sidi ghalem',
                'city_sector_status' => 1,
            ),
            400 =>
            array (
                'id' => 602,
                'city_id' => 12,
                'city_sector_name' => 'zaouia lahdar',
                'city_sector_status' => 1,
            ),
            401 =>
            array (
                'id' => 603,
                'city_id' => 12,
                'city_sector_name' => 'michouar',
                'city_sector_status' => 1,
            ),
            402 =>
            array (
                'id' => 604,
                'city_id' => 12,
                'city_sector_name' => 'ain mezouar',
                'city_sector_status' => 1,
            ),
            403 =>
            array (
                'id' => 605,
                'city_id' => 12,
                'city_sector_name' => 'bouaakkaz',
                'city_sector_status' => 1,
            ),
            404 =>
            array (
                'id' => 606,
                'city_id' => 12,
                'city_sector_name' => 'hay al bahja',
                'city_sector_status' => 1,
            ),
            405 =>
            array (
                'id' => 607,
                'city_id' => 12,
                'city_sector_name' => 'hay al haouz',
                'city_sector_status' => 1,
            ),
            406 =>
            array (
                'id' => 608,
                'city_id' => 12,
                'city_sector_name' => 'hay al hassani',
                'city_sector_status' => 1,
            ),
            407 =>
            array (
                'id' => 609,
                'city_id' => 12,
                'city_sector_name' => 'hay al massar',
                'city_sector_status' => 1,
            ),
            408 =>
            array (
                'id' => 610,
                'city_id' => 12,
                'city_sector_name' => 'hay annahda',
                'city_sector_status' => 1,
            ),
            409 =>
            array (
                'id' => 611,
                'city_id' => 12,
                'city_sector_name' => 'hay lalla haya',
                'city_sector_status' => 1,
            ),
            410 =>
            array (
                'id' => 612,
                'city_id' => 12,
                'city_sector_name' => 'hay targa',
                'city_sector_status' => 1,
            ),
            411 =>
            array (
                'id' => 613,
                'city_id' => 12,
                'city_sector_name' => 'lziki',
                'city_sector_status' => 1,
            ),
            412 =>
            array (
                'id' => 614,
                'city_id' => 12,
                'city_sector_name' => 'jawhar',
                'city_sector_status' => 1,
            ),
            413 =>
            array (
                'id' => 615,
                'city_id' => 12,
                'city_sector_name' => 'les portes de merrakech',
                'city_sector_status' => 1,
            ),
            414 =>
            array (
                'id' => 616,
                'city_id' => 12,
                'city_sector_name' => 'massira1',
                'city_sector_status' => 1,
            ),
            415 =>
            array (
                'id' => 617,
                'city_id' => 12,
                'city_sector_name' => 'massira2',
                'city_sector_status' => 1,
            ),
            416 =>
            array (
                'id' => 618,
                'city_id' => 12,
                'city_sector_name' => 'massira3',
                'city_sector_status' => 1,
            ),
            417 =>
            array (
                'id' => 619,
                'city_id' => 12,
                'city_sector_name' => 'zone industrielle sidi ghanem',
                'city_sector_status' => 1,
            ),
            418 =>
            array (
                'id' => 620,
                'city_id' => 12,
                'city_sector_name' => 'route agadir essaouira',
                'city_sector_status' => 1,
            ),
            419 =>
            array (
                'id' => 700,
                'city_id' => 13,
                'city_sector_name' => 'ben mohamed',
                'city_sector_status' => 1,
            ),
            420 =>
            array (
                'id' => 701,
                'city_id' => 13,
                'city_sector_name' => 'berrima',
                'city_sector_status' => 1,
            ),
            421 =>
            array (
                'id' => 702,
                'city_id' => 13,
                'city_sector_name' => 'bourj moulay omar',
                'city_sector_status' => 1,
            ),
            422 =>
            array (
                'id' => 703,
                'city_id' => 13,
                'city_sector_name' => 'cité impériale',
                'city_sector_status' => 1,
            ),
            423 =>
            array (
                'id' => 704,
                'city_id' => 13,
                'city_sector_name' => 'dar kebira',
                'city_sector_status' => 1,
            ),
            424 =>
            array (
                'id' => 705,
                'city_id' => 13,
                'city_sector_name' => 'el bassatine',
                'city_sector_status' => 1,
            ),
            425 =>
            array (
                'id' => 706,
                'city_id' => 13,
                'city_sector_name' => 'el mechouar stinia',
                'city_sector_status' => 1,
            ),
            426 =>
            array (
                'id' => 707,
                'city_id' => 13,
                'city_sector_name' => 'kasbat ',
                'city_sector_status' => 1,
            ),
            427 =>
            array (
                'id' => 708,
                'city_id' => 13,
                'city_sector_name' => 'khedrache',
                'city_sector_status' => 1,
            ),
            428 =>
            array (
                'id' => 709,
                'city_id' => 13,
                'city_sector_name' => 'marjane2',
                'city_sector_status' => 1,
            ),
            429 =>
            array (
                'id' => 710,
                'city_id' => 13,
                'city_sector_name' => 'médina',
                'city_sector_status' => 1,
            ),
            430 =>
            array (
                'id' => 711,
                'city_id' => 13,
                'city_sector_name' => 'nouveau mellah',
                'city_sector_status' => 1,
            ),
            431 =>
            array (
                'id' => 712,
                'city_id' => 13,
                'city_sector_name' => 'omar',
                'city_sector_status' => 1,
            ),
            432 =>
            array (
                'id' => 713,
                'city_id' => 13,
                'city_sector_name' => 'riad toulal',
                'city_sector_status' => 1,
            ),
            433 =>
            array (
                'id' => 714,
                'city_id' => 13,
                'city_sector_name' => 'sbata',
                'city_sector_status' => 1,
            ),
            434 =>
            array (
                'id' => 715,
                'city_id' => 13,
                'city_sector_name' => 'sidi amar hassini',
                'city_sector_status' => 1,
            ),
            435 =>
            array (
                'id' => 716,
                'city_id' => 13,
                'city_sector_name' => 'ville nouvelle',
                'city_sector_status' => 1,
            ),
            436 =>
            array (
                'id' => 717,
                'city_id' => 13,
                'city_sector_name' => 'ancienne medina',
                'city_sector_status' => 1,
            ),
            437 =>
            array (
                'id' => 718,
                'city_id' => 13,
                'city_sector_name' => 'belle vue',
                'city_sector_status' => 1,
            ),
            438 =>
            array (
                'id' => 719,
                'city_id' => 13,
                'city_sector_name' => 'hamria',
                'city_sector_status' => 1,
            ),
            439 =>
            array (
                'id' => 720,
                'city_id' => 13,
                'city_sector_name' => 'hay salam',
                'city_sector_status' => 1,
            ),
            440 =>
            array (
                'id' => 721,
                'city_id' => 13,
                'city_sector_name' => 'la hacienda',
                'city_sector_status' => 1,
            ),
            441 =>
            array (
                'id' => 722,
                'city_id' => 13,
                'city_sector_name' => 'rouamzine',
                'city_sector_status' => 1,
            ),
            442 =>
            array (
                'id' => 723,
                'city_id' => 13,
                'city_sector_name' => 'sidi bouzekri',
                'city_sector_status' => 1,
            ),
            443 =>
            array (
                'id' => 724,
                'city_id' => 13,
                'city_sector_name' => 'sidi said',
                'city_sector_status' => 1,
            ),
            444 =>
            array (
                'id' => 725,
                'city_id' => 13,
                'city_sector_name' => 'wislane',
                'city_sector_status' => 1,
            ),
            445 =>
            array (
                'id' => 726,
                'city_id' => 13,
                'city_sector_name' => 'zerhounia',
                'city_sector_status' => 1,
            ),
            446 =>
            array (
                'id' => 727,
                'city_id' => 13,
                'city_sector_name' => 'zitoune',
                'city_sector_status' => 1,
            ),
            447 =>
            array (
                'id' => 728,
                'city_id' => 13,
                'city_sector_name' => 'autres secteurs',
                'city_sector_status' => 1,
            ),
            448 =>
            array (
                'id' => 800,
                'city_id' => 14,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            449 =>
            array (
                'id' => 801,
                'city_id' => 14,
                'city_sector_name' => 'al boustane',
                'city_sector_status' => 1,
            ),
            450 =>
            array (
                'id' => 802,
                'city_id' => 14,
                'city_sector_name' => 'hay matar',
                'city_sector_status' => 1,
            ),
            451 =>
            array (
                'id' => 803,
                'city_id' => 14,
                'city_sector_name' => 'ouled lahcen',
                'city_sector_status' => 1,
            ),
            452 =>
            array (
                'id' => 804,
                'city_id' => 14,
                'city_sector_name' => 'aarid',
                'city_sector_status' => 1,
            ),
            453 =>
            array (
                'id' => 805,
                'city_id' => 14,
                'city_sector_name' => 'al araoui',
                'city_sector_status' => 1,
            ),
            454 =>
            array (
                'id' => 806,
                'city_id' => 14,
                'city_sector_name' => 'barakia',
                'city_sector_status' => 1,
            ),
            455 =>
            array (
                'id' => 807,
                'city_id' => 14,
                'city_sector_name' => 'bouarourou',
                'city_sector_status' => 1,
            ),
            456 =>
            array (
                'id' => 808,
                'city_id' => 14,
                'city_sector_name' => 'bouchouaf',
                'city_sector_status' => 1,
            ),
            457 =>
            array (
                'id' => 809,
                'city_id' => 14,
                'city_sector_name' => 'chaala',
                'city_sector_status' => 1,
            ),
            458 =>
            array (
                'id' => 810,
                'city_id' => 14,
                'city_sector_name' => 'el khattabi',
                'city_sector_status' => 1,
            ),
            459 =>
            array (
                'id' => 811,
                'city_id' => 14,
                'city_sector_name' => 'el kindi',
                'city_sector_status' => 1,
            ),
            460 =>
            array (
                'id' => 812,
                'city_id' => 14,
                'city_sector_name' => 'hay el askari',
                'city_sector_status' => 1,
            ),
            461 =>
            array (
                'id' => 813,
                'city_id' => 14,
                'city_sector_name' => 'hay el idori',
                'city_sector_status' => 1,
            ),
            462 =>
            array (
                'id' => 814,
                'city_id' => 14,
                'city_sector_name' => 'hay el madani',
                'city_sector_status' => 1,
            ),
            463 =>
            array (
                'id' => 815,
                'city_id' => 14,
                'city_sector_name' => 'hay el matar',
                'city_sector_status' => 1,
            ),
            464 =>
            array (
                'id' => 816,
                'city_id' => 14,
                'city_sector_name' => 'ichoumay ',
                'city_sector_status' => 1,
            ),
            465 =>
            array (
                'id' => 817,
                'city_id' => 14,
                'city_sector_name' => 'igounaf ',
                'city_sector_status' => 1,
            ),
            466 =>
            array (
                'id' => 818,
                'city_id' => 14,
                'city_sector_name' => 'issabanen',
                'city_sector_status' => 1,
            ),
            467 =>
            array (
                'id' => 819,
                'city_id' => 14,
                'city_sector_name' => 'laarassi',
                'city_sector_status' => 1,
            ),
            468 =>
            array (
                'id' => 820,
                'city_id' => 14,
                'city_sector_name' => 'laari cheikh',
                'city_sector_status' => 1,
            ),
            469 =>
            array (
                'id' => 821,
                'city_id' => 14,
                'city_sector_name' => 'ouled boutaib',
                'city_sector_status' => 1,
            ),
            470 =>
            array (
                'id' => 822,
                'city_id' => 14,
                'city_sector_name' => 'ouled brahim',
                'city_sector_status' => 1,
            ),
            471 =>
            array (
                'id' => 823,
                'city_id' => 14,
                'city_sector_name' => 'ouled mimoun',
                'city_sector_status' => 1,
            ),
            472 =>
            array (
                'id' => 824,
                'city_id' => 14,
                'city_sector_name' => 'ouled tayeb',
                'city_sector_status' => 1,
            ),
            473 =>
            array (
                'id' => 825,
                'city_id' => 14,
                'city_sector_name' => 'rigo laris',
                'city_sector_status' => 1,
            ),
            474 =>
            array (
                'id' => 826,
                'city_id' => 14,
                'city_sector_name' => 'sidi ali',
                'city_sector_status' => 1,
            ),
            475 =>
            array (
                'id' => 827,
                'city_id' => 14,
                'city_sector_name' => 'tirakaa',
                'city_sector_status' => 1,
            ),
            476 =>
            array (
                'id' => 828,
                'city_id' => 14,
                'city_sector_name' => 'tizighine',
                'city_sector_status' => 1,
            ),
            477 =>
            array (
                'id' => 900,
                'city_id' => 16,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            478 =>
            array (
                'id' => 901,
                'city_id' => 16,
                'city_sector_name' => 'Bd Jaych tahrir',
                'city_sector_status' => 1,
            ),
            479 =>
            array (
                'id' => 902,
                'city_id' => 16,
                'city_sector_name' => 'CGI',
                'city_sector_status' => 1,
            ),
            480 =>
            array (
                'id' => 903,
                'city_id' => 16,
                'city_sector_name' => 'hay el andalous',
                'city_sector_status' => 1,
            ),
            481 =>
            array (
                'id' => 904,
                'city_id' => 16,
                'city_sector_name' => 'hay el hikma ',
                'city_sector_status' => 1,
            ),
            482 =>
            array (
                'id' => 905,
                'city_id' => 16,
                'city_sector_name' => 'hay el qods',
                'city_sector_status' => 1,
            ),
            483 =>
            array (
                'id' => 906,
                'city_id' => 16,
                'city_sector_name' => 'hay lazaret hay salam',
                'city_sector_status' => 1,
            ),
            484 =>
            array (
                'id' => 907,
                'city_id' => 16,
                'city_sector_name' => 'hay takkadom',
                'city_sector_status' => 1,
            ),
            485 =>
            array (
                'id' => 908,
                'city_id' => 16,
                'city_sector_name' => 'iris',
                'city_sector_status' => 1,
            ),
            486 =>
            array (
                'id' => 909,
                'city_id' => 16,
                'city_sector_name' => 'route jerada',
                'city_sector_status' => 1,
            ),
            487 =>
            array (
                'id' => 910,
                'city_id' => 16,
                'city_sector_name' => 'agdal',
                'city_sector_status' => 1,
            ),
            488 =>
            array (
                'id' => 911,
                'city_id' => 16,
                'city_sector_name' => 'ancienne medina',
                'city_sector_status' => 1,
            ),
            489 =>
            array (
                'id' => 912,
                'city_id' => 16,
                'city_sector_name' => 'andalous',
                'city_sector_status' => 1,
            ),
            490 =>
            array (
                'id' => 913,
                'city_id' => 16,
                'city_sector_name' => 'Bd allal el fassi',
                'city_sector_status' => 1,
            ),
            491 =>
            array (
                'id' => 914,
                'city_id' => 16,
                'city_sector_name' => 'Bd derfoufi',
                'city_sector_status' => 1,
            ),
            492 =>
            array (
                'id' => 915,
                'city_id' => 16,
                'city_sector_name' => 'Bd hassan II ',
                'city_sector_status' => 1,
            ),
            493 =>
            array (
                'id' => 916,
                'city_id' => 16,
                'city_sector_name' => 'Boustane',
                'city_sector_status' => 1,
            ),
            494 =>
            array (
                'id' => 917,
                'city_id' => 16,
                'city_sector_name' => 'El firdaws',
                'city_sector_status' => 1,
            ),
            495 =>
            array (
                'id' => 918,
                'city_id' => 16,
                'city_sector_name' => 'Grand boulevard ahfir',
                'city_sector_status' => 1,
            ),
            496 =>
            array (
                'id' => 919,
                'city_id' => 16,
                'city_sector_name' => 'Hay boudir',
                'city_sector_status' => 1,
            ),
            497 =>
            array (
                'id' => 920,
                'city_id' => 16,
                'city_sector_name' => 'Hay ennasr',
                'city_sector_status' => 1,
            ),
            498 =>
            array (
                'id' => 921,
                'city_id' => 16,
                'city_sector_name' => 'Hay fath',
                'city_sector_status' => 1,
            ),
            499 =>
            array (
                'id' => 922,
                'city_id' => 16,
                'city_sector_name' => 'hay massira',
                'city_sector_status' => 1,
            ),
        ));
        \DB::table('city_sectors')->insert(array (
            0 =>
            array (
                'id' => 923,
                'city_id' => 16,
                'city_sector_name' => 'hay zitoune',
                'city_sector_status' => 1,
            ),
            1 =>
            array (
                'id' => 924,
                'city_id' => 16,
                'city_sector_name' => 'hikma I',
                'city_sector_status' => 1,
            ),
            2 =>
            array (
                'id' => 925,
                'city_id' => 16,
                'city_sector_name' => 'hikma II',
                'city_sector_status' => 1,
            ),
            3 =>
            array (
                'id' => 926,
                'city_id' => 16,
                'city_sector_name' => 'jawhara',
                'city_sector_status' => 1,
            ),
            4 =>
            array (
                'id' => 927,
                'city_id' => 16,
                'city_sector_name' => 'nahda',
                'city_sector_status' => 1,
            ),
            5 =>
            array (
                'id' => 928,
                'city_id' => 16,
                'city_sector_name' => 'najd',
                'city_sector_status' => 1,
            ),
            6 =>
            array (
                'id' => 929,
                'city_id' => 16,
                'city_sector_name' => 'Nour',
                'city_sector_status' => 1,
            ),
            7 =>
            array (
                'id' => 930,
                'city_id' => 16,
                'city_sector_name' => 'Park',
                'city_sector_status' => 1,
            ),
            8 =>
            array (
                'id' => 931,
                'city_id' => 16,
                'city_sector_name' => 'Riad isli',
                'city_sector_status' => 1,
            ),
            9 =>
            array (
                'id' => 932,
                'city_id' => 16,
                'city_sector_name' => 'route tayret',
                'city_sector_status' => 1,
            ),
            10 =>
            array (
                'id' => 933,
                'city_id' => 16,
                'city_sector_name' => 'sidi yahya',
                'city_sector_status' => 1,
            ),
            11 =>
            array (
                'id' => 1000,
                'city_id' => 17,
                'city_sector_name' => 'aakkari',
                'city_sector_status' => 1,
            ),
            12 =>
            array (
                'id' => 1001,
                'city_id' => 17,
                'city_sector_name' => 'agdal',
                'city_sector_status' => 1,
            ),
            13 =>
            array (
                'id' => 1002,
                'city_id' => 17,
                'city_sector_name' => 'aviation',
                'city_sector_status' => 1,
            ),
            14 =>
            array (
                'id' => 1003,
                'city_id' => 17,
                'city_sector_name' => 'diour jamaa',
                'city_sector_status' => 1,
            ),
            15 =>
            array (
                'id' => 1004,
                'city_id' => 17,
                'city_sector_name' => 'douar el hajja',
                'city_sector_status' => 1,
            ),
            16 =>
            array (
                'id' => 1005,
                'city_id' => 17,
                'city_sector_name' => 'hassan',
                'city_sector_status' => 1,
            ),
            17 =>
            array (
                'id' => 1006,
                'city_id' => 17,
                'city_sector_name' => 'hay el fath',
                'city_sector_status' => 1,
            ),
            18 =>
            array (
                'id' => 1007,
                'city_id' => 17,
                'city_sector_name' => 'hay nahda',
                'city_sector_status' => 1,
            ),
            19 =>
            array (
                'id' => 1008,
                'city_id' => 17,
                'city_sector_name' => 'hay riad',
                'city_sector_status' => 1,
            ),
            20 =>
            array (
                'id' => 1009,
                'city_id' => 17,
                'city_sector_name' => 'les ambassadeurs',
                'city_sector_status' => 1,
            ),
            21 =>
            array (
                'id' => 1010,
                'city_id' => 17,
                'city_sector_name' => 'les orangers',
                'city_sector_status' => 1,
            ),
            22 =>
            array (
                'id' => 1011,
                'city_id' => 17,
                'city_sector_name' => 'les oudayas',
                'city_sector_status' => 1,
            ),
            23 =>
            array (
                'id' => 1012,
                'city_id' => 17,
                'city_sector_name' => 'mabella',
                'city_sector_status' => 1,
            ),
            24 =>
            array (
                'id' => 1013,
                'city_id' => 17,
                'city_sector_name' => 'massira',
                'city_sector_status' => 1,
            ),
            25 =>
            array (
                'id' => 1014,
                'city_id' => 17,
                'city_sector_name' => 'medina de rabat',
                'city_sector_status' => 1,
            ),
            26 =>
            array (
                'id' => 1015,
                'city_id' => 17,
                'city_sector_name' => 'souissi',
                'city_sector_status' => 1,
            ),
            27 =>
            array (
                'id' => 1016,
                'city_id' => 17,
                'city_sector_name' => 'taqaddom',
                'city_sector_status' => 1,
            ),
            28 =>
            array (
                'id' => 1017,
                'city_id' => 17,
                'city_sector_name' => 'yacoub el mansour',
                'city_sector_status' => 1,
            ),
            29 =>
            array (
                'id' => 1018,
                'city_id' => 17,
                'city_sector_name' => 'youssoufia',
                'city_sector_status' => 1,
            ),
            30 =>
            array (
                'id' => 1019,
                'city_id' => 17,
                'city_sector_name' => 'Quartier de l ocean',
                'city_sector_status' => 1,
            ),
            31 =>
            array (
                'id' => 1020,
                'city_id' => 17,
                'city_sector_name' => 'al irfane',
                'city_sector_status' => 1,
            ),
            32 =>
            array (
                'id' => 1021,
                'city_id' => 17,
                'city_sector_name' => 'guich oudaya',
                'city_sector_status' => 1,
            ),
            33 =>
            array (
                'id' => 1022,
                'city_id' => 17,
                'city_sector_name' => 'haut agdal',
                'city_sector_status' => 1,
            ),
            34 =>
            array (
                'id' => 1023,
                'city_id' => 17,
                'city_sector_name' => 'riyad',
                'city_sector_status' => 1,
            ),
            35 =>
            array (
                'id' => 1024,
                'city_id' => 17,
                'city_sector_name' => 'riad extension',
                'city_sector_status' => 1,
            ),
            36 =>
            array (
                'id' => 1025,
                'city_id' => 17,
                'city_sector_name' => 'abi ragrag',
                'city_sector_status' => 1,
            ),
            37 =>
            array (
                'id' => 1026,
                'city_id' => 17,
                'city_sector_name' => 'aviation-mabella',
                'city_sector_status' => 1,
            ),
            38 =>
            array (
                'id' => 1027,
                'city_id' => 17,
                'city_sector_name' => 'el youssoufia',
                'city_sector_status' => 1,
            ),
            39 =>
            array (
                'id' => 1028,
                'city_id' => 17,
                'city_sector_name' => 'Hay el farah',
                'city_sector_status' => 1,
            ),
            40 =>
            array (
                'id' => 1029,
                'city_id' => 17,
                'city_sector_name' => 'hay arrachad',
                'city_sector_status' => 1,
            ),
            41 =>
            array (
                'id' => 1030,
                'city_id' => 17,
                'city_sector_name' => 'Mechouar',
                'city_sector_status' => 1,
            ),
            42 =>
            array (
                'id' => 11000,
                'city_id' => 18,
                'city_sector_name' => 'lalla hnia hamria',
                'city_sector_status' => 1,
            ),
            43 =>
            array (
                'id' => 11001,
                'city_id' => 18,
                'city_sector_name' => 'ville nouvelle',
                'city_sector_status' => 1,
            ),
            44 =>
            array (
                'id' => 11002,
                'city_id' => 18,
                'city_sector_name' => 'achbar',
                'city_sector_status' => 1,
            ),
            45 =>
            array (
                'id' => 11003,
                'city_id' => 18,
                'city_sector_name' => 'azib derai',
                'city_sector_status' => 1,
            ),
            46 =>
            array (
                'id' => 11004,
                'city_id' => 18,
                'city_sector_name' => 'bahia',
                'city_sector_status' => 1,
            ),
            47 =>
            array (
                'id' => 11005,
                'city_id' => 18,
                'city_sector_name' => 'biar',
                'city_sector_status' => 1,
            ),
            48 =>
            array (
                'id' => 11006,
                'city_id' => 18,
                'city_sector_name' => 'biyada',
                'city_sector_status' => 1,
            ),
            49 =>
            array (
                'id' => 11007,
                'city_id' => 18,
                'city_sector_name' => 'bled eljed',
                'city_sector_status' => 1,
            ),
            50 =>
            array (
                'id' => 11008,
                'city_id' => 18,
                'city_sector_name' => 'chenguite',
                'city_sector_status' => 1,
            ),
            51 =>
            array (
                'id' => 11009,
                'city_id' => 18,
                'city_sector_name' => 'darb lfarrane',
                'city_sector_status' => 1,
            ),
            52 =>
            array (
                'id' => 11010,
                'city_id' => 18,
                'city_sector_name' => 'darb moulay hassan',
                'city_sector_status' => 1,
            ),
            53 =>
            array (
                'id' => 11011,
                'city_id' => 18,
                'city_sector_name' => 'driba lamziwka',
                'city_sector_status' => 1,
            ),
            54 =>
            array (
                'id' => 11012,
                'city_id' => 18,
                'city_sector_name' => 'El massira',
                'city_sector_status' => 1,
            ),
            55 =>
            array (
                'id' => 11013,
                'city_id' => 18,
                'city_sector_name' => 'el massira boukalli',
                'city_sector_status' => 1,
            ),
            56 =>
            array (
                'id' => 11014,
                'city_id' => 18,
                'city_sector_name' => 'el matar',
                'city_sector_status' => 1,
            ),
            57 =>
            array (
                'id' => 11015,
                'city_id' => 18,
                'city_sector_name' => 'hay anas',
                'city_sector_status' => 1,
            ),
            58 =>
            array (
                'id' => 11016,
                'city_id' => 18,
                'city_sector_name' => 'hay el bouwab',
                'city_sector_status' => 1,
            ),
            59 =>
            array (
                'id' => 11017,
                'city_id' => 18,
                'city_sector_name' => 'hay el majd',
                'city_sector_status' => 1,
            ),
            60 =>
            array (
                'id' => 11018,
                'city_id' => 18,
                'city_sector_name' => 'hay essaâda',
                'city_sector_status' => 1,
            ),
            61 =>
            array (
                'id' => 11019,
                'city_id' => 18,
                'city_sector_name' => 'hay oued el bacha',
                'city_sector_status' => 1,
            ),
            62 =>
            array (
                'id' => 11020,
                'city_id' => 18,
                'city_sector_name' => 'hay riyad',
                'city_sector_status' => 1,
            ),
            63 =>
            array (
                'id' => 11021,
                'city_id' => 18,
                'city_sector_name' => 'hay sanyat zine el abidine',
                'city_sector_status' => 1,
            ),
            64 =>
            array (
                'id' => 11022,
                'city_id' => 18,
                'city_sector_name' => 'hay sinaai',
                'city_sector_status' => 1,
            ),
            65 =>
            array (
                'id' => 11023,
                'city_id' => 18,
                'city_sector_name' => 'hay essalam',
                'city_sector_status' => 1,
            ),
            66 =>
            array (
                'id' => 11024,
                'city_id' => 18,
                'city_sector_name' => 'hrayat albayde',
                'city_sector_status' => 1,
            ),
            67 =>
            array (
                'id' => 11025,
                'city_id' => 18,
                'city_sector_name' => 'Ijennane',
                'city_sector_status' => 1,
            ),
            68 =>
            array (
                'id' => 11026,
                'city_id' => 18,
                'city_sector_name' => 'jawhara',
                'city_sector_status' => 1,
            ),
            69 =>
            array (
                'id' => 11027,
                'city_id' => 18,
                'city_sector_name' => 'jerifat',
                'city_sector_status' => 1,
            ),
            70 =>
            array (
                'id' => 11028,
                'city_id' => 18,
                'city_sector_name' => 'jnan choukri',
                'city_sector_status' => 1,
            ),
            71 =>
            array (
                'id' => 11029,
                'city_id' => 18,
                'city_sector_name' => 'jnane colonne1 et 2',
                'city_sector_status' => 1,
            ),
            72 =>
            array (
                'id' => 11030,
                'city_id' => 18,
                'city_sector_name' => 'jnan el mestari',
                'city_sector_status' => 1,
            ),
            73 =>
            array (
                'id' => 11031,
                'city_id' => 18,
                'city_sector_name' => 'jnane illane',
                'city_sector_status' => 1,
            ),
            74 =>
            array (
                'id' => 11032,
                'city_id' => 18,
                'city_sector_name' => 'jnane zitoune',
                'city_sector_status' => 1,
            ),
            75 =>
            array (
                'id' => 11033,
                'city_id' => 18,
                'city_sector_name' => 'karyat ech chams',
                'city_sector_status' => 1,
            ),
            76 =>
            array (
                'id' => 11034,
                'city_id' => 18,
                'city_sector_name' => 'kawki',
                'city_sector_status' => 1,
            ),
            77 =>
            array (
                'id' => 11035,
                'city_id' => 18,
                'city_sector_name' => 'koudia al baida',
                'city_sector_status' => 1,
            ),
            78 =>
            array (
                'id' => 11036,
                'city_id' => 18,
                'city_sector_name' => 'LABC',
                'city_sector_status' => 1,
            ),
            79 =>
            array (
                'id' => 11037,
                'city_id' => 18,
                'city_sector_name' => 'lamiaa',
                'city_sector_status' => 1,
            ),
            80 =>
            array (
                'id' => 11038,
                'city_id' => 18,
                'city_sector_name' => 'les courses ',
                'city_sector_status' => 1,
            ),
            81 =>
            array (
                'id' => 11039,
                'city_id' => 18,
                'city_sector_name' => 'lkliaa',
                'city_sector_status' => 1,
            ),
            82 =>
            array (
                'id' => 11040,
                'city_id' => 18,
                'city_sector_name' => ' ancienne medina',
                'city_sector_status' => 1,
            ),
            83 =>
            array (
                'id' => 11041,
                'city_id' => 18,
                'city_sector_name' => 'miftah el kheir',
                'city_sector_status' => 1,
            ),
            84 =>
            array (
                'id' => 11042,
                'city_id' => 18,
                'city_sector_name' => 'mouna',
                'city_sector_status' => 1,
            ),
            85 =>
            array (
                'id' => 11043,
                'city_id' => 18,
                'city_sector_name' => 'nahda',
                'city_sector_status' => 1,
            ),
            86 =>
            array (
                'id' => 11044,
                'city_id' => 18,
                'city_sector_name' => 'ourida 1 et 2',
                'city_sector_status' => 1,
            ),
            87 =>
            array (
                'id' => 11045,
                'city_id' => 18,
                'city_sector_name' => 'plateau',
                'city_sector_status' => 1,
            ),
            88 =>
            array (
                'id' => 11046,
                'city_id' => 18,
                'city_sector_name' => 'rhat A rih',
                'city_sector_status' => 1,
            ),
            89 =>
            array (
                'id' => 11047,
                'city_id' => 18,
                'city_sector_name' => 'safi1',
                'city_sector_status' => 1,
            ),
            90 =>
            array (
                'id' => 11048,
                'city_id' => 18,
                'city_sector_name' => 'safi2',
                'city_sector_status' => 1,
            ),
            91 =>
            array (
                'id' => 11049,
                'city_id' => 18,
                'city_sector_name' => 'safi 3',
                'city_sector_status' => 1,
            ),
            92 =>
            array (
                'id' => 11050,
                'city_id' => 18,
                'city_sector_name' => 'safiya',
                'city_sector_status' => 1,
            ),
            93 =>
            array (
                'id' => 11051,
                'city_id' => 18,
                'city_sector_name' => 'saâida 1 et 2 ',
                'city_sector_status' => 1,
            ),
            94 =>
            array (
                'id' => 11052,
                'city_id' => 18,
                'city_sector_name' => 'sidi abdelkrim',
                'city_sector_status' => 1,
            ),
            95 =>
            array (
                'id' => 11053,
                'city_id' => 18,
                'city_sector_name' => 'sidi bouzid ',
                'city_sector_status' => 1,
            ),
            96 =>
            array (
                'id' => 11054,
                'city_id' => 18,
                'city_sector_name' => 'swinia',
                'city_sector_status' => 1,
            ),
            97 =>
            array (
                'id' => 11055,
                'city_id' => 18,
                'city_sector_name' => 'trab assini',
                'city_sector_status' => 1,
            ),
            98 =>
            array (
                'id' => 11056,
                'city_id' => 18,
                'city_sector_name' => 'wad el bacha',
                'city_sector_status' => 1,
            ),
            99 =>
            array (
                'id' => 11057,
                'city_id' => 18,
                'city_sector_name' => 'zawiyat sidi wassel',
                'city_sector_status' => 1,
            ),
            100 =>
            array (
                'id' => 12000,
                'city_id' => 19,
                'city_sector_name' => 'toute la ville',
                'city_sector_status' => 1,
            ),
            101 =>
            array (
                'id' => 12001,
                'city_id' => 19,
                'city_sector_name' => 'ahbas',
                'city_sector_status' => 1,
            ),
            102 =>
            array (
                'id' => 12002,
                'city_id' => 19,
                'city_sector_name' => 'alouane',
                'city_sector_status' => 1,
            ),
            103 =>
            array (
                'id' => 12003,
                'city_id' => 19,
                'city_sector_name' => 'hay al kamal',
                'city_sector_status' => 1,
            ),
            104 =>
            array (
                'id' => 12004,
                'city_id' => 19,
                'city_sector_name' => 'hay kassam',
                'city_sector_status' => 1,
            ),
            105 =>
            array (
                'id' => 12005,
                'city_id' => 19,
                'city_sector_name' => 'hay kilz',
                'city_sector_status' => 1,
            ),
            106 =>
            array (
                'id' => 12006,
                'city_id' => 19,
                'city_sector_name' => 'hay mabrouka',
                'city_sector_status' => 1,
            ),
            107 =>
            array (
                'id' => 12007,
                'city_id' => 19,
                'city_sector_name' => 'hay mimouna',
                'city_sector_status' => 1,
            ),
            108 =>
            array (
                'id' => 12008,
                'city_id' => 19,
                'city_sector_name' => 'hay salam',
                'city_sector_status' => 1,
            ),
            109 =>
            array (
                'id' => 12009,
                'city_id' => 19,
                'city_sector_name' => 'hensali',
                'city_sector_status' => 1,
            ),
            110 =>
            array (
                'id' => 12010,
                'city_id' => 19,
                'city_sector_name' => 'mania',
                'city_sector_status' => 1,
            ),
            111 =>
            array (
                'id' => 12011,
                'city_id' => 19,
                'city_sector_name' => 'sidi abdelkarim',
                'city_sector_status' => 1,
            ),
            112 =>
            array (
                'id' => 12012,
                'city_id' => 19,
                'city_sector_name' => 'smaâla',
                'city_sector_status' => 1,
            ),
            113 =>
            array (
                'id' => 12013,
                'city_id' => 19,
                'city_sector_name' => 'tahiri',
                'city_sector_status' => 1,
            ),
            114 =>
            array (
                'id' => 12014,
                'city_id' => 19,
                'city_sector_name' => 'tanmiya',
                'city_sector_status' => 1,
            ),
            115 =>
            array (
                'id' => 13000,
                'city_id' => 20,
                'city_sector_name' => 'toute la ville',
                'city_sector_status' => 1,
            ),
            116 =>
            array (
                'id' => 13001,
                'city_id' => 20,
                'city_sector_name' => 'bab al bahr',
                'city_sector_status' => 1,
            ),
            117 =>
            array (
                'id' => 13002,
                'city_id' => 20,
                'city_sector_name' => 'bab sebta',
                'city_sector_status' => 1,
            ),
            118 =>
            array (
                'id' => 13003,
                'city_id' => 20,
                'city_sector_name' => 'cherkaoui-marzouka',
                'city_sector_status' => 1,
            ),
            119 =>
            array (
                'id' => 13004,
                'city_id' => 20,
                'city_sector_name' => 'ghrablia ',
                'city_sector_status' => 1,
            ),
            120 =>
            array (
                'id' => 13005,
                'city_id' => 20,
                'city_sector_name' => 'hay chmaou',
                'city_sector_status' => 1,
            ),
            121 =>
            array (
                'id' => 13006,
                'city_id' => 20,
                'city_sector_name' => 'medina',
                'city_sector_status' => 1,
            ),
            122 =>
            array (
                'id' => 13007,
                'city_id' => 20,
                'city_sector_name' => 'mkinssia',
                'city_sector_status' => 1,
            ),
            123 =>
            array (
                'id' => 13008,
                'city_id' => 20,
                'city_sector_name' => 'ouled moussa',
                'city_sector_status' => 1,
            ),
            124 =>
            array (
                'id' => 13009,
                'city_id' => 20,
                'city_sector_name' => 'sidi hajji',
                'city_sector_status' => 1,
            ),
            125 =>
            array (
                'id' => 13010,
                'city_id' => 20,
                'city_sector_name' => 'zone industrielle saniat sbihi',
                'city_sector_status' => 1,
            ),
            126 =>
            array (
                'id' => 13011,
                'city_id' => 20,
                'city_sector_name' => 'bettana',
                'city_sector_status' => 1,
            ),
            127 =>
            array (
                'id' => 13012,
                'city_id' => 20,
                'city_sector_name' => 'hay moulay smail',
                'city_sector_status' => 1,
            ),
            128 =>
            array (
                'id' => 13013,
                'city_id' => 20,
                'city_sector_name' => 'hay salam',
                'city_sector_status' => 1,
            ),
            129 =>
            array (
                'id' => 13014,
                'city_id' => 20,
                'city_sector_name' => 'kharouba',
                'city_sector_status' => 1,
            ),
            130 =>
            array (
                'id' => 13015,
                'city_id' => 20,
                'city_sector_name' => 'lakhmis',
                'city_sector_status' => 1,
            ),
            131 =>
            array (
                'id' => 13016,
                'city_id' => 20,
                'city_sector_name' => 'lharya',
                'city_sector_status' => 1,
            ),
            132 =>
            array (
                'id' => 13017,
                'city_id' => 20,
                'city_sector_name' => 'el qaria',
                'city_sector_status' => 1,
            ),
            133 =>
            array (
                'id' => 13018,
                'city_id' => 20,
                'city_sector_name' => 'sala el jadida',
                'city_sector_status' => 1,
            ),
            134 =>
            array (
                'id' => 13019,
                'city_id' => 20,
                'city_sector_name' => 'technopolis',
                'city_sector_status' => 1,
            ),
            135 =>
            array (
                'id' => 13020,
                'city_id' => 20,
                'city_sector_name' => 'abouab sala',
                'city_sector_status' => 1,
            ),
            136 =>
            array (
                'id' => 13021,
                'city_id' => 20,
                'city_sector_name' => 'cité militaire',
                'city_sector_status' => 1,
            ),
            137 =>
            array (
                'id' => 13022,
                'city_id' => 20,
                'city_sector_name' => 'hay Inbiat',
                'city_sector_status' => 1,
            ),
            138 =>
            array (
                'id' => 13023,
                'city_id' => 20,
                'city_sector_name' => 'hay oued dahab',
                'city_sector_status' => 1,
            ),
            139 =>
            array (
                'id' => 13024,
                'city_id' => 20,
                'city_sector_name' => 'sakani',
                'city_sector_status' => 1,
            ),
            140 =>
            array (
                'id' => 13025,
                'city_id' => 20,
                'city_sector_name' => 'sidi abdellah',
                'city_sector_status' => 1,
            ),
            141 =>
            array (
                'id' => 13026,
                'city_id' => 20,
                'city_sector_name' => 'al bassatine',
                'city_sector_status' => 1,
            ),
            142 =>
            array (
                'id' => 13027,
                'city_id' => 20,
                'city_sector_name' => 'al mouahiddine',
                'city_sector_status' => 1,
            ),
            143 =>
            array (
                'id' => 13028,
                'city_id' => 20,
                'city_sector_name' => 'al moukataa',
                'city_sector_status' => 1,
            ),
            144 =>
            array (
                'id' => 13029,
                'city_id' => 20,
                'city_sector_name' => 'andalous',
                'city_sector_status' => 1,
            ),
            145 =>
            array (
                'id' => 13030,
                'city_id' => 20,
                'city_sector_name' => 'annaim',
                'city_sector_status' => 1,
            ),
            146 =>
            array (
                'id' => 13031,
                'city_id' => 20,
                'city_sector_name' => 'bled el gharbi',
                'city_sector_status' => 1,
            ),
            147 =>
            array (
                'id' => 13032,
                'city_id' => 20,
                'city_sector_name' => 'dar el hamra',
                'city_sector_status' => 1,
            ),
            148 =>
            array (
                'id' => 13033,
                'city_id' => 20,
                'city_sector_name' => 'dyour el ghaba',
                'city_sector_status' => 1,
            ),
            149 =>
            array (
                'id' => 13034,
                'city_id' => 20,
                'city_sector_name' => 'dyour el nejjar',
                'city_sector_status' => 1,
            ),
            150 =>
            array (
                'id' => 13035,
                'city_id' => 20,
                'city_sector_name' => 'frougui',
                'city_sector_status' => 1,
            ),
            151 =>
            array (
                'id' => 13036,
                'city_id' => 20,
                'city_sector_name' => 'hay al qods',
                'city_sector_status' => 1,
            ),
            152 =>
            array (
                'id' => 13037,
                'city_id' => 20,
                'city_sector_name' => 'hay cheikh lamfadel',
                'city_sector_status' => 1,
            ),
            153 =>
            array (
                'id' => 13038,
                'city_id' => 20,
                'city_sector_name' => 'hay karima',
                'city_sector_status' => 1,
            ),
            154 =>
            array (
                'id' => 13039,
                'city_id' => 20,
                'city_sector_name' => 'hay rahma',
                'city_sector_status' => 1,
            ),
            155 =>
            array (
                'id' => 13040,
                'city_id' => 20,
                'city_sector_name' => 'horria ',
                'city_sector_status' => 1,
            ),
            156 =>
            array (
                'id' => 13041,
                'city_id' => 20,
                'city_sector_name' => 'Inbiaat',
                'city_sector_status' => 1,
            ),
            157 =>
            array (
                'id' => 13042,
                'city_id' => 20,
                'city_sector_name' => 'lalla aicha',
                'city_sector_status' => 1,
            ),
            158 =>
            array (
                'id' => 13043,
                'city_id' => 20,
                'city_sector_name' => 'omar',
                'city_sector_status' => 1,
            ),
            159 =>
            array (
                'id' => 13044,
                'city_id' => 20,
                'city_sector_name' => 'pépiniere',
                'city_sector_status' => 1,
            ),
            160 =>
            array (
                'id' => 13045,
                'city_id' => 20,
                'city_sector_name' => 'roustal ',
                'city_sector_status' => 1,
            ),
            161 =>
            array (
                'id' => 13046,
                'city_id' => 20,
                'city_sector_name' => 'tabriquet ',
                'city_sector_status' => 1,
            ),
            162 =>
            array (
                'id' => 13047,
                'city_id' => 20,
                'city_sector_name' => 'zone industrielle hay arrahma',
                'city_sector_status' => 1,
            ),
            163 =>
            array (
                'id' => 14000,
                'city_id' => 21,
                'city_sector_name' => 'al kasaba',
                'city_sector_status' => 1,
            ),
            164 =>
            array (
                'id' => 14001,
                'city_id' => 21,
                'city_sector_name' => 'aviation',
                'city_sector_status' => 1,
            ),
            165 =>
            array (
                'id' => 14002,
                'city_id' => 21,
                'city_sector_name' => 'cap spartel',
                'city_sector_status' => 1,
            ),
            166 =>
            array (
                'id' => 14003,
                'city_id' => 21,
                'city_sector_name' => 'centre ville',
                'city_sector_status' => 1,
            ),
            167 =>
            array (
                'id' => 14004,
                'city_id' => 21,
                'city_sector_name' => 'cité californie',
                'city_sector_status' => 1,
            ),
            168 =>
            array (
                'id' => 14005,
                'city_id' => 21,
                'city_sector_name' => 'girari',
                'city_sector_status' => 1,
            ),
            169 =>
            array (
                'id' => 14006,
                'city_id' => 21,
                'city_sector_name' => 'ibn taymia',
                'city_sector_status' => 1,
            ),
            170 =>
            array (
                'id' => 14007,
                'city_id' => 21,
                'city_sector_name' => 'M nar',
                'city_sector_status' => 1,
            ),
            171 =>
            array (
                'id' => 14008,
                'city_id' => 21,
                'city_sector_name' => 'M ssalah',
                'city_sector_status' => 1,
            ),
            172 =>
            array (
                'id' => 14009,
                'city_id' => 21,
                'city_sector_name' => 'makhoukha',
                'city_sector_status' => 1,
            ),
            173 =>
            array (
                'id' => 14010,
                'city_id' => 21,
                'city_sector_name' => 'malabata',
                'city_sector_status' => 1,
            ),
            174 =>
            array (
                'id' => 14011,
                'city_id' => 21,
                'city_sector_name' => 'marchane',
                'city_sector_status' => 1,
            ),
            175 =>
            array (
                'id' => 14012,
                'city_id' => 21,
                'city_sector_name' => 'marjane',
                'city_sector_status' => 1,
            ),
            176 =>
            array (
                'id' => 14013,
                'city_id' => 21,
                'city_sector_name' => 'moujahiddine',
                'city_sector_status' => 1,
            ),
            177 =>
            array (
                'id' => 14014,
                'city_id' => 21,
                'city_sector_name' => 'moulay youssef',
                'city_sector_status' => 1,
            ),
            178 =>
            array (
                'id' => 14015,
                'city_id' => 21,
                'city_sector_name' => 'santa',
                'city_sector_status' => 1,
            ),
            179 =>
            array (
                'id' => 14016,
                'city_id' => 21,
                'city_sector_name' => 'val fleuri',
                'city_sector_status' => 1,
            ),
            180 =>
            array (
                'id' => 14017,
                'city_id' => 21,
                'city_sector_name' => 'vieille montagne',
                'city_sector_status' => 1,
            ),
            181 =>
            array (
                'id' => 14018,
                'city_id' => 21,
                'city_sector_name' => 'ziatene',
                'city_sector_status' => 1,
            ),
            182 =>
            array (
                'id' => 14019,
                'city_id' => 21,
                'city_sector_name' => 'achennad',
                'city_sector_status' => 1,
            ),
            183 =>
            array (
                'id' => 14020,
                'city_id' => 21,
                'city_sector_name' => 'aharrarine',
                'city_sector_status' => 1,
            ),
            184 =>
            array (
                'id' => 14021,
                'city_id' => 21,
                'city_sector_name' => 'ahlane',
                'city_sector_status' => 1,
            ),
            185 =>
            array (
                'id' => 14022,
                'city_id' => 21,
                'city_sector_name' => 'aida',
                'city_sector_status' => 1,
            ),
            186 =>
            array (
                'id' => 14023,
                'city_id' => 21,
                'city_sector_name' => 'Al anbar ',
                'city_sector_status' => 1,
            ),
            187 =>
            array (
                'id' => 14024,
                'city_id' => 21,
                'city_sector_name' => 'al wahda ',
                'city_sector_status' => 1,
            ),
            188 =>
            array (
                'id' => 14025,
                'city_id' => 21,
                'city_sector_name' => 'aouama gharbia',
                'city_sector_status' => 1,
            ),
            189 =>
            array (
                'id' => 14026,
                'city_id' => 21,
                'city_sector_name' => 'beausejour',
                'city_sector_status' => 1,
            ),
            190 =>
            array (
                'id' => 14027,
                'city_id' => 21,
                'city_sector_name' => 'behair',
                'city_sector_status' => 1,
            ),
            191 =>
            array (
                'id' => 14028,
                'city_id' => 21,
                'city_sector_name' => 'ben dibane',
                'city_sector_status' => 1,
            ),
            192 =>
            array (
                'id' => 14029,
                'city_id' => 21,
                'city_sector_name' => 'beni makada lakdima',
                'city_sector_status' => 1,
            ),
            193 =>
            array (
                'id' => 14030,
                'city_id' => 21,
                'city_sector_name' => 'beni said',
                'city_sector_status' => 1,
            ),
            194 =>
            array (
                'id' => 14031,
                'city_id' => 21,
                'city_sector_name' => 'beni touzine',
                'city_sector_status' => 1,
            ),
            195 =>
            array (
                'id' => 14032,
                'city_id' => 21,
                'city_sector_name' => 'bir aharchoune',
                'city_sector_status' => 1,
            ),
            196 =>
            array (
                'id' => 14033,
                'city_id' => 21,
                'city_sector_name' => 'bir chifa',
                'city_sector_status' => 1,
            ),
            197 =>
            array (
                'id' => 14034,
                'city_id' => 21,
                'city_sector_name' => 'bir el ghazi ',
                'city_sector_status' => 1,
            ),
            198 =>
            array (
                'id' => 14035,
                'city_id' => 21,
                'city_sector_name' => 'bouchta abdelatif',
                'city_sector_status' => 1,
            ),
            199 =>
            array (
                'id' => 14036,
                'city_id' => 21,
                'city_sector_name' => 'bouhout 1',
                'city_sector_status' => 1,
            ),
            200 =>
            array (
                'id' => 14037,
                'city_id' => 21,
                'city_sector_name' => 'bouhout2',
                'city_sector_status' => 1,
            ),
            201 =>
            array (
                'id' => 14038,
                'city_id' => 21,
                'city_sector_name' => 'dher ahjjam',
                'city_sector_status' => 1,
            ),
            202 =>
            array (
                'id' => 14039,
                'city_id' => 21,
                'city_sector_name' => 'dher lahmam',
                'city_sector_status' => 1,
            ),
            203 =>
            array (
                'id' => 14040,
                'city_id' => 21,
                'city_sector_name' => 'el baraka',
                'city_sector_status' => 1,
            ),
            204 =>
            array (
                'id' => 14041,
                'city_id' => 21,
                'city_sector_name' => 'el haj el mokhtar',
                'city_sector_status' => 1,
            ),
            205 =>
            array (
                'id' => 14042,
                'city_id' => 21,
                'city_sector_name' => 'el khair1',
                'city_sector_status' => 1,
            ),
            206 =>
            array (
                'id' => 14043,
                'city_id' => 21,
                'city_sector_name' => 'elkhair2',
                'city_sector_status' => 1,
            ),
            207 =>
            array (
                'id' => 14044,
                'city_id' => 21,
                'city_sector_name' => 'el mers1',
                'city_sector_status' => 1,
            ),
            208 =>
            array (
                'id' => 14045,
                'city_id' => 21,
                'city_sector_name' => 'el mers2',
                'city_sector_status' => 1,
            ),
            209 =>
            array (
                'id' => 14046,
                'city_id' => 21,
                'city_sector_name' => 'el merabet',
                'city_sector_status' => 1,
            ),
            210 =>
            array (
                'id' => 14047,
                'city_id' => 21,
                'city_sector_name' => 'ennasr',
                'city_sector_status' => 1,
            ),
            211 =>
            array (
                'id' => 14048,
                'city_id' => 21,
                'city_sector_name' => 'goursiana',
                'city_sector_status' => 1,
            ),
            212 =>
            array (
                'id' => 14049,
                'city_id' => 21,
                'city_sector_name' => 'haddad',
                'city_sector_status' => 1,
            ),
            213 =>
            array (
                'id' => 14050,
                'city_id' => 21,
                'city_sector_name' => 'hanaa1',
                'city_sector_status' => 1,
            ),
            214 =>
            array (
                'id' => 14051,
                'city_id' => 21,
                'city_sector_name' => 'hanaa2',
                'city_sector_status' => 1,
            ),
            215 =>
            array (
                'id' => 14052,
                'city_id' => 21,
                'city_sector_name' => 'hanaa3',
                'city_sector_status' => 1,
            ),
            216 =>
            array (
                'id' => 14053,
                'city_id' => 21,
                'city_sector_name' => 'jirrari',
                'city_sector_status' => 1,
            ),
            217 =>
            array (
                'id' => 14054,
                'city_id' => 21,
                'city_sector_name' => 'les rosiers',
                'city_sector_status' => 1,
            ),
            218 =>
            array (
                'id' => 14055,
                'city_id' => 21,
                'city_sector_name' => 'zemmouri',
                'city_sector_status' => 1,
            ),
            219 =>
            array (
                'id' => 14056,
                'city_id' => 21,
                'city_sector_name' => 'zouitina',
                'city_sector_status' => 1,
            ),
            220 =>
            array (
                'id' => 14057,
                'city_id' => 21,
                'city_sector_name' => 'al amal',
                'city_sector_status' => 1,
            ),
            221 =>
            array (
                'id' => 14058,
                'city_id' => 21,
                'city_sector_name' => 'al mandar al jamil',
                'city_sector_status' => 1,
            ),
            222 =>
            array (
                'id' => 14059,
                'city_id' => 21,
                'city_sector_name' => 'alia',
                'city_sector_status' => 1,
            ),
            223 =>
            array (
                'id' => 14060,
                'city_id' => 21,
                'city_sector_name' => 'benkirane',
                'city_sector_status' => 1,
            ),
            224 =>
            array (
                'id' => 14061,
                'city_id' => 21,
                'city_sector_name' => 'charf',
                'city_sector_status' => 1,
            ),
            225 =>
            array (
                'id' => 14062,
                'city_id' => 21,
                'city_sector_name' => 'draoua',
                'city_sector_status' => 1,
            ),
            226 =>
            array (
                'id' => 14063,
                'city_id' => 21,
                'city_sector_name' => 'drissia',
                'city_sector_status' => 1,
            ),
            227 =>
            array (
                'id' => 14064,
                'city_id' => 21,
                'city_sector_name' => 'el majd',
                'city_sector_status' => 1,
            ),
            228 =>
            array (
                'id' => 14065,
                'city_id' => 21,
                'city_sector_name' => 'el majd',
                'city_sector_status' => 1,
            ),
            229 =>
            array (
                'id' => 14066,
                'city_id' => 21,
                'city_sector_name' => 'el oued',
                'city_sector_status' => 1,
            ),
            230 =>
            array (
                'id' => 14067,
                'city_id' => 21,
                'city_sector_name' => 'mghogha',
                'city_sector_status' => 1,
            ),
            231 =>
            array (
                'id' => 14068,
                'city_id' => 21,
                'city_sector_name' => 'nzaha',
                'city_sector_status' => 1,
            ),
            232 =>
            array (
                'id' => 14069,
                'city_id' => 21,
                'city_sector_name' => 'sania',
                'city_sector_status' => 1,
            ),
            233 =>
            array (
                'id' => 14070,
                'city_id' => 21,
                'city_sector_name' => 'tanger city center',
                'city_sector_status' => 1,
            ),
            234 =>
            array (
                'id' => 14071,
                'city_id' => 21,
                'city_sector_name' => 'tanja balia',
                'city_sector_status' => 1,
            ),
            235 =>
            array (
                'id' => 14072,
                'city_id' => 21,
                'city_sector_name' => 'zone industrielle mghogha',
                'city_sector_status' => 1,
            ),
            236 =>
            array (
                'id' => 14073,
                'city_id' => 21,
                'city_sector_name' => 'azib haj kaddour',
                'city_sector_status' => 1,
            ),
            237 =>
            array (
                'id' => 14074,
                'city_id' => 21,
                'city_sector_name' => 'bel air-val fleuri',
                'city_sector_status' => 1,
            ),
            238 =>
            array (
                'id' => 14075,
                'city_id' => 21,
                'city_sector_name' => 'bir chairi',
                'city_sector_status' => 1,
            ),
            239 =>
            array (
                'id' => 14076,
                'city_id' => 21,
                'city_sector_name' => 'branes1',
                'city_sector_status' => 1,
            ),
            240 =>
            array (
                'id' => 14077,
                'city_id' => 21,
                'city_sector_name' => 'branes2',
                'city_sector_status' => 1,
            ),
            241 =>
            array (
                'id' => 14078,
                'city_id' => 21,
                'city_sector_name' => 'casabarata',
                'city_sector_status' => 1,
            ),
            242 =>
            array (
                'id' => 14079,
                'city_id' => 21,
                'city_sector_name' => 'castilla',
                'city_sector_status' => 1,
            ),
            243 =>
            array (
                'id' => 14080,
                'city_id' => 21,
                'city_sector_name' => 'hay el bassatine',
                'city_sector_status' => 1,
            ),
            244 =>
            array (
                'id' => 14081,
                'city_id' => 21,
                'city_sector_name' => 'hay el boughaz',
                'city_sector_status' => 1,
            ),
            245 =>
            array (
                'id' => 14082,
                'city_id' => 21,
                'city_sector_name' => 'hay zaoudia ',
                'city_sector_status' => 1,
            ),
            246 =>
            array (
                'id' => 14083,
                'city_id' => 21,
                'city_sector_name' => 'lalla chafia',
                'city_sector_status' => 1,
            ),
            247 =>
            array (
                'id' => 14084,
                'city_id' => 21,
                'city_sector_name' => 'souani',
                'city_sector_status' => 1,
            ),
            248 =>
            array (
                'id' => 14085,
                'city_id' => 21,
                'city_sector_name' => 'achakar',
                'city_sector_status' => 1,
            ),
            249 =>
            array (
                'id' => 14086,
                'city_id' => 21,
                'city_sector_name' => 'administratif',
                'city_sector_status' => 1,
            ),
            250 =>
            array (
                'id' => 14087,
                'city_id' => 21,
                'city_sector_name' => 'ahammar',
                'city_sector_status' => 1,
            ),
            251 =>
            array (
                'id' => 14088,
                'city_id' => 21,
                'city_sector_name' => 'ain el hayani',
                'city_sector_status' => 1,
            ),
            252 =>
            array (
                'id' => 14089,
                'city_id' => 21,
                'city_sector_name' => 'algerie',
                'city_sector_status' => 1,
            ),
            253 =>
            array (
                'id' => 14090,
                'city_id' => 21,
                'city_sector_name' => 'branes kdima',
                'city_sector_status' => 1,
            ),
            254 =>
            array (
                'id' => 14091,
                'city_id' => 21,
                'city_sector_name' => 'californie',
                'city_sector_status' => 1,
            ),
            255 =>
            array (
                'id' => 16007,
                'city_id' => 23,
                'city_sector_name' => 'boujarah',
                'city_sector_status' => 1,
            ),
            256 =>
            array (
                'id' => 14093,
                'city_id' => 21,
                'city_sector_name' => 'de la plage',
                'city_sector_status' => 1,
            ),
            257 =>
            array (
                'id' => 14094,
                'city_id' => 21,
                'city_sector_name' => 'golf',
                'city_sector_status' => 1,
            ),
            258 =>
            array (
                'id' => 14095,
                'city_id' => 21,
                'city_sector_name' => 'hay hassani',
                'city_sector_status' => 1,
            ),
            259 =>
            array (
                'id' => 14096,
                'city_id' => 21,
                'city_sector_name' => 'Iberie',
                'city_sector_status' => 1,
            ),
            260 =>
            array (
                'id' => 14097,
                'city_id' => 21,
                'city_sector_name' => 'jbel kbir',
                'city_sector_status' => 1,
            ),
            261 =>
            array (
                'id' => 14098,
                'city_id' => 21,
                'city_sector_name' => 'laaouina ',
                'city_sector_status' => 1,
            ),
            262 =>
            array (
                'id' => 14099,
                'city_id' => 21,
                'city_sector_name' => 'marchan',
                'city_sector_status' => 1,
            ),
            263 =>
            array (
                'id' => 14100,
                'city_id' => 21,
                'city_sector_name' => 'mediouna',
                'city_sector_status' => 1,
            ),
            264 =>
            array (
                'id' => 14101,
                'city_id' => 21,
                'city_sector_name' => 'mesnana',
                'city_sector_status' => 1,
            ),
            265 =>
            array (
                'id' => 14102,
                'city_id' => 21,
                'city_sector_name' => 'mghayer',
                'city_sector_status' => 1,
            ),
            266 =>
            array (
                'id' => 14103,
                'city_id' => 21,
                'city_sector_name' => 'mister khouch',
                'city_sector_status' => 1,
            ),
            267 =>
            array (
                'id' => 14104,
                'city_id' => 21,
                'city_sector_name' => 'mozart',
                'city_sector_status' => 1,
            ),
            268 =>
            array (
                'id' => 14105,
                'city_id' => 21,
                'city_sector_name' => 'msala',
                'city_sector_status' => 1,
            ),
            269 =>
            array (
                'id' => 14106,
                'city_id' => 21,
                'city_sector_name' => 'medina',
                'city_sector_status' => 1,
            ),
            270 =>
            array (
                'id' => 14107,
                'city_id' => 21,
                'city_sector_name' => 'port tanger ville',
                'city_sector_status' => 1,
            ),
            271 =>
            array (
                'id' => 14108,
                'city_id' => 21,
                'city_sector_name' => 'rmilat',
                'city_sector_status' => 1,
            ),
            272 =>
            array (
                'id' => 14109,
                'city_id' => 21,
                'city_sector_name' => 'star hill',
                'city_sector_status' => 1,
            ),
            273 =>
            array (
                'id' => 14110,
                'city_id' => 21,
                'city_sector_name' => 'mana',
                'city_sector_status' => 1,
            ),
            274 =>
            array (
                'id' => 15000,
                'city_id' => 23,
                'city_sector_name' => 'al azhar',
                'city_sector_status' => 1,
            ),
            275 =>
            array (
                'id' => 15001,
                'city_id' => 23,
                'city_sector_name' => '	 centre ville	',
                'city_sector_status' => 1,
            ),
            276 =>
            array (
                'id' => 15002,
                'city_id' => 23,
                'city_sector_name' => '	 dersa 	',
                'city_sector_status' => 1,
            ),
            277 =>
            array (
                'id' => 15003,
                'city_id' => 23,
                'city_sector_name' => '	kouilma	',
                'city_sector_status' => 1,
            ),
            278 =>
            array (
                'id' => 15004,
                'city_id' => 23,
                'city_sector_name' => '	 medina	',
                'city_sector_status' => 1,
            ),
            279 =>
            array (
                'id' => 15005,
                'city_id' => 23,
                'city_sector_name' => '	 mhannech	',
                'city_sector_status' => 1,
            ),
            280 =>
            array (
                'id' => 15006,
                'city_id' => 23,
                'city_sector_name' => '	 safir	',
                'city_sector_status' => 1,
            ),
            281 =>
            array (
                'id' => 15007,
                'city_id' => 23,
                'city_sector_name' => '	 saniat rmal	',
                'city_sector_status' => 1,
            ),
            282 =>
            array (
                'id' => 15008,
                'city_id' => 23,
                'city_sector_name' => '	 sidi el mandri	',
                'city_sector_status' => 1,
            ),
            283 =>
            array (
                'id' => 15009,
                'city_id' => 23,
                'city_sector_name' => '	 sidi talha	',
                'city_sector_status' => 1,
            ),
            284 =>
            array (
                'id' => 15010,
                'city_id' => 23,
                'city_sector_name' => '	 slaoui	',
                'city_sector_status' => 1,
            ),
            285 =>
            array (
                'id' => 15011,
                'city_id' => 23,
                'city_sector_name' => '	 torrita	',
                'city_sector_status' => 1,
            ),
            286 =>
            array (
                'id' => 15012,
                'city_id' => 23,
                'city_sector_name' => '	 touilaa	',
                'city_sector_status' => 1,
            ),
            287 =>
            array (
                'id' => 15013,
                'city_id' => 23,
                'city_sector_name' => '	 route de ceuta	',
                'city_sector_status' => 1,
            ),
            288 =>
            array (
                'id' => 15014,
                'city_id' => 23,
                'city_sector_name' => '	 ziana	',
                'city_sector_status' => 1,
            ),
            289 =>
            array (
                'id' => 15015,
                'city_id' => 23,
                'city_sector_name' => '	 bled 	',
                'city_sector_status' => 1,
            ),
            290 =>
            array (
                'id' => 15016,
                'city_id' => 23,
                'city_sector_name' => '	 borj	',
                'city_sector_status' => 1,
            ),
            291 =>
            array (
                'id' => 15017,
                'city_id' => 23,
                'city_sector_name' => '	 boujdade	',
                'city_sector_status' => 1,
            ),
            292 =>
            array (
                'id' => 15018,
                'city_id' => 23,
                'city_sector_name' => '	 dyour el makhezen	',
                'city_sector_status' => 1,
            ),
            293 =>
            array (
                'id' => 15019,
                'city_id' => 23,
                'city_sector_name' => '	 el ensache	',
                'city_sector_status' => 1,
            ),
            294 =>
            array (
                'id' => 15020,
                'city_id' => 23,
                'city_sector_name' => '	 el matar	',
                'city_sector_status' => 1,
            ),
            295 =>
            array (
                'id' => 15021,
                'city_id' => 23,
                'city_sector_name' => '	hay el mdrassi	',
                'city_sector_status' => 1,
            ),
            296 =>
            array (
                'id' => 15022,
                'city_id' => 23,
                'city_sector_name' => '	 ennakata	',
                'city_sector_status' => 1,
            ),
            297 =>
            array (
                'id' => 15023,
                'city_id' => 23,
                'city_sector_name' => '	 essania	',
                'city_sector_status' => 1,
            ),
            298 =>
            array (
                'id' => 15024,
                'city_id' => 23,
                'city_sector_name' => '	 ichara	',
                'city_sector_status' => 1,
            ),
            299 =>
            array (
                'id' => 15025,
                'city_id' => 23,
                'city_sector_name' => '	 korat essba	',
                'city_sector_status' => 1,
            ),
            300 =>
            array (
                'id' => 15026,
                'city_id' => 23,
                'city_sector_name' => '	 laayoune	',
                'city_sector_status' => 1,
            ),
            301 =>
            array (
                'id' => 15027,
                'city_id' => 23,
                'city_sector_name' => '	 laouziyine	',
                'city_sector_status' => 1,
            ),
            302 =>
            array (
                'id' => 15028,
                'city_id' => 23,
                'city_sector_name' => '	 masdae	',
                'city_sector_status' => 1,
            ),
            303 =>
            array (
                'id' => 15029,
                'city_id' => 23,
                'city_sector_name' => '	 mellah 	',
                'city_sector_status' => 1,
            ),
            304 =>
            array (
                'id' => 15030,
                'city_id' => 23,
                'city_sector_name' => '	 mounia	',
                'city_sector_status' => 1,
            ),
            305 =>
            array (
                'id' => 15031,
                'city_id' => 23,
                'city_sector_name' => '	 msalla	',
                'city_sector_status' => 1,
            ),
            306 =>
            array (
                'id' => 15034,
                'city_id' => 23,
                'city_sector_name' => '	 taboula	',
                'city_sector_status' => 1,
            ),
            307 =>
            array (
                'id' => 15035,
                'city_id' => 23,
                'city_sector_name' => '	 talaa	',
                'city_sector_status' => 1,
            ),
            308 =>
            array (
                'id' => 15036,
                'city_id' => 23,
                'city_sector_name' => '	 tamouda	',
                'city_sector_status' => 1,
            ),
            309 =>
            array (
                'id' => 15037,
                'city_id' => 23,
                'city_sector_name' => '	 touabel	',
                'city_sector_status' => 1,
            ),
            310 =>
            array (
                'id' => 15038,
                'city_id' => 23,
                'city_sector_name' => '	 touilaa foqia	',
                'city_sector_status' => 1,
            ),
            311 =>
            array (
                'id' => 15039,
                'city_id' => 23,
                'city_sector_name' => '	 trankat	',
                'city_sector_status' => 1,
            ),
            312 =>
            array (
                'id' => 15040,
                'city_id' => 23,
                'city_sector_name' => '	 wilaya	',
                'city_sector_status' => 1,
            ),
            313 =>
            array (
                'id' => 15041,
                'city_id' => 23,
                'city_sector_name' => '	zinat	',
                'city_sector_status' => 1,
            ),
            314 =>
            array (
                'id' => 15042,
                'city_id' => 23,
                'city_sector_name' => '	benkarich	',
                'city_sector_status' => 1,
            ),
            315 =>
            array (
                'id' => 15043,
                'city_id' => 23,
                'city_sector_name' => '	beghagheza	',
                'city_sector_status' => 1,
            ),
            316 =>
            array (
                'id' => 15044,
                'city_id' => 23,
                'city_sector_name' => '	 ain hessen	',
                'city_sector_status' => 1,
            ),
            317 =>
            array (
                'id' => 15045,
                'city_id' => 23,
                'city_sector_name' => '	 bni yeder	',
                'city_sector_status' => 1,
            ),
            318 =>
            array (
                'id' => 15046,
                'city_id' => 23,
                'city_sector_name' => '	 bni harechen	',
                'city_sector_status' => 1,
            ),
            319 =>
            array (
                'id' => 15047,
                'city_id' => 23,
                'city_sector_name' => '	oued lao	',
                'city_sector_status' => 1,
            ),
            320 =>
            array (
                'id' => 15048,
                'city_id' => 23,
                'city_sector_name' => '	 azla	',
                'city_sector_status' => 1,
            ),
            321 =>
            array (
                'id' => 15049,
                'city_id' => 23,
                'city_sector_name' => '	 amssa	',
                'city_sector_status' => 1,
            ),
            322 =>
            array (
                'id' => 15050,
                'city_id' => 23,
                'city_sector_name' => '	 bni said	',
                'city_sector_status' => 1,
            ),
            323 =>
            array (
                'id' => 16000,
                'city_id' => 26,
                'city_sector_name' => 'martil',
                'city_sector_status' => 1,
            ),
            324 =>
            array (
                'id' => 16094,
                'city_id' => 236,
                'city_sector_name' => 'marina smir',
                'city_sector_status' => 1,
            ),
            325 =>
            array (
                'id' => 16095,
                'city_id' => 23,
                'city_sector_name' => 'AV DES FAR',
                'city_sector_status' => 1,
            ),
            326 =>
            array (
                'id' => 16005,
                'city_id' => 26,
                'city_sector_name' => 'autres secteurs',
                'city_sector_status' => 1,
            ),
            327 =>
            array (
                'id' => 16006,
                'city_id' => 21,
                'city_sector_name' => 'Kezenaya',
                'city_sector_status' => 1,
            ),
            328 =>
            array (
                'id' => 16008,
                'city_id' => 23,
                'city_sector_name' => 'khandak zerbouh',
                'city_sector_status' => 1,
            ),
            329 =>
            array (
                'id' => 16009,
                'city_id' => 21,
                'city_sector_name' => 'Boukhalef',
                'city_sector_status' => 1,
            ),
            330 =>
            array (
                'id' => 16010,
                'city_id' => 30,
                'city_sector_name' => 'Boumia',
                'city_sector_status' => 1,
            ),
            331 =>
            array (
                'id' => 16011,
                'city_id' => 104,
                'city_sector_name' => 'Bradia',
                'city_sector_status' => 1,
            ),
            332 =>
            array (
                'id' => 16012,
                'city_id' => 105,
                'city_sector_name' => 'Brikcha',
                'city_sector_status' => 1,
            ),
            333 =>
            array (
                'id' => 16013,
                'city_id' => 76,
                'city_sector_name' => 'Bzou',
                'city_sector_status' => 1,
            ),
            334 =>
            array (
                'id' => 16014,
                'city_id' => 74,
                'city_sector_name' => 'Dar chaoui',
                'city_sector_status' => 1,
            ),
            335 =>
            array (
                'id' => 16015,
                'city_id' => 1,
                'city_sector_name' => 'Drargua',
                'city_sector_status' => 1,
            ),
            336 =>
            array (
                'id' => 16016,
                'city_id' => 9,
                'city_sector_name' => 'El kbab',
                'city_sector_status' => 1,
            ),
            337 =>
            array (
                'id' => 16017,
                'city_id' => 90,
                'city_sector_name' => 'Farkhana',
                'city_sector_status' => 1,
            ),
            338 =>
            array (
                'id' => 16018,
                'city_id' => 76,
                'city_sector_name' => 'Foum Jamaa',
                'city_sector_status' => 1,
            ),
            339 =>
            array (
                'id' => 16019,
                'city_id' => 30,
                'city_sector_name' => 'Gourrama',
                'city_sector_status' => 1,
            ),
            340 =>
            array (
                'id' => 16020,
                'city_id' => 101,
                'city_sector_name' => 'Guigou',
                'city_sector_status' => 1,
            ),
            341 =>
            array (
                'id' => 16021,
                'city_id' => 19,
                'city_sector_name' => 'Guisser',
                'city_sector_status' => 1,
            ),
            342 =>
            array (
                'id' => 16022,
                'city_id' => 9,
                'city_sector_name' => 'Had Bouhssoussen',
                'city_sector_status' => 1,
            ),
            343 =>
            array (
                'id' => 16023,
                'city_id' => 130,
                'city_sector_name' => 'Had Oued Ifrane',
                'city_sector_status' => 1,
            ),
            344 =>
            array (
                'id' => 16024,
                'city_id' => 10,
                'city_sector_name' => 'Hattane',
                'city_sector_status' => 1,
            ),
            345 =>
            array (
                'id' => 16025,
                'city_id' => 142,
                'city_sector_name' => 'Ighoud',
                'city_sector_status' => 1,
            ),
            346 =>
            array (
                'id' => 16026,
                'city_id' => 14,
                'city_sector_name' => 'Ihddaden',
                'city_sector_status' => 1,
            ),
            347 =>
            array (
                'id' => 16027,
                'city_id' => 12,
                'city_sector_name' => 'Imintanoute',
                'city_sector_status' => 1,
            ),
            348 =>
            array (
                'id' => 16028,
                'city_id' => 2,
                'city_sector_name' => 'Issaguen',
                'city_sector_status' => 1,
            ),
            349 =>
            array (
                'id' => 16029,
                'city_id' => 14,
                'city_sector_name' => 'Jaadar',
                'city_sector_status' => 1,
            ),
            350 =>
            array (
                'id' => 16030,
                'city_id' => 114,
                'city_sector_name' => 'Kassita',
                'city_sector_status' => 1,
            ),
            351 =>
            array (
                'id' => 16031,
                'city_id' => 173,
                'city_sector_name' => 'Keouna',
                'city_sector_status' => 1,
            ),
            352 =>
            array (
                'id' => 16032,
                'city_id' => 105,
                'city_sector_name' => 'Zoumi',
                'city_sector_status' => 1,
            ),
            353 =>
            array (
                'id' => 16033,
                'city_id' => 9,
                'city_sector_name' => 'Kerrouchen',
                'city_sector_status' => 1,
            ),
            354 =>
            array (
                'id' => 16034,
                'city_id' => 11,
                'city_sector_name' => 'Khémis Sahel',
                'city_sector_status' => 1,
            ),
            355 =>
            array (
                'id' => 16035,
                'city_id' => 5,
                'city_sector_name' => 'Sidi bouzid',
                'city_sector_status' => 1,
            ),
            356 =>
            array (
                'id' => 16036,
                'city_id' => 189,
                'city_sector_name' => 'Laâounate',
                'city_sector_status' => 1,
            ),
            357 =>
            array (
                'id' => 16037,
                'city_id' => 8,
                'city_sector_name' => 'Lala Mimouna',
                'city_sector_status' => 1,
            ),
            358 =>
            array (
                'id' => 16038,
                'city_id' => 195,
                'city_sector_name' => 'Lala takarkoust',
                'city_sector_status' => 1,
            ),
            359 =>
            array (
                'id' => 16039,
                'city_id' => 19,
                'city_sector_name' => 'Loulad',
                'city_sector_status' => 1,
            ),
            360 =>
            array (
                'id' => 16040,
                'city_id' => 172,
                'city_sector_name' => 'Maaziz',
                'city_sector_status' => 1,
            ),
            361 =>
            array (
                'id' => 16041,
                'city_id' => 86,
                'city_sector_name' => 'Madagh',
                'city_sector_status' => 1,
            ),
            362 =>
            array (
                'id' => 16042,
                'city_id' => 22,
                'city_sector_name' => 'Matmata',
                'city_sector_status' => 1,
            ),
            363 =>
            array (
                'id' => 16043,
                'city_id' => 13,
                'city_sector_name' => 'M’haya',
                'city_sector_status' => 1,
            ),
            364 =>
            array (
                'id' => 16044,
                'city_id' => 114,
                'city_sector_name' => 'Midar',
                'city_sector_status' => 1,
            ),
            365 =>
            array (
                'id' => 16045,
                'city_id' => 105,
                'city_sector_name' => 'Moqrisset',
                'city_sector_status' => 1,
            ),
            366 =>
            array (
                'id' => 16046,
                'city_id' => 5,
                'city_sector_name' => 'Moulay Abdallah',
                'city_sector_status' => 1,
            ),
            367 =>
            array (
                'id' => 16047,
                'city_id' => 195,
                'city_sector_name' => 'Moulay Brahim',
                'city_sector_status' => 1,
            ),
            368 =>
            array (
                'id' => 16048,
                'city_id' => 76,
                'city_sector_name' => 'Ouaouizeght',
                'city_sector_status' => 1,
            ),
            369 =>
            array (
                'id' => 16049,
                'city_id' => 150,
                'city_sector_name' => 'Oued heïmer ',
                'city_sector_status' => 1,
            ),
            370 =>
            array (
                'id' => 16050,
                'city_id' => 87,
                'city_sector_name' => 'Oulad Abbou',
                'city_sector_status' => 1,
            ),
            371 =>
            array (
                'id' => 16051,
                'city_id' => 189,
                'city_sector_name' => 'Oulad Amrane',
                'city_sector_status' => 1,
            ),
            372 =>
            array (
                'id' => 16052,
                'city_id' => 5,
                'city_sector_name' => 'Oulad frej',
                'city_sector_status' => 1,
            ),
            373 =>
            array (
                'id' => 16053,
                'city_id' => 157,
                'city_sector_name' => 'Oum El Guerdane',
                'city_sector_status' => 1,
            ),
            374 =>
            array (
                'id' => 16054,
                'city_id' => 4,
                'city_sector_name' => 'Oulad h’riz Sahel',
                'city_sector_status' => 1,
            ),
            375 =>
            array (
                'id' => 16055,
                'city_id' => 19,
                'city_sector_name' => 'Oulad Saïd',
                'city_sector_status' => 1,
            ),
            376 =>
            array (
                'id' => 16056,
                'city_id' => 3,
                'city_sector_name' => 'Oulad Yaich',
                'city_sector_status' => 1,
            ),
            377 =>
            array (
                'id' => 16057,
                'city_id' => 22,
                'city_sector_name' => 'Oulad Zbaïr',
                'city_sector_status' => 1,
            ),
            378 =>
            array (
                'id' => 16058,
                'city_id' => 128,
                'city_sector_name' => 'Ounagha',
                'city_sector_status' => 1,
            ),
            379 =>
            array (
                'id' => 16059,
                'city_id' => 172,
                'city_sector_name' => 'Rommani',
                'city_sector_status' => 1,
            ),
            380 =>
            array (
                'id' => 16060,
                'city_id' => 216,
                'city_sector_name' => 'Sebt Gzoula',
                'city_sector_status' => 1,
            ),
            381 =>
            array (
                'id' => 16061,
                'city_id' => 13,
                'city_sector_name' => 'Sebt Jahjouh',
                'city_sector_status' => 1,
            ),
            382 =>
            array (
                'id' => 16062,
                'city_id' => 14,
                'city_sector_name' => 'Selouane',
                'city_sector_status' => 1,
            ),
            383 =>
            array (
                'id' => 16063,
                'city_id' => 106,
                'city_sector_name' => 'Sidi L’Mokhtar',
                'city_sector_status' => 1,
            ),
            384 =>
            array (
                'id' => 16064,
                'city_id' => 12,
                'city_sector_name' => 'Sidi Zouin',
                'city_sector_status' => 1,
            ),
            385 =>
            array (
                'id' => 16065,
                'city_id' => 195,
                'city_sector_name' => 'Sidi Abdallah Ghiat',
                'city_sector_status' => 1,
            ),
            386 =>
            array (
                'id' => 16066,
                'city_id' => 142,
                'city_sector_name' => 'Sidi Ahmed',
                'city_sector_status' => 1,
            ),
            387 =>
            array (
                'id' => 16067,
                'city_id' => 5,
                'city_sector_name' => 'Sidi Ali Ban Hamdouche',
                'city_sector_status' => 1,
            ),
            388 =>
            array (
                'id' => 16068,
                'city_id' => 8,
                'city_sector_name' => 'Sidi Taïbi',
                'city_sector_status' => 1,
            ),
            389 =>
            array (
                'id' => 16069,
                'city_id' => 128,
                'city_sector_name' => 'Semimou',
                'city_sector_status' => 1,
            ),
            390 =>
            array (
                'id' => 16070,
                'city_id' => 15,
                'city_sector_name' => 'Tabounte',
                'city_sector_status' => 1,
            ),
            391 =>
            array (
                'id' => 16071,
                'city_id' => 128,
                'city_sector_name' => 'Tafetachte',
                'city_sector_status' => 1,
            ),
            392 =>
            array (
                'id' => 16072,
                'city_id' => 128,
                'city_sector_name' => 'Tamanar',
                'city_sector_status' => 1,
            ),
            393 =>
            array (
                'id' => 16073,
                'city_id' => 134,
                'city_sector_name' => 'Talsint',
                'city_sector_status' => 1,
            ),
            394 =>
            array (
                'id' => 16074,
                'city_id' => 15,
                'city_sector_name' => 'Taznakht',
                'city_sector_status' => 1,
            ),
            395 =>
            array (
                'id' => 16075,
                'city_id' => 146,
                'city_sector_name' => 'Temsia',
                'city_sector_status' => 1,
            ),
            396 =>
            array (
                'id' => 16076,
                'city_id' => 134,
                'city_sector_name' => 'Tendrara',
                'city_sector_status' => 1,
            ),
            397 =>
            array (
                'id' => 16077,
                'city_id' => 176,
                'city_sector_name' => 'Thar Es Souk',
                'city_sector_status' => 1,
            ),
            398 =>
            array (
                'id' => 16078,
                'city_id' => 172,
                'city_sector_name' => 'Tidass',
                'city_sector_status' => 1,
            ),
            399 =>
            array (
                'id' => 16079,
                'city_id' => 9,
                'city_sector_name' => 'Tighassaline',
                'city_sector_status' => 1,
            ),
            400 =>
            array (
                'id' => 16080,
                'city_id' => 22,
                'city_sector_name' => 'Tizi Ouasli',
                'city_sector_status' => 1,
            ),
            401 =>
            array (
                'id' => 16081,
                'city_id' => 14,
                'city_sector_name' => 'Tiztoutine',
                'city_sector_status' => 1,
            ),
            402 =>
            array (
                'id' => 16082,
                'city_id' => 14,
                'city_sector_name' => 'Touima',
                'city_sector_status' => 1,
            ),
            403 =>
            array (
                'id' => 16083,
                'city_id' => 150,
                'city_sector_name' => 'Touissit',
                'city_sector_status' => 1,
            ),
            404 =>
            array (
                'id' => 16084,
                'city_id' => 6,
                'city_sector_name' => 'Tinejdad',
                'city_sector_status' => 1,
            ),
            405 =>
            array (
                'id' => 16085,
                'city_id' => 130,
                'city_sector_name' => 'Timahdite',
                'city_sector_status' => 1,
            ),
            406 =>
            array (
                'id' => 16086,
                'city_id' => 9,
                'city_sector_name' => 'Tighza',
                'city_sector_status' => 1,
            ),
            407 =>
            array (
                'id' => 16087,
                'city_id' => 30,
                'city_sector_name' => 'Tounfite',
                'city_sector_status' => 1,
            ),
            408 =>
            array (
                'id' => 16088,
                'city_id' => 30,
                'city_sector_name' => 'Zaïda',
                'city_sector_status' => 1,
            ),
            409 =>
            array (
                'id' => 16089,
                'city_id' => 162,
                'city_sector_name' => 'Zaouïat Bougrine',
                'city_sector_status' => 1,
            ),
            410 =>
            array (
                'id' => 16090,
                'city_id' => 23,
                'city_sector_name' => 'Essahtryiene',
                'city_sector_status' => 1,
            ),
            411 =>
            array (
                'id' => 16091,
                'city_id' => 23,
                'city_sector_name' => 'Jamaa Mezouak',
                'city_sector_status' => 1,
            ),
            412 =>
            array (
                'id' => 16092,
                'city_id' => 23,
                'city_sector_name' => 'Sebt lkedim',
                'city_sector_status' => 1,
            ),
            413 =>
            array (
                'id' => 16093,
                'city_id' => 238,
                'city_sector_name' => 'Anjra',
                'city_sector_status' => 1,
            ),
            414 =>
            array (
                'id' => 16097,
                'city_id' => 2,
                'city_sector_name' => 'Beni Bouyache',
                'city_sector_status' => 1,
            ),
        ));


    }
}
