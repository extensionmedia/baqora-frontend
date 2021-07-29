<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => 1,
                'city_name' => 'Agadir',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'city_name' => 'Al Hoceïma',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'city_name' => 'Béni Mellal',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'city_name' => 'Casablanca',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'city_name' => 'El Jadida',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            5 =>
            array (
                'id' => 6,
                'city_name' => 'Errachidia',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'city_name' => 'Fès',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            7 =>
            array (
                'id' => 8,
                'city_name' => 'Kénitra',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            8 =>
            array (
                'id' => 9,
                'city_name' => 'Khénifra',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            9 =>
            array (
                'id' => 10,
                'city_name' => 'Khouribga',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            10 =>
            array (
                'id' => 11,
                'city_name' => 'Larache',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            11 =>
            array (
                'id' => 12,
                'city_name' => 'Marrakech',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            12 =>
            array (
                'id' => 13,
                'city_name' => 'Meknès',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            13 =>
            array (
                'id' => 14,
                'city_name' => 'Nador',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            14 =>
            array (
                'id' => 15,
                'city_name' => 'Ouarzazate',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            15 =>
            array (
                'id' => 16,
                'city_name' => 'Oujda',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            16 =>
            array (
                'id' => 17,
                'city_name' => 'Rabat',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            17 =>
            array (
                'id' => 18,
                'city_name' => 'Safi',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            18 =>
            array (
                'id' => 19,
                'city_name' => 'Settat',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            19 =>
            array (
                'id' => 20,
                'city_name' => 'Salé',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            20 =>
            array (
                'id' => 21,
                'city_name' => 'Tanger',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            21 =>
            array (
                'id' => 22,
                'city_name' => 'Taza',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            22 =>
            array (
                'id' => 23,
                'city_name' => 'Tétouan',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            23 =>
            array (
                'id' => 25,
                'city_name' => 'mellilia',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            24 =>
            array (
                'id' => 26,
                'city_name' => 'Martil ',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            25 =>
            array (
                'id' => 27,
                'city_name' => 'Chefchaouen',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            26 =>
            array (
                'id' => 28,
                'city_name' => 'sebta',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            27 =>
            array (
                'id' => 29,
                'city_name' => 'Tifelt',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            28 =>
            array (
                'id' => 30,
                'city_name' => 'Midelt',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            29 =>
            array (
                'id' => 31,
                'city_name' => 'Laayoune',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            30 =>
            array (
                'id' => 32,
                'city_name' => 'Ksar sgher',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            31 =>
            array (
                'id' => 33,
                'city_name' => 'Afourar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            32 =>
            array (
                'id' => 34,
                'city_name' => 'Aghbala',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            33 =>
            array (
                'id' => 35,
                'city_name' => 'Aghbalou',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            34 =>
            array (
                'id' => 36,
                'city_name' => 'Agdz',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            35 =>
            array (
                'id' => 37,
                'city_name' => 'Agourai',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            36 =>
            array (
                'id' => 38,
                'city_name' => 'Aghelmous',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            37 =>
            array (
                'id' => 39,
                'city_name' => 'Ahfi',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            38 =>
            array (
                'id' => 40,
                'city_name' => 'Ain leuj',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            39 =>
            array (
                'id' => 41,
                'city_name' => 'Ain bni mathar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            40 =>
            array (
                'id' => 42,
                'city_name' => 'Ain bni mathar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            41 =>
            array (
                'id' => 43,
                'city_name' => 'Ain cheggag',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            42 =>
            array (
                'id' => 44,
                'city_name' => 'Ain mathar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            43 =>
            array (
                'id' => 45,
                'city_name' => 'Aïn dorij',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            44 =>
            array (
                'id' => 46,
                'city_name' => 'Ain el aouda',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            45 =>
            array (
                'id' => 47,
                'city_name' => 'Aïn Erreggada',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            46 =>
            array (
                'id' => 48,
                'city_name' => 'Aïn Harrouda',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            47 =>
            array (
                'id' => 49,
                'city_name' => 'Aïn jemaa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            48 =>
            array (
                'id' => 50,
                'city_name' => 'Aïn Karma',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            49 =>
            array (
                'id' => 51,
                'city_name' => 'Aïn Taoujdate',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            50 =>
            array (
                'id' => 52,
                'city_name' => 'Aït Laaza',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            51 =>
            array (
                'id' => 53,
                'city_name' => 'Aït baha',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            52 =>
            array (
                'id' => 54,
                'city_name' => 'Aït boubidmane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            53 =>
            array (
                'id' => 55,
                'city_name' => 'Aït daoud',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            54 =>
            array (
                'id' => 56,
                'city_name' => 'AÏt Ishaq',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            55 =>
            array (
                'id' => 57,
                'city_name' => 'Aït Melloul',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            56 =>
            array (
                'id' => 58,
                'city_name' => 'Aït Ourir',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            57 =>
            array (
                'id' => 59,
                'city_name' => 'Akka',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            58 =>
            array (
                'id' => 60,
                'city_name' => 'Aklim',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            59 =>
            array (
                'id' => 61,
                'city_name' => 'Aknoul',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            60 =>
            array (
                'id' => 62,
                'city_name' => 'Ajdir',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            61 =>
            array (
                'id' => 63,
                'city_name' => 'El aaroui',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            62 =>
            array (
                'id' => 64,
                'city_name' => 'Alnif',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            63 =>
            array (
                'id' => 65,
                'city_name' => 'Amalou Ighriben',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            64 =>
            array (
                'id' => 66,
                'city_name' => 'Amizmiz',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            65 =>
            array (
                'id' => 67,
                'city_name' => 'Aoufous',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            66 =>
            array (
                'id' => 68,
                'city_name' => 'Aoulouz',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            67 =>
            array (
                'id' => 69,
                'city_name' => 'Aourir',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            68 =>
            array (
                'id' => 70,
                'city_name' => 'Arbaoua',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            69 =>
            array (
                'id' => 71,
                'city_name' => 'Arfoud',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            70 =>
            array (
                'id' => 72,
                'city_name' => 'Assa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            71 =>
            array (
                'id' => 73,
                'city_name' => 'Assahrij',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            72 =>
            array (
                'id' => 74,
                'city_name' => 'Assilah',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            73 =>
            array (
                'id' => 75,
                'city_name' => 'Azemmour',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            74 =>
            array (
                'id' => 76,
                'city_name' => 'Azilal',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            75 =>
            array (
                'id' => 77,
                'city_name' => 'Azrou',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            76 =>
            array (
                'id' => 78,
                'city_name' => 'Bab berred',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            77 =>
            array (
                'id' => 79,
                'city_name' => 'Bab taza',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            78 =>
            array (
                'id' => 80,
                'city_name' => 'Bejaad',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            79 =>
            array (
                'id' => 81,
                'city_name' => 'Ben ahmed',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            80 =>
            array (
                'id' => 82,
                'city_name' => 'Ben guerir',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            81 =>
            array (
                'id' => 83,
                'city_name' => 'Ben Taïeb',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            82 =>
            array (
                'id' => 84,
                'city_name' => 'Ben Yakhlef',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            83 =>
            array (
                'id' => 85,
                'city_name' => 'Ben Slimane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            84 =>
            array (
                'id' => 86,
                'city_name' => 'Berkane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            85 =>
            array (
                'id' => 87,
                'city_name' => 'Berrechid',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            86 =>
            array (
                'id' => 88,
                'city_name' => 'Bhali',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            87 =>
            array (
                'id' => 89,
                'city_name' => 'Biougra',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            88 =>
            array (
                'id' => 90,
                'city_name' => 'Bni Ansar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            89 =>
            array (
                'id' => 91,
                'city_name' => 'Bni bouayach',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            90 =>
            array (
                'id' => 92,
                'city_name' => 'Bni chiker',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            91 =>
            array (
                'id' => 93,
                'city_name' => 'Bni drar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            92 =>
            array (
                'id' => 94,
                'city_name' => 'Bni Hadifa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            93 =>
            array (
                'id' => 95,
                'city_name' => 'Bni Tadjite',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            94 =>
            array (
                'id' => 96,
                'city_name' => 'Bouarfa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            95 =>
            array (
                'id' => 97,
                'city_name' => 'Boudnib',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            96 =>
            array (
                'id' => 98,
                'city_name' => 'Bouguedra',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            97 =>
            array (
                'id' => 99,
                'city_name' => 'Boujdour',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            98 =>
            array (
                'id' => 100,
                'city_name' => 'Boujniba',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            99 =>
            array (
                'id' => 101,
                'city_name' => 'Boulemane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            100 =>
            array (
                'id' => 102,
                'city_name' => 'Bouskoura',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            101 =>
            array (
                'id' => 103,
                'city_name' => 'Bouznika',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            102 =>
            array (
                'id' => 104,
                'city_name' => 'Fequih ben Salah',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            103 =>
            array (
                'id' => 105,
                'city_name' => 'Ouezzane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            104 =>
            array (
                'id' => 106,
                'city_name' => 'Chichaoua',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            105 =>
            array (
                'id' => 107,
                'city_name' => 'Dakhla',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            106 =>
            array (
                'id' => 108,
                'city_name' => 'Dar El Gueddari',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            107 =>
            array (
                'id' => 109,
                'city_name' => 'El Hajeb',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            108 =>
            array (
                'id' => 110,
                'city_name' => 'Dcheïra El Jihadia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            109 =>
            array (
                'id' => 111,
                'city_name' => 'Debdou',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            110 =>
            array (
                'id' => 112,
                'city_name' => 'Demnate',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            111 =>
            array (
                'id' => 113,
                'city_name' => 'Deroua',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            112 =>
            array (
                'id' => 114,
                'city_name' => 'Driouch',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            113 =>
            array (
                'id' => 115,
                'city_name' => 'Echemmaia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            114 =>
            array (
                'id' => 116,
                'city_name' => 'El Aïoun Sidi Mellouk',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            115 =>
            array (
                'id' => 117,
                'city_name' => 'Al bourouj',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            116 =>
            array (
                'id' => 118,
                'city_name' => 'El gara',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            117 =>
            array (
                'id' => 119,
                'city_name' => 'El hanchane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            118 =>
            array (
                'id' => 120,
                'city_name' => 'El kelaa des Sraghna',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            119 =>
            array (
                'id' => 121,
                'city_name' => 'El ksiba',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            120 =>
            array (
                'id' => 122,
                'city_name' => 'El mansouria',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            121 =>
            array (
                'id' => 123,
                'city_name' => 'El marsa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            122 =>
            array (
                'id' => 124,
                'city_name' => 'El menzel',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            123 =>
            array (
                'id' => 125,
                'city_name' => 'El ouatia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            124 =>
            array (
                'id' => 217,
                'city_name' => 'Sidi Bou Othamne',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            125 =>
            array (
                'id' => 127,
                'city_name' => 'Er-Rich',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            126 =>
            array (
                'id' => 128,
                'city_name' => 'Essaouira',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            127 =>
            array (
                'id' => 129,
                'city_name' => 'Es-Semara',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            128 =>
            array (
                'id' => 130,
                'city_name' => 'Ifrane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            129 =>
            array (
                'id' => 131,
                'city_name' => 'Guelmim',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            130 =>
            array (
                'id' => 132,
                'city_name' => 'Goulmima',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            131 =>
            array (
                'id' => 133,
                'city_name' => 'Fam El hisn',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            132 =>
            array (
                'id' => 134,
                'city_name' => 'Figuig',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            133 =>
            array (
                'id' => 135,
                'city_name' => 'Foum Zguid',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            134 =>
            array (
                'id' => 136,
                'city_name' => 'Ghafsaï',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            135 =>
            array (
                'id' => 137,
                'city_name' => 'Ghmate',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            136 =>
            array (
                'id' => 138,
                'city_name' => 'Guersif',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            137 =>
            array (
                'id' => 139,
                'city_name' => 'Had Kourt',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            138 =>
            array (
                'id' => 140,
                'city_name' => 'Haj kaddour',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            139 =>
            array (
                'id' => 141,
                'city_name' => 'Houara',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            140 =>
            array (
                'id' => 142,
                'city_name' => 'Youssoufia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            141 =>
            array (
                'id' => 143,
                'city_name' => 'Imouzzer Kandar',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            142 =>
            array (
                'id' => 144,
                'city_name' => 'Imouzzer Marmoucha',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            143 =>
            array (
                'id' => 145,
                'city_name' => 'Imzouren',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            144 =>
            array (
                'id' => 146,
                'city_name' => 'Inezgane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            145 =>
            array (
                'id' => 147,
                'city_name' => 'Itzer',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            146 =>
            array (
                'id' => 148,
                'city_name' => 'Jamaat shaim',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            147 =>
            array (
                'id' => 149,
                'city_name' => 'Jebha',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            148 =>
            array (
                'id' => 150,
                'city_name' => 'Jerada',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            149 =>
            array (
                'id' => 151,
                'city_name' => 'Jorf el melha',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            150 =>
            array (
                'id' => 152,
                'city_name' => 'Kalaat m’Gouna',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            151 =>
            array (
                'id' => 153,
                'city_name' => 'Kariat Ba Mohamed',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            152 =>
            array (
                'id' => 154,
                'city_name' => 'Kasba tadla',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            153 =>
            array (
                'id' => 155,
                'city_name' => 'Kattara',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            154 =>
            array (
                'id' => 156,
                'city_name' => 'Kahf nsour',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            155 =>
            array (
                'id' => 157,
                'city_name' => 'Tata',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            156 =>
            array (
                'id' => 158,
                'city_name' => 'Tiznit',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            157 =>
            array (
                'id' => 159,
                'city_name' => 'Témara',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            158 =>
            array (
                'id' => 160,
                'city_name' => 'Zaïo',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            159 =>
            array (
                'id' => 161,
                'city_name' => 'Zagora',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            160 =>
            array (
                'id' => 162,
                'city_name' => 'Sefrou',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            161 =>
            array (
                'id' => 163,
                'city_name' => 'Sidi allal Tazi',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            162 =>
            array (
                'id' => 164,
                'city_name' => 'Saïdia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            163 =>
            array (
                'id' => 165,
                'city_name' => 'Nouaceur',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            164 =>
            array (
                'id' => 166,
                'city_name' => 'Loualidia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            165 =>
            array (
                'id' => 167,
                'city_name' => 'Oued lao',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            166 =>
            array (
                'id' => 168,
                'city_name' => 'Mehdya',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            167 =>
            array (
                'id' => 169,
                'city_name' => 'Mohammédia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            168 =>
            array (
                'id' => 170,
                'city_name' => 'Moulay bousselham',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            169 =>
            array (
                'id' => 171,
                'city_name' => 'Médiouna',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            170 =>
            array (
                'id' => 172,
                'city_name' => 'Khémisset',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            171 =>
            array (
                'id' => 173,
                'city_name' => 'Temsamane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            172 =>
            array (
                'id' => 174,
                'city_name' => 'Sidi Allal El Bahraoui',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            173 =>
            array (
                'id' => 175,
                'city_name' => 'Sidi ifni',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            174 =>
            array (
                'id' => 176,
                'city_name' => 'Taounate',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            175 =>
            array (
                'id' => 177,
                'city_name' => 'Tan-Tan',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            176 =>
            array (
                'id' => 178,
                'city_name' => 'Tafraout',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            177 =>
            array (
                'id' => 179,
                'city_name' => 'Targuist',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            178 =>
            array (
                'id' => 180,
                'city_name' => 'Tarfaya',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            179 =>
            array (
                'id' => 181,
                'city_name' => 'Sidi yahya El Gharb',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            180 =>
            array (
                'id' => 182,
                'city_name' => 'Skhirate',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            181 =>
            array (
                'id' => 183,
                'city_name' => 'Souk El Arbaâ',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            182 =>
            array (
                'id' => 184,
                'city_name' => 'Taroudant',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            183 =>
            array (
                'id' => 185,
                'city_name' => 'Taourirt',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            184 =>
            array (
                'id' => 186,
                'city_name' => 'Zemamra',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            185 =>
            array (
                'id' => 187,
                'city_name' => 'Zrarda',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            186 =>
            array (
                'id' => 188,
                'city_name' => 'Ksar El kebir',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            187 =>
            array (
                'id' => 189,
                'city_name' => 'Sidi bennour',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            188 =>
            array (
                'id' => 190,
                'city_name' => 'Laakarta',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            189 =>
            array (
                'id' => 191,
                'city_name' => 'Laataouia',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            190 =>
            array (
                'id' => 192,
                'city_name' => 'Lagouira',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            191 =>
            array (
                'id' => 193,
                'city_name' => 'Lakhsas',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            192 =>
            array (
                'id' => 194,
                'city_name' => 'Lahraouine',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            193 =>
            array (
                'id' => 195,
                'city_name' => 'Al haouz',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            194 =>
            array (
                'id' => 196,
                'city_name' => 'Lqliaa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            195 =>
            array (
                'id' => 197,
                'city_name' => 'Mechra Bel Ksiri',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            196 =>
            array (
                'id' => 198,
                'city_name' => 'Missour',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            197 =>
            array (
                'id' => 199,
                'city_name' => 'Ouislane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            198 =>
            array (
                'id' => 200,
                'city_name' => 'Oued Zem',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            199 =>
            array (
                'id' => 201,
                'city_name' => 'M’Rirt',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            200 =>
            array (
                'id' => 202,
                'city_name' => 'Oued amlil',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            201 =>
            array (
                'id' => 203,
                'city_name' => 'Moulay Driss Zerhoun',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            202 =>
            array (
                'id' => 204,
                'city_name' => 'Aoulad Ayad',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            203 =>
            array (
                'id' => 205,
                'city_name' => 'Aoulad Berhil',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            204 =>
            array (
                'id' => 206,
                'city_name' => 'Oulad Ghadbane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            205 =>
            array (
                'id' => 207,
                'city_name' => 'Oulad M’Barek',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            206 =>
            array (
                'id' => 208,
                'city_name' => 'Oulad Tayeb',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            207 =>
            array (
                'id' => 209,
                'city_name' => 'Oulad teïma',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            208 =>
            array (
                'id' => 210,
                'city_name' => 'Oulmès',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            209 =>
            array (
                'id' => 211,
                'city_name' => 'Outat El Haj',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            210 =>
            array (
                'id' => 212,
                'city_name' => 'Ras El Aïn',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            211 =>
            array (
                'id' => 213,
                'city_name' => 'Ras El Ma',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            212 =>
            array (
                'id' => 214,
                'city_name' => 'Ribate El Kheïr',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            213 =>
            array (
                'id' => 215,
                'city_name' => 'Sabaa Aiyoun',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            214 =>
            array (
                'id' => 216,
                'city_name' => 'Asfi',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            215 =>
            array (
                'id' => 218,
                'city_name' => 'Sidi Boubker',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            216 =>
            array (
                'id' => 219,
                'city_name' => 'Sidi Bouknadel',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            217 =>
            array (
                'id' => 220,
                'city_name' => 'Sidi Kacem',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            218 =>
            array (
                'id' => 221,
                'city_name' => 'Sidi Lyamani',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            219 =>
            array (
                'id' => 222,
                'city_name' => 'Sidi rahhal',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            220 =>
            array (
                'id' => 227,
                'city_name' => 'Souk Sebt Oulad Nemma',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            221 =>
            array (
                'id' => 224,
                'city_name' => 'Rehamna',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            222 =>
            array (
                'id' => 225,
                'city_name' => 'Skoura',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            223 =>
            array (
                'id' => 226,
                'city_name' => 'Soualem',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            224 =>
            array (
                'id' => 228,
                'city_name' => 'Tahannaout',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            225 =>
            array (
                'id' => 229,
                'city_name' => 'Tahla',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            226 =>
            array (
                'id' => 230,
                'city_name' => 'Tamallalt',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            227 =>
            array (
                'id' => 231,
                'city_name' => 'Tinghir',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            228 =>
            array (
                'id' => 232,
                'city_name' => 'Tissa',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            229 =>
            array (
                'id' => 233,
                'city_name' => 'Tit Mellil',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            230 =>
            array (
                'id' => 234,
                'city_name' => 'Toulal',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            231 =>
            array (
                'id' => 235,
                'city_name' => 'Zag',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            232 =>
            array (
                'id' => 236,
                'city_name' => 'M\'diq',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            233 =>
            array (
                'id' => 237,
                'city_name' => 'Fnideq',
                'city_status' => 1,
                'is_principal' => 1,
            ),
            234 =>
            array (
                'id' => 238,
                'city_name' => 'Fahs anjra',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            235 =>
            array (
                'id' => 239,
                'city_name' => 'ouazzane',
                'city_status' => 1,
                'is_principal' => 0,
            ),
        ));


    }
}
