<?php

use Illuminate\Database\Seeder;

class TbldistritoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbldistrito')->delete();
        
        \DB::table('tbldistrito')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tblprovincia_id' => 1,
                'nombre' => 'CHACHAPOYAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tblprovincia_id' => 1,
                'nombre' => 'ASUNCION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tblprovincia_id' => 1,
                'nombre' => 'BALSAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tblprovincia_id' => 1,
                'nombre' => 'CHETO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tblprovincia_id' => 1,
                'nombre' => 'CHILIQUIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tblprovincia_id' => 1,
                'nombre' => 'CHUQUIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tblprovincia_id' => 1,
                'nombre' => 'GRANADA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tblprovincia_id' => 1,
                'nombre' => 'HUANCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tblprovincia_id' => 1,
                'nombre' => 'LA JALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tblprovincia_id' => 1,
                'nombre' => 'LEIMEBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tblprovincia_id' => 1,
                'nombre' => 'LEVANTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tblprovincia_id' => 1,
                'nombre' => 'MAGDALENA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tblprovincia_id' => 1,
                'nombre' => 'MARISCAL CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tblprovincia_id' => 1,
                'nombre' => 'MOLINOPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tblprovincia_id' => 1,
                'nombre' => 'MONTEVIDEO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tblprovincia_id' => 1,
                'nombre' => 'OLLEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tblprovincia_id' => 1,
                'nombre' => 'QUINJALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tblprovincia_id' => 1,
                'nombre' => 'SAN FRANCISCO DE DAGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tblprovincia_id' => 1,
                'nombre' => 'SAN ISIDRO DE MAINO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tblprovincia_id' => 1,
                'nombre' => 'SOLOCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tblprovincia_id' => 1,
                'nombre' => 'SONCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'tblprovincia_id' => 2,
                'nombre' => 'LA PECA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'tblprovincia_id' => 2,
                'nombre' => 'ARAMANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'tblprovincia_id' => 2,
                'nombre' => 'COPALLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'tblprovincia_id' => 2,
                'nombre' => 'EL PARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'tblprovincia_id' => 2,
                'nombre' => 'IMAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'tblprovincia_id' => 3,
                'nombre' => 'JUMBILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'tblprovincia_id' => 3,
                'nombre' => 'CHISQUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'tblprovincia_id' => 3,
                'nombre' => 'CHURUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'tblprovincia_id' => 3,
                'nombre' => 'COROSHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'tblprovincia_id' => 3,
                'nombre' => 'CUISPES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'tblprovincia_id' => 3,
                'nombre' => 'FLORIDA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'tblprovincia_id' => 3,
                'nombre' => 'JAZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'tblprovincia_id' => 3,
                'nombre' => 'RECTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'tblprovincia_id' => 3,
                'nombre' => 'SAN CARLOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'tblprovincia_id' => 3,
                'nombre' => 'SHIPASBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'tblprovincia_id' => 3,
                'nombre' => 'VALERA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'tblprovincia_id' => 3,
                'nombre' => 'YAMBRASBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'tblprovincia_id' => 4,
                'nombre' => 'NIEVA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'tblprovincia_id' => 4,
                'nombre' => 'EL CENEPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'tblprovincia_id' => 4,
                'nombre' => 'RIO SANTIAGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'tblprovincia_id' => 5,
                'nombre' => 'LAMUD',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'tblprovincia_id' => 5,
                'nombre' => 'CAMPORREDONDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'tblprovincia_id' => 5,
                'nombre' => 'COCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'tblprovincia_id' => 5,
                'nombre' => 'COLCAMAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'tblprovincia_id' => 5,
                'nombre' => 'CONILA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'tblprovincia_id' => 5,
                'nombre' => 'INGUILPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'tblprovincia_id' => 5,
                'nombre' => 'LONGUITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'tblprovincia_id' => 5,
                'nombre' => 'LONYA CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'tblprovincia_id' => 5,
                'nombre' => 'LUYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'tblprovincia_id' => 5,
                'nombre' => 'LUYA VIEJO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'tblprovincia_id' => 5,
                'nombre' => 'MARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'tblprovincia_id' => 5,
                'nombre' => 'OCALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'tblprovincia_id' => 5,
                'nombre' => 'OCUMAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'tblprovincia_id' => 5,
                'nombre' => 'PISUQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'tblprovincia_id' => 5,
                'nombre' => 'PROVIDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'tblprovincia_id' => 5,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'tblprovincia_id' => 5,
                'nombre' => 'SAN FRANCISCO DEL YESO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'tblprovincia_id' => 5,
                'nombre' => 'SAN JERONIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'tblprovincia_id' => 5,
                'nombre' => 'SAN JUAN DE LOPECANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'tblprovincia_id' => 5,
                'nombre' => 'SANTA CATALINA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'tblprovincia_id' => 5,
                'nombre' => 'SANTO TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'tblprovincia_id' => 5,
                'nombre' => 'TINGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'tblprovincia_id' => 5,
                'nombre' => 'TRITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'tblprovincia_id' => 6,
                'nombre' => 'SAN NICOLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'tblprovincia_id' => 6,
                'nombre' => 'CHIRIMOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'tblprovincia_id' => 6,
                'nombre' => 'COCHAMAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'tblprovincia_id' => 6,
                'nombre' => 'HUAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'tblprovincia_id' => 6,
                'nombre' => 'LIMABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'tblprovincia_id' => 6,
                'nombre' => 'LONGAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'tblprovincia_id' => 6,
                'nombre' => 'MARISCAL BENAVIDES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'tblprovincia_id' => 6,
                'nombre' => 'MILPUC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'tblprovincia_id' => 6,
                'nombre' => 'OMIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'tblprovincia_id' => 6,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'tblprovincia_id' => 6,
                'nombre' => 'TOTORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'tblprovincia_id' => 6,
                'nombre' => 'VISTA ALEGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'tblprovincia_id' => 7,
                'nombre' => 'BAGUA GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'tblprovincia_id' => 7,
                'nombre' => 'CAJARURO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'tblprovincia_id' => 7,
                'nombre' => 'CUMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'tblprovincia_id' => 7,
                'nombre' => 'EL MILAGRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'tblprovincia_id' => 7,
                'nombre' => 'JAMALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'tblprovincia_id' => 7,
                'nombre' => 'LONYA GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'tblprovincia_id' => 7,
                'nombre' => 'YAMON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'tblprovincia_id' => 8,
                'nombre' => 'HUARAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'tblprovincia_id' => 8,
                'nombre' => 'COCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'tblprovincia_id' => 8,
                'nombre' => 'COLCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'tblprovincia_id' => 8,
                'nombre' => 'HUANCHAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'tblprovincia_id' => 8,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'tblprovincia_id' => 8,
                'nombre' => 'JANGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'tblprovincia_id' => 8,
                'nombre' => 'LA LIBERTAD',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'tblprovincia_id' => 8,
                'nombre' => 'OLLEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'tblprovincia_id' => 8,
                'nombre' => 'PAMPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'tblprovincia_id' => 8,
                'nombre' => 'PARIACOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'tblprovincia_id' => 8,
                'nombre' => 'PIRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'tblprovincia_id' => 8,
                'nombre' => 'TARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'tblprovincia_id' => 9,
                'nombre' => 'AIJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'tblprovincia_id' => 9,
                'nombre' => 'CORIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'tblprovincia_id' => 9,
                'nombre' => 'HUACLLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'tblprovincia_id' => 9,
                'nombre' => 'LA MERCED',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'tblprovincia_id' => 9,
                'nombre' => 'SUCCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'tblprovincia_id' => 10,
                'nombre' => 'LLAMELLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'tblprovincia_id' => 10,
                'nombre' => 'ACZO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'tblprovincia_id' => 10,
                'nombre' => 'CHACCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'tblprovincia_id' => 10,
                'nombre' => 'CHINGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'tblprovincia_id' => 10,
                'nombre' => 'MIRGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'tblprovincia_id' => 10,
                'nombre' => 'SAN JUAN DE RONTOY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'tblprovincia_id' => 11,
                'nombre' => 'CHACAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'tblprovincia_id' => 11,
                'nombre' => 'ACOCHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'tblprovincia_id' => 12,
                'nombre' => 'CHIQUIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'tblprovincia_id' => 12,
                'nombre' => 'ABELARDO PARDO LEZAMETA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'tblprovincia_id' => 12,
                'nombre' => 'ANTONIO RAYMONDI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'tblprovincia_id' => 12,
                'nombre' => 'AQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'tblprovincia_id' => 12,
                'nombre' => 'CAJACAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'tblprovincia_id' => 12,
                'nombre' => 'CANIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'tblprovincia_id' => 12,
                'nombre' => 'COLQUIOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'tblprovincia_id' => 12,
                'nombre' => 'HUALLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'tblprovincia_id' => 12,
                'nombre' => 'HUASTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'tblprovincia_id' => 12,
                'nombre' => 'HUAYLLACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'tblprovincia_id' => 12,
                'nombre' => 'LA PRIMAVERA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'tblprovincia_id' => 12,
                'nombre' => 'MANGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'tblprovincia_id' => 12,
                'nombre' => 'PACLLON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'tblprovincia_id' => 12,
                'nombre' => 'SAN MIGUEL DE CORPANQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'tblprovincia_id' => 12,
                'nombre' => 'TICLLOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'tblprovincia_id' => 13,
                'nombre' => 'CARHUAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'tblprovincia_id' => 13,
                'nombre' => 'ACOPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'tblprovincia_id' => 13,
                'nombre' => 'AMASHCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'tblprovincia_id' => 13,
                'nombre' => 'ANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'tblprovincia_id' => 13,
                'nombre' => 'ATAQUERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'tblprovincia_id' => 13,
                'nombre' => 'MARCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'tblprovincia_id' => 13,
                'nombre' => 'PARIAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'tblprovincia_id' => 13,
                'nombre' => 'SAN MIGUEL DE ACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'tblprovincia_id' => 13,
                'nombre' => 'SHILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'tblprovincia_id' => 13,
                'nombre' => 'TINCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'tblprovincia_id' => 13,
                'nombre' => 'YUNGAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'tblprovincia_id' => 14,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'tblprovincia_id' => 14,
                'nombre' => 'SAN NICOLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'tblprovincia_id' => 14,
                'nombre' => 'YAUYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'tblprovincia_id' => 15,
                'nombre' => 'CASMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'tblprovincia_id' => 15,
                'nombre' => 'BUENA VISTA ALTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'tblprovincia_id' => 15,
                'nombre' => 'COMANDANTE NOEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'tblprovincia_id' => 15,
                'nombre' => 'YAUTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'tblprovincia_id' => 16,
                'nombre' => 'CORONGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'tblprovincia_id' => 16,
                'nombre' => 'ACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'tblprovincia_id' => 16,
                'nombre' => 'BAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'tblprovincia_id' => 16,
                'nombre' => 'CUSCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'tblprovincia_id' => 16,
                'nombre' => 'LA PAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'tblprovincia_id' => 16,
                'nombre' => 'YANAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'tblprovincia_id' => 16,
                'nombre' => 'YUPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'tblprovincia_id' => 17,
                'nombre' => 'HUARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'tblprovincia_id' => 17,
                'nombre' => 'ANRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'tblprovincia_id' => 17,
                'nombre' => 'CAJAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'tblprovincia_id' => 17,
                'nombre' => 'CHAVIN DE HUANTAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'tblprovincia_id' => 17,
                'nombre' => 'HUACACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'tblprovincia_id' => 17,
                'nombre' => 'HUACCHIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'tblprovincia_id' => 17,
                'nombre' => 'HUACHIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'tblprovincia_id' => 17,
                'nombre' => 'HUANTAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'tblprovincia_id' => 17,
                'nombre' => 'MASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'tblprovincia_id' => 17,
                'nombre' => 'PAUCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'tblprovincia_id' => 17,
                'nombre' => 'PONTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'tblprovincia_id' => 17,
                'nombre' => 'RAHUAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'tblprovincia_id' => 17,
                'nombre' => 'RAPAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'tblprovincia_id' => 17,
                'nombre' => 'SAN MARCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'tblprovincia_id' => 17,
                'nombre' => 'SAN PEDRO DE CHANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'tblprovincia_id' => 17,
                'nombre' => 'UCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'tblprovincia_id' => 18,
                'nombre' => 'HUARMEY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'tblprovincia_id' => 18,
                'nombre' => 'COCHAPETI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'tblprovincia_id' => 18,
                'nombre' => 'CULEBRAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'tblprovincia_id' => 18,
                'nombre' => 'HUAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'tblprovincia_id' => 18,
                'nombre' => 'MALVAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'tblprovincia_id' => 26,
                'nombre' => 'CARAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'tblprovincia_id' => 26,
                'nombre' => 'HUALLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'tblprovincia_id' => 26,
                'nombre' => 'HUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'tblprovincia_id' => 26,
                'nombre' => 'HUAYLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'tblprovincia_id' => 26,
                'nombre' => 'MATO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'tblprovincia_id' => 26,
                'nombre' => 'PAMPAROMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'tblprovincia_id' => 26,
                'nombre' => 'PUEBLO LIBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'tblprovincia_id' => 26,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'tblprovincia_id' => 26,
                'nombre' => 'SANTO TORIBIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'tblprovincia_id' => 26,
                'nombre' => 'YURACMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'tblprovincia_id' => 27,
                'nombre' => 'PISCOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'tblprovincia_id' => 27,
                'nombre' => 'CASCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'tblprovincia_id' => 27,
                'nombre' => 'ELEAZAR GUZMAN BARRON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'tblprovincia_id' => 27,
                'nombre' => 'FIDEL OLIVAS ESCUDERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'tblprovincia_id' => 27,
                'nombre' => 'LLAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'tblprovincia_id' => 27,
                'nombre' => 'LLUMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'tblprovincia_id' => 27,
                'nombre' => 'LUCMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'tblprovincia_id' => 27,
                'nombre' => 'MUSGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'tblprovincia_id' => 21,
                'nombre' => 'OCROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'tblprovincia_id' => 21,
                'nombre' => 'ACAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'tblprovincia_id' => 21,
                'nombre' => 'CAJAMARQUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'tblprovincia_id' => 21,
                'nombre' => 'CARHUAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'tblprovincia_id' => 21,
                'nombre' => 'COCHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'tblprovincia_id' => 21,
                'nombre' => 'CONGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'tblprovincia_id' => 21,
                'nombre' => 'LLIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'tblprovincia_id' => 21,
                'nombre' => 'SAN CRISTOBAL DE RAJAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'tblprovincia_id' => 21,
                'nombre' => 'SAN PEDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'tblprovincia_id' => 21,
                'nombre' => 'SANTIAGO DE CHILCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'tblprovincia_id' => 22,
                'nombre' => 'CABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'tblprovincia_id' => 22,
                'nombre' => 'BOLOGNESI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'tblprovincia_id' => 22,
                'nombre' => 'CONCHUCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'tblprovincia_id' => 22,
                'nombre' => 'HUACASCHUQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'tblprovincia_id' => 22,
                'nombre' => 'HUANDOVAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'tblprovincia_id' => 22,
                'nombre' => 'LACABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'tblprovincia_id' => 22,
                'nombre' => 'LLAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'tblprovincia_id' => 22,
                'nombre' => 'PALLASCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'tblprovincia_id' => 22,
                'nombre' => 'PAMPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'tblprovincia_id' => 22,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'tblprovincia_id' => 22,
                'nombre' => 'TAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'tblprovincia_id' => 23,
                'nombre' => 'POMABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'tblprovincia_id' => 23,
                'nombre' => 'HUAYLLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'tblprovincia_id' => 23,
                'nombre' => 'PAROBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'tblprovincia_id' => 23,
                'nombre' => 'QUINUABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'tblprovincia_id' => 24,
                'nombre' => 'RECUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'tblprovincia_id' => 24,
                'nombre' => 'CATAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'tblprovincia_id' => 24,
                'nombre' => 'COTAPARACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'tblprovincia_id' => 24,
                'nombre' => 'HUAYLLAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'tblprovincia_id' => 24,
                'nombre' => 'LLACLLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'tblprovincia_id' => 24,
                'nombre' => 'MARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'tblprovincia_id' => 24,
                'nombre' => 'PAMPAS CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'tblprovincia_id' => 24,
                'nombre' => 'PARARIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'tblprovincia_id' => 24,
                'nombre' => 'TAPACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'tblprovincia_id' => 24,
                'nombre' => 'TICAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'tblprovincia_id' => 25,
                'nombre' => 'CHIMBOTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'tblprovincia_id' => 25,
                'nombre' => 'CACERES DEL PERU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'tblprovincia_id' => 25,
                'nombre' => 'COISHCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'tblprovincia_id' => 25,
                'nombre' => 'MACATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'tblprovincia_id' => 25,
                'nombre' => 'MORO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'tblprovincia_id' => 25,
                'nombre' => 'NEPE&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'tblprovincia_id' => 25,
                'nombre' => 'SAMANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'tblprovincia_id' => 25,
                'nombre' => 'SANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'tblprovincia_id' => 25,
                'nombre' => 'NUEVO CHIMBOTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'tblprovincia_id' => 26,
                'nombre' => 'SIHUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'tblprovincia_id' => 26,
                'nombre' => 'ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'tblprovincia_id' => 26,
                'nombre' => 'ALFONSO UGARTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'tblprovincia_id' => 26,
                'nombre' => 'CASHAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'tblprovincia_id' => 26,
                'nombre' => 'CHINGALPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'tblprovincia_id' => 26,
                'nombre' => 'HUAYLLABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'tblprovincia_id' => 26,
                'nombre' => 'QUICHES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'tblprovincia_id' => 26,
                'nombre' => 'RAGASH',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'tblprovincia_id' => 26,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'tblprovincia_id' => 26,
                'nombre' => 'SICSIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'tblprovincia_id' => 27,
                'nombre' => 'YUNGAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'tblprovincia_id' => 27,
                'nombre' => 'CASCAPARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'tblprovincia_id' => 27,
                'nombre' => 'MANCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'tblprovincia_id' => 27,
                'nombre' => 'MATACOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'tblprovincia_id' => 27,
                'nombre' => 'QUILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'tblprovincia_id' => 27,
                'nombre' => 'RANRAHIRCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'tblprovincia_id' => 27,
                'nombre' => 'SHUPLUY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'tblprovincia_id' => 27,
                'nombre' => 'YANAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'tblprovincia_id' => 28,
                'nombre' => 'ABANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'tblprovincia_id' => 28,
                'nombre' => 'CHACOCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'tblprovincia_id' => 28,
                'nombre' => 'CIRCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'tblprovincia_id' => 28,
                'nombre' => 'CURAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'tblprovincia_id' => 28,
                'nombre' => 'HUANIPACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'tblprovincia_id' => 28,
                'nombre' => 'LAMBRAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'tblprovincia_id' => 28,
                'nombre' => 'PICHIRHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'tblprovincia_id' => 28,
                'nombre' => 'SAN PEDRO DE CACHORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'tblprovincia_id' => 28,
                'nombre' => 'TAMBURCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'tblprovincia_id' => 29,
                'nombre' => 'ANDAHUAYLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'tblprovincia_id' => 29,
                'nombre' => 'ANDARAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'tblprovincia_id' => 29,
                'nombre' => 'CHIARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'tblprovincia_id' => 29,
                'nombre' => 'HUANCARAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'tblprovincia_id' => 29,
                'nombre' => 'HUANCARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'tblprovincia_id' => 29,
                'nombre' => 'HUAYANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'tblprovincia_id' => 29,
                'nombre' => 'KISHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'tblprovincia_id' => 29,
                'nombre' => 'PACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'tblprovincia_id' => 29,
                'nombre' => 'PACUCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'tblprovincia_id' => 29,
                'nombre' => 'PAMPACHIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'tblprovincia_id' => 29,
                'nombre' => 'POMACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'tblprovincia_id' => 29,
                'nombre' => 'SAN ANTONIO DE CACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'tblprovincia_id' => 29,
                'nombre' => 'SAN JERONIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'tblprovincia_id' => 29,
                'nombre' => 'SAN MIGUEL DE CHACCRAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'tblprovincia_id' => 29,
                'nombre' => 'SANTA MARIA DE CHICMO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'tblprovincia_id' => 29,
                'nombre' => 'TALAVERA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'tblprovincia_id' => 29,
                'nombre' => 'TUMAY HUARACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'tblprovincia_id' => 29,
                'nombre' => 'TURPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'tblprovincia_id' => 29,
                'nombre' => 'KAQUIABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'tblprovincia_id' => 30,
                'nombre' => 'ANTABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'tblprovincia_id' => 30,
                'nombre' => 'EL ORO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'tblprovincia_id' => 30,
                'nombre' => 'HUAQUIRCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'tblprovincia_id' => 30,
                'nombre' => 'JUAN ESPINOZA MEDRANO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'tblprovincia_id' => 30,
                'nombre' => 'OROPESA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'tblprovincia_id' => 30,
                'nombre' => 'PACHACONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'tblprovincia_id' => 30,
                'nombre' => 'SABAINO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'tblprovincia_id' => 31,
                'nombre' => 'CHALHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'tblprovincia_id' => 31,
                'nombre' => 'CAPAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'tblprovincia_id' => 31,
                'nombre' => 'CARAYBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'tblprovincia_id' => 31,
                'nombre' => 'CHAPIMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'tblprovincia_id' => 31,
                'nombre' => 'COLCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'tblprovincia_id' => 31,
                'nombre' => 'COTARUSE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'tblprovincia_id' => 31,
                'nombre' => 'HUAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'tblprovincia_id' => 31,
                'nombre' => 'JUSTO APU SAHUARAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'tblprovincia_id' => 31,
                'nombre' => 'LUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'tblprovincia_id' => 31,
                'nombre' => 'POCOHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'tblprovincia_id' => 31,
                'nombre' => 'SAN JUAN DE CHAC&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'tblprovincia_id' => 31,
                'nombre' => 'SA&Ntilde;AYCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'tblprovincia_id' => 31,
                'nombre' => 'SORAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'tblprovincia_id' => 31,
                'nombre' => 'TAPAIRIHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'tblprovincia_id' => 31,
                'nombre' => 'TINTAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'tblprovincia_id' => 31,
                'nombre' => 'TORAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'tblprovincia_id' => 31,
                'nombre' => 'YANACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'tblprovincia_id' => 32,
                'nombre' => 'TAMBOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'tblprovincia_id' => 32,
                'nombre' => 'COTABAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'tblprovincia_id' => 32,
                'nombre' => 'COYLLURQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'tblprovincia_id' => 32,
                'nombre' => 'HAQUIRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'tblprovincia_id' => 32,
                'nombre' => 'MARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'tblprovincia_id' => 32,
                'nombre' => 'CHALLHUAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'tblprovincia_id' => 33,
                'nombre' => 'CHINCHEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'tblprovincia_id' => 33,
                'nombre' => 'ANCO-HUALLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'tblprovincia_id' => 33,
                'nombre' => 'COCHARCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'tblprovincia_id' => 33,
                'nombre' => 'HUACCANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'tblprovincia_id' => 33,
                'nombre' => 'OCOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'tblprovincia_id' => 33,
                'nombre' => 'ONGOY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'tblprovincia_id' => 33,
                'nombre' => 'URANMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'tblprovincia_id' => 33,
                'nombre' => 'RANRACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'tblprovincia_id' => 34,
                'nombre' => 'CHUQUIBAMBILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'tblprovincia_id' => 34,
                'nombre' => 'CURPAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'tblprovincia_id' => 34,
                'nombre' => 'GAMARRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'tblprovincia_id' => 34,
                'nombre' => 'HUAYLLATI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'tblprovincia_id' => 34,
                'nombre' => 'MAMARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'tblprovincia_id' => 34,
                'nombre' => 'MICAELA BASTIDAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'tblprovincia_id' => 34,
                'nombre' => 'PATAYPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'tblprovincia_id' => 34,
                'nombre' => 'PROGRESO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'tblprovincia_id' => 34,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'tblprovincia_id' => 34,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'tblprovincia_id' => 34,
                'nombre' => 'TURPAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'tblprovincia_id' => 34,
                'nombre' => 'VILCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'tblprovincia_id' => 34,
                'nombre' => 'VIRUNDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'tblprovincia_id' => 34,
                'nombre' => 'CURASCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'tblprovincia_id' => 35,
                'nombre' => 'AREQUIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'tblprovincia_id' => 35,
                'nombre' => 'ALTO SELVA ALEGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'tblprovincia_id' => 35,
                'nombre' => 'CAYMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'tblprovincia_id' => 35,
                'nombre' => 'CERRO COLORADO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'tblprovincia_id' => 35,
                'nombre' => 'CHARACATO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'tblprovincia_id' => 35,
                'nombre' => 'CHIGUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'tblprovincia_id' => 35,
                'nombre' => 'JACOBO HUNTER',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'tblprovincia_id' => 35,
                'nombre' => 'LA JOYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'tblprovincia_id' => 35,
                'nombre' => 'MARIANO MELGAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'tblprovincia_id' => 35,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'tblprovincia_id' => 35,
                'nombre' => 'MOLLEBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'tblprovincia_id' => 35,
                'nombre' => 'PAUCARPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'tblprovincia_id' => 35,
                'nombre' => 'POCSI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'tblprovincia_id' => 35,
                'nombre' => 'POLOBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'tblprovincia_id' => 35,
                'nombre' => 'QUEQUE&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'tblprovincia_id' => 35,
                'nombre' => 'SABANDIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'tblprovincia_id' => 35,
                'nombre' => 'SACHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'tblprovincia_id' => 35,
                'nombre' => 'SAN JUAN DE SIGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'tblprovincia_id' => 35,
                'nombre' => 'SAN JUAN DE TARUCANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'tblprovincia_id' => 35,
                'nombre' => 'SANTA ISABEL DE SIGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'tblprovincia_id' => 35,
                'nombre' => 'SANTA RITA DE SIGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'tblprovincia_id' => 35,
                'nombre' => 'SOCABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'tblprovincia_id' => 35,
                'nombre' => 'TIABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'tblprovincia_id' => 35,
                'nombre' => 'UCHUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'tblprovincia_id' => 35,
                'nombre' => 'VITOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'tblprovincia_id' => 35,
                'nombre' => 'YANAHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'tblprovincia_id' => 35,
                'nombre' => 'YARABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'tblprovincia_id' => 35,
                'nombre' => 'YURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'tblprovincia_id' => 35,
                'nombre' => 'JOSE LUIS BUSTAMANTE Y RIVERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'tblprovincia_id' => 36,
                'nombre' => 'CAMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'tblprovincia_id' => 36,
                'nombre' => 'JOSE MARIA QUIMPER',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'tblprovincia_id' => 36,
                'nombre' => 'MARIANO NICOLAS VALCARCEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'tblprovincia_id' => 36,
                'nombre' => 'MARISCAL CACERES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'tblprovincia_id' => 36,
                'nombre' => 'NICOLAS DE PIEROLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'tblprovincia_id' => 36,
                'nombre' => 'OCO&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'tblprovincia_id' => 36,
                'nombre' => 'QUILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'tblprovincia_id' => 36,
                'nombre' => 'SAMUEL PASTOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'tblprovincia_id' => 37,
                'nombre' => 'CARAVELI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'tblprovincia_id' => 37,
                'nombre' => 'ACARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'tblprovincia_id' => 37,
                'nombre' => 'ATICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'tblprovincia_id' => 37,
                'nombre' => 'ATIQUIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'tblprovincia_id' => 37,
                'nombre' => 'BELLA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'tblprovincia_id' => 37,
                'nombre' => 'CAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'tblprovincia_id' => 37,
                'nombre' => 'CHALA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'tblprovincia_id' => 37,
                'nombre' => 'CHAPARRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'tblprovincia_id' => 37,
                'nombre' => 'HUANUHUANU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'tblprovincia_id' => 37,
                'nombre' => 'JAQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'tblprovincia_id' => 37,
                'nombre' => 'LOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'tblprovincia_id' => 37,
                'nombre' => 'QUICACHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'tblprovincia_id' => 37,
                'nombre' => 'YAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'tblprovincia_id' => 38,
                'nombre' => 'APLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'tblprovincia_id' => 38,
                'nombre' => 'ANDAGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'tblprovincia_id' => 38,
                'nombre' => 'AYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'tblprovincia_id' => 38,
                'nombre' => 'CHACHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'tblprovincia_id' => 38,
                'nombre' => 'CHILCAYMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'tblprovincia_id' => 38,
                'nombre' => 'CHOCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'tblprovincia_id' => 38,
                'nombre' => 'HUANCARQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'tblprovincia_id' => 38,
                'nombre' => 'MACHAGUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'tblprovincia_id' => 38,
                'nombre' => 'ORCOPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'tblprovincia_id' => 38,
                'nombre' => 'PAMPACOLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'tblprovincia_id' => 38,
                'nombre' => 'TIPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'tblprovincia_id' => 38,
                'nombre' => 'U&Ntilde;ON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'tblprovincia_id' => 38,
                'nombre' => 'URACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'tblprovincia_id' => 38,
                'nombre' => 'VIRACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'tblprovincia_id' => 39,
                'nombre' => 'CHIVAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'tblprovincia_id' => 39,
                'nombre' => 'ACHOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'tblprovincia_id' => 39,
                'nombre' => 'CABANACONDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'tblprovincia_id' => 39,
                'nombre' => 'CALLALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'tblprovincia_id' => 39,
                'nombre' => 'CAYLLOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'tblprovincia_id' => 39,
                'nombre' => 'COPORAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'tblprovincia_id' => 39,
                'nombre' => 'HUAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'tblprovincia_id' => 39,
                'nombre' => 'HUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'tblprovincia_id' => 39,
                'nombre' => 'ICHUPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'tblprovincia_id' => 39,
                'nombre' => 'LARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'tblprovincia_id' => 39,
                'nombre' => 'LLUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'tblprovincia_id' => 39,
                'nombre' => 'MACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'tblprovincia_id' => 39,
                'nombre' => 'MADRIGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'tblprovincia_id' => 39,
                'nombre' => 'SAN ANTONIO DE CHUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'tblprovincia_id' => 39,
                'nombre' => 'SIBAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'tblprovincia_id' => 39,
                'nombre' => 'TAPAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'tblprovincia_id' => 39,
                'nombre' => 'TISCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'tblprovincia_id' => 39,
                'nombre' => 'TUTI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'tblprovincia_id' => 39,
                'nombre' => 'YANQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'tblprovincia_id' => 39,
                'nombre' => 'MAJES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'tblprovincia_id' => 40,
                'nombre' => 'CHUQUIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'tblprovincia_id' => 40,
                'nombre' => 'ANDARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'tblprovincia_id' => 40,
                'nombre' => 'CAYARANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'tblprovincia_id' => 40,
                'nombre' => 'CHICHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'tblprovincia_id' => 40,
                'nombre' => 'IRAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'tblprovincia_id' => 40,
                'nombre' => 'RIO GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'tblprovincia_id' => 40,
                'nombre' => 'SALAMANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'tblprovincia_id' => 40,
                'nombre' => 'YANAQUIHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'tblprovincia_id' => 41,
                'nombre' => 'MOLLENDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'tblprovincia_id' => 41,
                'nombre' => 'COCACHACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'tblprovincia_id' => 41,
                'nombre' => 'DEAN VALDIVIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'tblprovincia_id' => 41,
                'nombre' => 'ISLAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'tblprovincia_id' => 41,
                'nombre' => 'MEJIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'tblprovincia_id' => 41,
                'nombre' => 'PUNTA DE BOMBON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'tblprovincia_id' => 42,
                'nombre' => 'COTAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'tblprovincia_id' => 42,
                'nombre' => 'ALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'tblprovincia_id' => 42,
                'nombre' => 'CHARCANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'tblprovincia_id' => 42,
                'nombre' => 'HUAYNACOTAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'tblprovincia_id' => 42,
                'nombre' => 'PAMPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'tblprovincia_id' => 42,
                'nombre' => 'PUYCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'tblprovincia_id' => 42,
                'nombre' => 'QUECHUALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'tblprovincia_id' => 42,
                'nombre' => 'SAYLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'tblprovincia_id' => 42,
                'nombre' => 'TAURIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'tblprovincia_id' => 42,
                'nombre' => 'TOMEPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'tblprovincia_id' => 42,
                'nombre' => 'TORO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'tblprovincia_id' => 43,
                'nombre' => 'AYACUCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'tblprovincia_id' => 43,
                'nombre' => 'ACOCRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'tblprovincia_id' => 43,
                'nombre' => 'ACOS VINCHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'tblprovincia_id' => 43,
                'nombre' => 'CARMEN ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'tblprovincia_id' => 43,
                'nombre' => 'CHIARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'tblprovincia_id' => 43,
                'nombre' => 'OCROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'tblprovincia_id' => 43,
                'nombre' => 'PACAYCASA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'tblprovincia_id' => 43,
                'nombre' => 'QUINUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'tblprovincia_id' => 43,
                'nombre' => 'SAN JOSE DE TICLLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'tblprovincia_id' => 43,
                'nombre' => 'SAN JUAN BAUTISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'tblprovincia_id' => 43,
                'nombre' => 'SANTIAGO DE PISCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'tblprovincia_id' => 43,
                'nombre' => 'SOCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'tblprovincia_id' => 43,
                'nombre' => 'TAMBILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'tblprovincia_id' => 43,
                'nombre' => 'VINCHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'tblprovincia_id' => 43,
                'nombre' => 'JESUS NAZARENO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'tblprovincia_id' => 44,
                'nombre' => 'CANGALLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'tblprovincia_id' => 44,
                'nombre' => 'CHUSCHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'tblprovincia_id' => 44,
                'nombre' => 'LOS MOROCHUCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'tblprovincia_id' => 44,
                'nombre' => 'MARIA PARADO DE BELLIDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'tblprovincia_id' => 44,
                'nombre' => 'PARAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'tblprovincia_id' => 44,
                'nombre' => 'TOTOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'tblprovincia_id' => 45,
                'nombre' => 'SANCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'tblprovincia_id' => 45,
                'nombre' => 'CARAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'tblprovincia_id' => 45,
                'nombre' => 'SACSAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'tblprovincia_id' => 45,
                'nombre' => 'SANTIAGO DE LUCANAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'tblprovincia_id' => 46,
                'nombre' => 'HUANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'tblprovincia_id' => 46,
                'nombre' => 'AYAHUANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'tblprovincia_id' => 46,
                'nombre' => 'HUAMANGUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'tblprovincia_id' => 46,
                'nombre' => 'IGUAIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'tblprovincia_id' => 46,
                'nombre' => 'LURICOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'tblprovincia_id' => 46,
                'nombre' => 'SANTILLANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'tblprovincia_id' => 46,
                'nombre' => 'SIVIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'tblprovincia_id' => 46,
                'nombre' => 'LLOCHEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'tblprovincia_id' => 47,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'tblprovincia_id' => 47,
                'nombre' => 'ANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'tblprovincia_id' => 47,
                'nombre' => 'AYNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'tblprovincia_id' => 47,
                'nombre' => 'CHILCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'tblprovincia_id' => 47,
                'nombre' => 'CHUNGUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'tblprovincia_id' => 47,
                'nombre' => 'LUIS CARRANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'tblprovincia_id' => 47,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'tblprovincia_id' => 47,
                'nombre' => 'TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'tblprovincia_id' => 48,
                'nombre' => 'PUQUIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'tblprovincia_id' => 48,
                'nombre' => 'AUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'tblprovincia_id' => 48,
                'nombre' => 'CABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'tblprovincia_id' => 48,
                'nombre' => 'CARMEN SALCEDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'tblprovincia_id' => 48,
                'nombre' => 'CHAVI&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'tblprovincia_id' => 48,
                'nombre' => 'CHIPAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'tblprovincia_id' => 48,
                'nombre' => 'HUAC-HUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'tblprovincia_id' => 48,
                'nombre' => 'LARAMATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'tblprovincia_id' => 48,
                'nombre' => 'LEONCIO PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'tblprovincia_id' => 48,
                'nombre' => 'LLAUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'tblprovincia_id' => 48,
                'nombre' => 'LUCANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'tblprovincia_id' => 48,
                'nombre' => 'OCA&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'tblprovincia_id' => 48,
                'nombre' => 'OTOCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'tblprovincia_id' => 48,
                'nombre' => 'SAISA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'tblprovincia_id' => 48,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'tblprovincia_id' => 48,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'tblprovincia_id' => 48,
                'nombre' => 'SAN PEDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'tblprovincia_id' => 48,
                'nombre' => 'SAN PEDRO DE PALCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'tblprovincia_id' => 48,
                'nombre' => 'SANCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'tblprovincia_id' => 48,
                'nombre' => 'SANTA ANA DE HUAYCAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'tblprovincia_id' => 48,
                'nombre' => 'SANTA LUCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('tbldistrito')->insert(array (
            0 => 
            array (
                'id' => 501,
                'tblprovincia_id' => 49,
                'nombre' => 'CORACORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'tblprovincia_id' => 49,
                'nombre' => 'CHUMPI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'tblprovincia_id' => 49,
                'nombre' => 'CORONEL CASTA&Ntilde;EDA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'tblprovincia_id' => 49,
                'nombre' => 'PACAPAUSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'tblprovincia_id' => 49,
                'nombre' => 'PULLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'tblprovincia_id' => 49,
                'nombre' => 'PUYUSCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'tblprovincia_id' => 49,
                'nombre' => 'SAN FRANCISCO DE RAVACAYCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'tblprovincia_id' => 49,
                'nombre' => 'UPAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'tblprovincia_id' => 50,
                'nombre' => 'PAUSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'tblprovincia_id' => 50,
                'nombre' => 'COLTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'tblprovincia_id' => 50,
                'nombre' => 'CORCULLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'tblprovincia_id' => 50,
                'nombre' => 'LAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'tblprovincia_id' => 50,
                'nombre' => 'MARCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'tblprovincia_id' => 50,
                'nombre' => 'OYOLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'tblprovincia_id' => 50,
                'nombre' => 'PARARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'tblprovincia_id' => 50,
                'nombre' => 'SAN JAVIER DE ALPABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'tblprovincia_id' => 50,
                'nombre' => 'SAN JOSE DE USHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'tblprovincia_id' => 50,
                'nombre' => 'SARA SARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'tblprovincia_id' => 51,
                'nombre' => 'QUEROBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'tblprovincia_id' => 51,
                'nombre' => 'BELEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'tblprovincia_id' => 51,
                'nombre' => 'CHALCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'tblprovincia_id' => 51,
                'nombre' => 'CHILCAYOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'tblprovincia_id' => 51,
                'nombre' => 'HUACA&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'tblprovincia_id' => 51,
                'nombre' => 'MORCOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'tblprovincia_id' => 51,
                'nombre' => 'PAICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'tblprovincia_id' => 51,
                'nombre' => 'SAN PEDRO DE LARCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'tblprovincia_id' => 51,
                'nombre' => 'SAN SALVADOR DE QUIJE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'tblprovincia_id' => 51,
                'nombre' => 'SANTIAGO DE PAUCARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'tblprovincia_id' => 51,
                'nombre' => 'SORAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'tblprovincia_id' => 52,
                'nombre' => 'HUANCAPI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'tblprovincia_id' => 52,
                'nombre' => 'ALCAMENCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'tblprovincia_id' => 52,
                'nombre' => 'APONGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'tblprovincia_id' => 52,
                'nombre' => 'ASQUIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'tblprovincia_id' => 52,
                'nombre' => 'CANARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'tblprovincia_id' => 52,
                'nombre' => 'CAYARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'tblprovincia_id' => 52,
                'nombre' => 'COLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'tblprovincia_id' => 52,
                'nombre' => 'HUAMANQUIQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'tblprovincia_id' => 52,
                'nombre' => 'HUANCARAYLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'tblprovincia_id' => 52,
                'nombre' => 'HUAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'tblprovincia_id' => 52,
                'nombre' => 'SARHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'tblprovincia_id' => 52,
                'nombre' => 'VILCANCHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'tblprovincia_id' => 53,
                'nombre' => 'VILCAS HUAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'tblprovincia_id' => 53,
                'nombre' => 'ACCOMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'tblprovincia_id' => 53,
                'nombre' => 'CARHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'tblprovincia_id' => 53,
                'nombre' => 'CONCEPCION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'tblprovincia_id' => 53,
                'nombre' => 'HUAMBALPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'tblprovincia_id' => 53,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'tblprovincia_id' => 53,
                'nombre' => 'SAURAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'tblprovincia_id' => 53,
                'nombre' => 'VISCHONGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'tblprovincia_id' => 54,
                'nombre' => 'CAJAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'tblprovincia_id' => 54,
                'nombre' => 'CAJAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'tblprovincia_id' => 54,
                'nombre' => 'ASUNCION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'tblprovincia_id' => 54,
                'nombre' => 'CHETILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'tblprovincia_id' => 54,
                'nombre' => 'COSPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'tblprovincia_id' => 54,
                'nombre' => 'ENCA&Ntilde;ADA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'tblprovincia_id' => 54,
                'nombre' => 'JESUS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'tblprovincia_id' => 54,
                'nombre' => 'LLACANORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'tblprovincia_id' => 54,
                'nombre' => 'LOS BA&Ntilde;OS DEL INCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'tblprovincia_id' => 54,
                'nombre' => 'MAGDALENA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'tblprovincia_id' => 54,
                'nombre' => 'MATARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'tblprovincia_id' => 54,
                'nombre' => 'NAMORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'tblprovincia_id' => 54,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'tblprovincia_id' => 55,
                'nombre' => 'CAJABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'tblprovincia_id' => 55,
                'nombre' => 'CACHACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'tblprovincia_id' => 55,
                'nombre' => 'CONDEBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'tblprovincia_id' => 55,
                'nombre' => 'SITACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'tblprovincia_id' => 56,
                'nombre' => 'CELENDIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'tblprovincia_id' => 56,
                'nombre' => 'CHUMUCH',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'tblprovincia_id' => 56,
                'nombre' => 'CORTEGANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'tblprovincia_id' => 56,
                'nombre' => 'HUASMIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'tblprovincia_id' => 56,
                'nombre' => 'JORGE CHAVEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'tblprovincia_id' => 56,
                'nombre' => 'JOSE GALVEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'tblprovincia_id' => 56,
                'nombre' => 'MIGUEL IGLESIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'tblprovincia_id' => 56,
                'nombre' => 'OXAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'tblprovincia_id' => 56,
                'nombre' => 'SOROCHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'tblprovincia_id' => 56,
                'nombre' => 'SUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'tblprovincia_id' => 56,
                'nombre' => 'UTCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'tblprovincia_id' => 56,
                'nombre' => 'LA LIBERTAD DE PALLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'tblprovincia_id' => 57,
                'nombre' => 'CHOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'tblprovincia_id' => 57,
                'nombre' => 'ANGUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'tblprovincia_id' => 57,
                'nombre' => 'CHADIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'tblprovincia_id' => 57,
                'nombre' => 'CHIGUIRIP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'tblprovincia_id' => 57,
                'nombre' => 'CHIMBAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'tblprovincia_id' => 57,
                'nombre' => 'CHOROPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'tblprovincia_id' => 57,
                'nombre' => 'COCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'tblprovincia_id' => 57,
                'nombre' => 'CONCHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'tblprovincia_id' => 57,
                'nombre' => 'HUAMBOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'tblprovincia_id' => 57,
                'nombre' => 'LAJAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'tblprovincia_id' => 57,
                'nombre' => 'LLAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'tblprovincia_id' => 57,
                'nombre' => 'MIRACOSTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'tblprovincia_id' => 57,
                'nombre' => 'PACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'tblprovincia_id' => 57,
                'nombre' => 'PION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'tblprovincia_id' => 57,
                'nombre' => 'QUEROCOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'tblprovincia_id' => 57,
                'nombre' => 'SAN JUAN DE LICUPIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'tblprovincia_id' => 57,
                'nombre' => 'TACABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'tblprovincia_id' => 57,
                'nombre' => 'TOCMOCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'tblprovincia_id' => 57,
                'nombre' => 'CHALAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'tblprovincia_id' => 58,
                'nombre' => 'CONTUMAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'tblprovincia_id' => 58,
                'nombre' => 'CHILETE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'tblprovincia_id' => 58,
                'nombre' => 'CUPISNIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'tblprovincia_id' => 58,
                'nombre' => 'GUZMANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'tblprovincia_id' => 58,
                'nombre' => 'SAN BENITO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'tblprovincia_id' => 58,
                'nombre' => 'SANTA CRUZ DE TOLED',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'tblprovincia_id' => 58,
                'nombre' => 'TANTARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'tblprovincia_id' => 58,
                'nombre' => 'YONAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'tblprovincia_id' => 59,
                'nombre' => 'CUTERVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'tblprovincia_id' => 59,
                'nombre' => 'CALLAYUC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'tblprovincia_id' => 59,
                'nombre' => 'CHOROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'tblprovincia_id' => 59,
                'nombre' => 'CUJILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'tblprovincia_id' => 59,
                'nombre' => 'LA RAMADA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'tblprovincia_id' => 59,
                'nombre' => 'PIMPINGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'tblprovincia_id' => 59,
                'nombre' => 'QUEROCOTILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'tblprovincia_id' => 59,
                'nombre' => 'SAN ANDRES DE CUTERVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'tblprovincia_id' => 59,
                'nombre' => 'SAN JUAN DE CUTERVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'tblprovincia_id' => 59,
                'nombre' => 'SAN LUIS DE LUCMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'tblprovincia_id' => 59,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'tblprovincia_id' => 59,
                'nombre' => 'SANTO DOMINGO DE LA CAPILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'tblprovincia_id' => 59,
                'nombre' => 'SANTO TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'tblprovincia_id' => 59,
                'nombre' => 'SOCOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'tblprovincia_id' => 59,
                'nombre' => 'TORIBIO CASANOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'tblprovincia_id' => 60,
                'nombre' => 'BAMBAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'tblprovincia_id' => 60,
                'nombre' => 'CHUGUR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'tblprovincia_id' => 60,
                'nombre' => 'HUALGAYOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'tblprovincia_id' => 61,
                'nombre' => 'JAEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'tblprovincia_id' => 61,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'tblprovincia_id' => 61,
                'nombre' => 'CHONTALI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'tblprovincia_id' => 61,
                'nombre' => 'COLASAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'tblprovincia_id' => 61,
                'nombre' => 'HUABAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'tblprovincia_id' => 61,
                'nombre' => 'LAS PIRIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'tblprovincia_id' => 61,
                'nombre' => 'POMAHUACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'tblprovincia_id' => 61,
                'nombre' => 'PUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'tblprovincia_id' => 61,
                'nombre' => 'SALLIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'tblprovincia_id' => 61,
                'nombre' => 'SAN FELIPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'tblprovincia_id' => 61,
                'nombre' => 'SAN JOSE DEL ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'tblprovincia_id' => 61,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'tblprovincia_id' => 62,
                'nombre' => 'SAN IGNACIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'tblprovincia_id' => 62,
                'nombre' => 'CHIRINOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'tblprovincia_id' => 62,
                'nombre' => 'HUARANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'tblprovincia_id' => 62,
                'nombre' => 'LA COIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'tblprovincia_id' => 62,
                'nombre' => 'NAMBALLE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'tblprovincia_id' => 62,
                'nombre' => 'SAN JOSE DE LOURDES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'tblprovincia_id' => 62,
                'nombre' => 'TABACONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'tblprovincia_id' => 63,
                'nombre' => 'PEDRO GALVEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'tblprovincia_id' => 63,
                'nombre' => 'CHANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'tblprovincia_id' => 63,
                'nombre' => 'EDUARDO VILLANUEVA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'tblprovincia_id' => 63,
                'nombre' => 'GREGORIO PITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'tblprovincia_id' => 63,
                'nombre' => 'ICHOCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'tblprovincia_id' => 63,
                'nombre' => 'JOSE MANUEL QUIROZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'tblprovincia_id' => 63,
                'nombre' => 'JOSE SABOGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'tblprovincia_id' => 64,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'tblprovincia_id' => 64,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'tblprovincia_id' => 64,
                'nombre' => 'BOLIVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'tblprovincia_id' => 64,
                'nombre' => 'CALQUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'tblprovincia_id' => 64,
                'nombre' => 'CATILLUC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'tblprovincia_id' => 64,
                'nombre' => 'EL PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'tblprovincia_id' => 64,
                'nombre' => 'LA FLORIDA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'tblprovincia_id' => 64,
                'nombre' => 'LLAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'tblprovincia_id' => 64,
                'nombre' => 'NANCHOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'tblprovincia_id' => 64,
                'nombre' => 'NIEPOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'tblprovincia_id' => 64,
                'nombre' => 'SAN GREGORIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'tblprovincia_id' => 64,
                'nombre' => 'SAN SILVESTRE DE COCHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'tblprovincia_id' => 64,
                'nombre' => 'TONGOD',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'tblprovincia_id' => 64,
                'nombre' => 'UNION AGUA BLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'tblprovincia_id' => 65,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'tblprovincia_id' => 65,
                'nombre' => 'SAN BERNARDINO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'tblprovincia_id' => 65,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'tblprovincia_id' => 65,
                'nombre' => 'TUMBADEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'tblprovincia_id' => 66,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'tblprovincia_id' => 66,
                'nombre' => 'ANDABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'tblprovincia_id' => 66,
                'nombre' => 'CATACHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'tblprovincia_id' => 66,
                'nombre' => 'CHANCAYBA&Ntilde;OS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'tblprovincia_id' => 66,
                'nombre' => 'LA ESPERANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'tblprovincia_id' => 66,
                'nombre' => 'NINABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'tblprovincia_id' => 66,
                'nombre' => 'PULAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'tblprovincia_id' => 66,
                'nombre' => 'SAUCEPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'tblprovincia_id' => 66,
                'nombre' => 'SEXI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'tblprovincia_id' => 66,
                'nombre' => 'UTICYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'tblprovincia_id' => 66,
                'nombre' => 'YAUYUCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'tblprovincia_id' => 67,
                'nombre' => 'CALLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'tblprovincia_id' => 67,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'tblprovincia_id' => 67,
                'nombre' => 'CARMEN DE LA LEGUA REYNOSO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'tblprovincia_id' => 67,
                'nombre' => 'LA PERLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'tblprovincia_id' => 67,
                'nombre' => 'LA PUNTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'tblprovincia_id' => 67,
                'nombre' => 'VENTANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'tblprovincia_id' => 67,
                'nombre' => 'CUSCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'tblprovincia_id' => 67,
                'nombre' => 'CCORCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'tblprovincia_id' => 67,
                'nombre' => 'POROY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'tblprovincia_id' => 67,
                'nombre' => 'SAN JERONIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'tblprovincia_id' => 67,
                'nombre' => 'SAN SEBASTIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'tblprovincia_id' => 67,
                'nombre' => 'SANTIAGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'tblprovincia_id' => 67,
                'nombre' => 'SAYLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'tblprovincia_id' => 67,
                'nombre' => 'WANCHAQ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'tblprovincia_id' => 68,
                'nombre' => 'ACOMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'tblprovincia_id' => 68,
                'nombre' => 'ACOPIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'tblprovincia_id' => 68,
                'nombre' => 'ACOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'tblprovincia_id' => 68,
                'nombre' => 'MOSOC LLACTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'tblprovincia_id' => 68,
                'nombre' => 'POMACANCHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'tblprovincia_id' => 68,
                'nombre' => 'RONDOCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'tblprovincia_id' => 68,
                'nombre' => 'SANGARARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'tblprovincia_id' => 69,
                'nombre' => 'ANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'tblprovincia_id' => 69,
                'nombre' => 'ANCAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'tblprovincia_id' => 69,
                'nombre' => 'CACHIMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'tblprovincia_id' => 69,
                'nombre' => 'CHINCHAYPUJIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'tblprovincia_id' => 69,
                'nombre' => 'HUAROCONDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'tblprovincia_id' => 69,
                'nombre' => 'LIMATAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'tblprovincia_id' => 69,
                'nombre' => 'MOLLEPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'tblprovincia_id' => 69,
                'nombre' => 'PUCYURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'tblprovincia_id' => 69,
                'nombre' => 'ZURITE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'tblprovincia_id' => 70,
                'nombre' => 'CALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'tblprovincia_id' => 70,
                'nombre' => 'COYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'tblprovincia_id' => 70,
                'nombre' => 'LAMAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'tblprovincia_id' => 70,
                'nombre' => 'LARES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'tblprovincia_id' => 70,
                'nombre' => 'PISAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'tblprovincia_id' => 70,
                'nombre' => 'SAN SALVADOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'tblprovincia_id' => 70,
                'nombre' => 'TARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'tblprovincia_id' => 70,
                'nombre' => 'YANATILE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'tblprovincia_id' => 71,
                'nombre' => 'YANAOCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'tblprovincia_id' => 71,
                'nombre' => 'CHECCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'tblprovincia_id' => 71,
                'nombre' => 'KUNTURKANKI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'tblprovincia_id' => 71,
                'nombre' => 'LANGUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'tblprovincia_id' => 71,
                'nombre' => 'LAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'tblprovincia_id' => 71,
                'nombre' => 'PAMPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'tblprovincia_id' => 71,
                'nombre' => 'QUEHUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'tblprovincia_id' => 71,
                'nombre' => 'TUPAC AMARU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'tblprovincia_id' => 72,
                'nombre' => 'SICUANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'tblprovincia_id' => 72,
                'nombre' => 'CHECACUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'tblprovincia_id' => 72,
                'nombre' => 'COMBAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'tblprovincia_id' => 72,
                'nombre' => 'MARANGANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'tblprovincia_id' => 72,
                'nombre' => 'PITUMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'tblprovincia_id' => 72,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'tblprovincia_id' => 72,
                'nombre' => 'SAN PEDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'tblprovincia_id' => 72,
                'nombre' => 'TINTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'tblprovincia_id' => 73,
                'nombre' => 'SANTO TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'tblprovincia_id' => 73,
                'nombre' => 'CAPACMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'tblprovincia_id' => 73,
                'nombre' => 'CHAMACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'tblprovincia_id' => 73,
                'nombre' => 'COLQUEMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'tblprovincia_id' => 73,
                'nombre' => 'LIVITACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'tblprovincia_id' => 73,
                'nombre' => 'LLUSCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'tblprovincia_id' => 73,
                'nombre' => 'QUI&Ntilde;OTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'tblprovincia_id' => 73,
                'nombre' => 'VELILLE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'tblprovincia_id' => 74,
                'nombre' => 'ESPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'tblprovincia_id' => 74,
                'nombre' => 'CONDOROMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'tblprovincia_id' => 74,
                'nombre' => 'COPORAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'tblprovincia_id' => 74,
                'nombre' => 'OCORURO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'tblprovincia_id' => 74,
                'nombre' => 'PALLPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'tblprovincia_id' => 74,
                'nombre' => 'PICHIGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'tblprovincia_id' => 74,
                'nombre' => 'SUYCKUTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'tblprovincia_id' => 74,
                'nombre' => 'ALTO PICHIGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'tblprovincia_id' => 75,
                'nombre' => 'SANTA ANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'tblprovincia_id' => 75,
                'nombre' => 'ECHARATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'tblprovincia_id' => 75,
                'nombre' => 'HUAYOPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'tblprovincia_id' => 75,
                'nombre' => 'MARANURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'tblprovincia_id' => 75,
                'nombre' => 'OCOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'tblprovincia_id' => 75,
                'nombre' => 'QUELLOUNO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'tblprovincia_id' => 75,
                'nombre' => 'KIMBIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'tblprovincia_id' => 75,
                'nombre' => 'SANTA TERESA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'tblprovincia_id' => 75,
                'nombre' => 'VILCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'tblprovincia_id' => 75,
                'nombre' => 'PICHARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'tblprovincia_id' => 76,
                'nombre' => 'PARURO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'tblprovincia_id' => 76,
                'nombre' => 'ACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'tblprovincia_id' => 76,
                'nombre' => 'CCAPI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'tblprovincia_id' => 76,
                'nombre' => 'COLCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'tblprovincia_id' => 76,
                'nombre' => 'HUANOQUITE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'tblprovincia_id' => 76,
                'nombre' => 'OMACHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'tblprovincia_id' => 76,
                'nombre' => 'PACCARITAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'tblprovincia_id' => 76,
                'nombre' => 'PILLPINTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'tblprovincia_id' => 76,
                'nombre' => 'YAURISQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'tblprovincia_id' => 77,
                'nombre' => 'PAUCARTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'tblprovincia_id' => 77,
                'nombre' => 'CAICAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'tblprovincia_id' => 77,
                'nombre' => 'CHALLABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'tblprovincia_id' => 77,
                'nombre' => 'COLQUEPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'tblprovincia_id' => 77,
                'nombre' => 'HUANCARANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'tblprovincia_id' => 77,
                'nombre' => 'KOS&Ntilde;IPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'tblprovincia_id' => 78,
                'nombre' => 'URCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'tblprovincia_id' => 78,
                'nombre' => 'ANDAHUAYLILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'tblprovincia_id' => 78,
                'nombre' => 'CAMANTI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'tblprovincia_id' => 78,
                'nombre' => 'CCARHUAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'tblprovincia_id' => 78,
                'nombre' => 'CCATCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'tblprovincia_id' => 78,
                'nombre' => 'CUSIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'tblprovincia_id' => 78,
                'nombre' => 'HUARO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'tblprovincia_id' => 78,
                'nombre' => 'LUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'tblprovincia_id' => 78,
                'nombre' => 'MARCAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'tblprovincia_id' => 78,
                'nombre' => 'OCONGATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'tblprovincia_id' => 78,
                'nombre' => 'OROPESA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'tblprovincia_id' => 78,
                'nombre' => 'QUIQUIJANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'tblprovincia_id' => 79,
                'nombre' => 'URUBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'tblprovincia_id' => 79,
                'nombre' => 'CHINCHERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'tblprovincia_id' => 79,
                'nombre' => 'HUAYLLABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'tblprovincia_id' => 79,
                'nombre' => 'MACHUPICCHU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'tblprovincia_id' => 79,
                'nombre' => 'MARAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'tblprovincia_id' => 79,
                'nombre' => 'OLLANTAYTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'tblprovincia_id' => 79,
                'nombre' => 'YUCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'tblprovincia_id' => 80,
                'nombre' => 'HUANCAVELICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'tblprovincia_id' => 80,
                'nombre' => 'ACOBAMBILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'tblprovincia_id' => 80,
                'nombre' => 'ACORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'tblprovincia_id' => 80,
                'nombre' => 'CONAYCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'tblprovincia_id' => 80,
                'nombre' => 'CUENCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'tblprovincia_id' => 80,
                'nombre' => 'HUACHOCOLPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'tblprovincia_id' => 80,
                'nombre' => 'HUAYLLAHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'tblprovincia_id' => 80,
                'nombre' => 'IZCUCHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'tblprovincia_id' => 80,
                'nombre' => 'LARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'tblprovincia_id' => 80,
                'nombre' => 'MANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'tblprovincia_id' => 80,
                'nombre' => 'MARISCAL CACERES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'tblprovincia_id' => 80,
                'nombre' => 'MOYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'tblprovincia_id' => 80,
                'nombre' => 'NUEVO OCCORO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'tblprovincia_id' => 80,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'tblprovincia_id' => 80,
                'nombre' => 'PILCHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'tblprovincia_id' => 80,
                'nombre' => 'VILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'tblprovincia_id' => 80,
                'nombre' => 'YAULI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'tblprovincia_id' => 80,
                'nombre' => 'ASCENSION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'tblprovincia_id' => 80,
                'nombre' => 'HUANDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'tblprovincia_id' => 81,
                'nombre' => 'ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'tblprovincia_id' => 81,
                'nombre' => 'ANDABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'tblprovincia_id' => 81,
                'nombre' => 'ANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'tblprovincia_id' => 81,
                'nombre' => 'CAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'tblprovincia_id' => 81,
                'nombre' => 'MARCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'tblprovincia_id' => 81,
                'nombre' => 'PAUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'tblprovincia_id' => 81,
                'nombre' => 'POMACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'tblprovincia_id' => 81,
                'nombre' => 'ROSARIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'tblprovincia_id' => 82,
                'nombre' => 'LIRCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'tblprovincia_id' => 82,
                'nombre' => 'ANCHONGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'tblprovincia_id' => 82,
                'nombre' => 'CALLANMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'tblprovincia_id' => 82,
                'nombre' => 'CCOCHACCASA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'tblprovincia_id' => 82,
                'nombre' => 'CHINCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'tblprovincia_id' => 82,
                'nombre' => 'CONGALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'tblprovincia_id' => 82,
                'nombre' => 'HUANCA-HUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'tblprovincia_id' => 82,
                'nombre' => 'HUAYLLAY GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'tblprovincia_id' => 82,
                'nombre' => 'JULCAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'tblprovincia_id' => 82,
                'nombre' => 'SAN ANTONIO DE ANTAPARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'tblprovincia_id' => 82,
                'nombre' => 'SANTO TOMAS DE PATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'tblprovincia_id' => 82,
                'nombre' => 'SECCLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'tblprovincia_id' => 83,
                'nombre' => 'CASTROVIRREYNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'tblprovincia_id' => 83,
                'nombre' => 'ARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'tblprovincia_id' => 83,
                'nombre' => 'AURAHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'tblprovincia_id' => 83,
                'nombre' => 'CAPILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'tblprovincia_id' => 83,
                'nombre' => 'CHUPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'tblprovincia_id' => 83,
                'nombre' => 'COCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'tblprovincia_id' => 83,
                'nombre' => 'HUACHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'tblprovincia_id' => 83,
                'nombre' => 'HUAMATAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'tblprovincia_id' => 83,
                'nombre' => 'MOLLEPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'tblprovincia_id' => 83,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'tblprovincia_id' => 83,
                'nombre' => 'SANTA ANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'tblprovincia_id' => 83,
                'nombre' => 'TANTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'tblprovincia_id' => 83,
                'nombre' => 'TICRAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'tblprovincia_id' => 84,
                'nombre' => 'CHURCAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'tblprovincia_id' => 84,
                'nombre' => 'ANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'tblprovincia_id' => 84,
                'nombre' => 'CHINCHIHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'tblprovincia_id' => 84,
                'nombre' => 'EL CARMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'tblprovincia_id' => 84,
                'nombre' => 'LA MERCED',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'tblprovincia_id' => 84,
                'nombre' => 'LOCROJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'tblprovincia_id' => 84,
                'nombre' => 'PAUCARBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'tblprovincia_id' => 84,
                'nombre' => 'SAN MIGUEL DE MAYOCC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'tblprovincia_id' => 84,
                'nombre' => 'SAN PEDRO DE CORIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'tblprovincia_id' => 84,
                'nombre' => 'PACHAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'tblprovincia_id' => 85,
                'nombre' => 'HUAYTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'tblprovincia_id' => 85,
                'nombre' => 'AYAVI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'tblprovincia_id' => 85,
                'nombre' => 'CORDOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'tblprovincia_id' => 85,
                'nombre' => 'HUAYACUNDO ARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'tblprovincia_id' => 85,
                'nombre' => 'LARAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'tblprovincia_id' => 85,
                'nombre' => 'OCOYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'tblprovincia_id' => 85,
                'nombre' => 'PILPICHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'tblprovincia_id' => 85,
                'nombre' => 'QUERCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'tblprovincia_id' => 85,
                'nombre' => 'QUITO-ARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'tblprovincia_id' => 85,
                'nombre' => 'SAN ANTONIO DE CUSICANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'tblprovincia_id' => 85,
                'nombre' => 'SAN FRANCISCO DE SANGAYAICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'tblprovincia_id' => 85,
                'nombre' => 'SAN ISIDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'tblprovincia_id' => 85,
                'nombre' => 'SANTIAGO DE CHOCORVOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'tblprovincia_id' => 85,
                'nombre' => 'SANTIAGO DE QUIRAHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'tblprovincia_id' => 85,
                'nombre' => 'SANTO DOMINGO DE CAPILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'tblprovincia_id' => 85,
                'nombre' => 'TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'tblprovincia_id' => 86,
                'nombre' => 'PAMPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'tblprovincia_id' => 86,
                'nombre' => 'ACOSTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'tblprovincia_id' => 86,
                'nombre' => 'ACRAQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'tblprovincia_id' => 86,
                'nombre' => 'AHUAYCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'tblprovincia_id' => 86,
                'nombre' => 'COLCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'tblprovincia_id' => 86,
                'nombre' => 'DANIEL HERNANDEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'tblprovincia_id' => 86,
                'nombre' => 'HUACHOCOLPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'tblprovincia_id' => 86,
                'nombre' => 'HUARIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'tblprovincia_id' => 86,
                'nombre' => '&Ntilde;AHUIMPUQUIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'tblprovincia_id' => 86,
                'nombre' => 'PAZOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'tblprovincia_id' => 86,
                'nombre' => 'QUISHUAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'tblprovincia_id' => 86,
                'nombre' => 'SALCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'tblprovincia_id' => 86,
                'nombre' => 'SALCAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'tblprovincia_id' => 86,
                'nombre' => 'SAN MARCOS DE ROCCHAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'tblprovincia_id' => 86,
                'nombre' => 'SURCUBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'tblprovincia_id' => 86,
                'nombre' => 'TINTAY PUNCU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'tblprovincia_id' => 87,
                'nombre' => 'HUANUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'tblprovincia_id' => 87,
                'nombre' => 'AMARILIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'tblprovincia_id' => 87,
                'nombre' => 'CHINCHAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'tblprovincia_id' => 87,
                'nombre' => 'CHURUBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'tblprovincia_id' => 87,
                'nombre' => 'MARGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'tblprovincia_id' => 87,
                'nombre' => 'QUISQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'tblprovincia_id' => 87,
                'nombre' => 'SAN FRANCISCO DE CAYRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'tblprovincia_id' => 87,
                'nombre' => 'SAN PEDRO DE CHAULAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'tblprovincia_id' => 87,
                'nombre' => 'SANTA MARIA DEL VALLE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'tblprovincia_id' => 87,
                'nombre' => 'YARUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'tblprovincia_id' => 87,
                'nombre' => 'PILLCO MARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'tblprovincia_id' => 88,
                'nombre' => 'AMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'tblprovincia_id' => 88,
                'nombre' => 'CAYNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'tblprovincia_id' => 88,
                'nombre' => 'COLPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'tblprovincia_id' => 88,
                'nombre' => 'CONCHAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'tblprovincia_id' => 88,
                'nombre' => 'HUACAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'tblprovincia_id' => 88,
                'nombre' => 'SAN FRANCISCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'tblprovincia_id' => 88,
                'nombre' => 'SAN RAFAEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'tblprovincia_id' => 88,
                'nombre' => 'TOMAY KICHWA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'tblprovincia_id' => 89,
                'nombre' => 'LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'tblprovincia_id' => 89,
                'nombre' => 'CHUQUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'tblprovincia_id' => 89,
                'nombre' => 'MARIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'tblprovincia_id' => 89,
                'nombre' => 'PACHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'tblprovincia_id' => 89,
                'nombre' => 'QUIVILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'tblprovincia_id' => 89,
                'nombre' => 'RIPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'tblprovincia_id' => 89,
                'nombre' => 'SHUNQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'tblprovincia_id' => 89,
                'nombre' => 'SILLAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'tblprovincia_id' => 89,
                'nombre' => 'YANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'tblprovincia_id' => 90,
                'nombre' => 'HUACAYBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'tblprovincia_id' => 90,
                'nombre' => 'CANCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'tblprovincia_id' => 90,
                'nombre' => 'COCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'tblprovincia_id' => 90,
                'nombre' => 'PINRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'tblprovincia_id' => 91,
                'nombre' => 'LLATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'tblprovincia_id' => 91,
                'nombre' => 'ARANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'tblprovincia_id' => 91,
                'nombre' => 'CHAVIN DE PARIARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'tblprovincia_id' => 91,
                'nombre' => 'JACAS GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'tblprovincia_id' => 91,
                'nombre' => 'JIRCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'tblprovincia_id' => 91,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'tblprovincia_id' => 91,
                'nombre' => 'MONZON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'tblprovincia_id' => 91,
                'nombre' => 'PUNCHAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'tblprovincia_id' => 91,
                'nombre' => 'PU&Ntilde;OS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'tblprovincia_id' => 91,
                'nombre' => 'SINGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'tblprovincia_id' => 91,
                'nombre' => 'TANTAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'tblprovincia_id' => 92,
                'nombre' => 'RUPA-RUPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'tblprovincia_id' => 92,
                'nombre' => 'DANIEL ALOMIA ROBLES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'tblprovincia_id' => 92,
                'nombre' => 'HERMILIO VALDIZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'tblprovincia_id' => 92,
                'nombre' => 'JOSE CRESPO Y CASTILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'tblprovincia_id' => 92,
                'nombre' => 'LUYANDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'tblprovincia_id' => 92,
                'nombre' => 'MARIANO DAMASO BERAUN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'tblprovincia_id' => 93,
                'nombre' => 'HUACRACHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'tblprovincia_id' => 93,
                'nombre' => 'CHOLON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'tblprovincia_id' => 93,
                'nombre' => 'SAN BUENAVENTURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'tblprovincia_id' => 94,
                'nombre' => 'PANAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'tblprovincia_id' => 94,
                'nombre' => 'CHAGLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'tblprovincia_id' => 94,
                'nombre' => 'MOLINO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'tblprovincia_id' => 94,
                'nombre' => 'UMARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'tblprovincia_id' => 95,
                'nombre' => 'PUERTO INCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'tblprovincia_id' => 95,
                'nombre' => 'CODO DEL POZUZO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'tblprovincia_id' => 95,
                'nombre' => 'HONORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'tblprovincia_id' => 95,
                'nombre' => 'TOURNAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'tblprovincia_id' => 95,
                'nombre' => 'YUYAPICHIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'tblprovincia_id' => 96,
                'nombre' => 'JESUS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'tblprovincia_id' => 96,
                'nombre' => 'BA&Ntilde;OS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'tblprovincia_id' => 96,
                'nombre' => 'JIVIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'tblprovincia_id' => 96,
                'nombre' => 'QUEROPALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'tblprovincia_id' => 96,
                'nombre' => 'RONDOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'tblprovincia_id' => 96,
                'nombre' => 'SAN FRANCISCO DE ASIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'tblprovincia_id' => 96,
                'nombre' => 'SAN MIGUEL DE CAURI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'tblprovincia_id' => 97,
                'nombre' => 'CHAVINILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'tblprovincia_id' => 97,
                'nombre' => 'CAHUAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'tblprovincia_id' => 97,
                'nombre' => 'CHACABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'tblprovincia_id' => 97,
                'nombre' => 'APARICIO POMARES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'tblprovincia_id' => 97,
                'nombre' => 'JACAS CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'tblprovincia_id' => 97,
                'nombre' => 'OBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'tblprovincia_id' => 97,
                'nombre' => 'PAMPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'tblprovincia_id' => 97,
                'nombre' => 'CHORAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'tblprovincia_id' => 98,
                'nombre' => 'ICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'tblprovincia_id' => 98,
                'nombre' => 'LA TINGUI&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'tblprovincia_id' => 98,
                'nombre' => 'LOS AQUIJES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'tblprovincia_id' => 98,
                'nombre' => 'OCUCAJE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'tblprovincia_id' => 98,
                'nombre' => 'PACHACUTEC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'tblprovincia_id' => 98,
                'nombre' => 'PARCONA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'tblprovincia_id' => 98,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'tblprovincia_id' => 98,
                'nombre' => 'SALAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'tblprovincia_id' => 98,
                'nombre' => 'SAN JOSE DE LOS MOLINOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'tblprovincia_id' => 98,
                'nombre' => 'SAN JUAN BAUTISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'tblprovincia_id' => 98,
                'nombre' => 'SANTIAGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'tblprovincia_id' => 98,
                'nombre' => 'SUBTANJALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'tblprovincia_id' => 98,
                'nombre' => 'TATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'tblprovincia_id' => 98,
                'nombre' => 'YAUCA DEL ROSARIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'tblprovincia_id' => 99,
                'nombre' => 'CHINCHA ALTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'tblprovincia_id' => 99,
                'nombre' => 'ALTO LARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'tblprovincia_id' => 99,
                'nombre' => 'CHAVIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'tblprovincia_id' => 99,
                'nombre' => 'CHINCHA BAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'tblprovincia_id' => 99,
                'nombre' => 'EL CARMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'tblprovincia_id' => 99,
                'nombre' => 'GROCIO PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'tblprovincia_id' => 99,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'tblprovincia_id' => 99,
                'nombre' => 'SAN JUAN DE YANAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'tblprovincia_id' => 99,
                'nombre' => 'SAN PEDRO DE HUACARPANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'tblprovincia_id' => 99,
                'nombre' => 'SUNAMPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'tblprovincia_id' => 99,
                'nombre' => 'TAMBO DE MORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'tblprovincia_id' => 100,
                'nombre' => 'NAZCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'tblprovincia_id' => 100,
                'nombre' => 'CHANGUILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'tblprovincia_id' => 100,
                'nombre' => 'EL INGENIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'tblprovincia_id' => 100,
                'nombre' => 'MARCONA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'tblprovincia_id' => 100,
                'nombre' => 'VISTA ALEGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'tblprovincia_id' => 101,
                'nombre' => 'PALPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'tblprovincia_id' => 101,
                'nombre' => 'LLIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'tblprovincia_id' => 101,
                'nombre' => 'RIO GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'tblprovincia_id' => 101,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'tblprovincia_id' => 101,
                'nombre' => 'TIBILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'tblprovincia_id' => 102,
                'nombre' => 'PISCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'tblprovincia_id' => 102,
                'nombre' => 'HUANCANO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'tblprovincia_id' => 102,
                'nombre' => 'HUMAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('tbldistrito')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'tblprovincia_id' => 102,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'tblprovincia_id' => 102,
                'nombre' => 'PARACAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'tblprovincia_id' => 102,
                'nombre' => 'SAN ANDRES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'tblprovincia_id' => 102,
                'nombre' => 'SAN CLEMENTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'tblprovincia_id' => 102,
                'nombre' => 'TUPAC AMARU INCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'tblprovincia_id' => 103,
                'nombre' => 'HUANCAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'tblprovincia_id' => 103,
                'nombre' => 'CARHUACALLANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'tblprovincia_id' => 103,
                'nombre' => 'CHACAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'tblprovincia_id' => 103,
                'nombre' => 'CHICCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'tblprovincia_id' => 103,
                'nombre' => 'CHILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'tblprovincia_id' => 103,
                'nombre' => 'CHONGOS ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'tblprovincia_id' => 103,
                'nombre' => 'CHUPURO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'tblprovincia_id' => 103,
                'nombre' => 'COLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'tblprovincia_id' => 103,
                'nombre' => 'CULLHUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'tblprovincia_id' => 103,
                'nombre' => 'EL TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'tblprovincia_id' => 103,
                'nombre' => 'HUACRAPUQUIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'tblprovincia_id' => 103,
                'nombre' => 'HUALHUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'tblprovincia_id' => 103,
                'nombre' => 'HUANCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'tblprovincia_id' => 103,
                'nombre' => 'HUASICANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'tblprovincia_id' => 103,
                'nombre' => 'HUAYUCACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'tblprovincia_id' => 103,
                'nombre' => 'INGENIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'tblprovincia_id' => 103,
                'nombre' => 'PARIAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'tblprovincia_id' => 103,
                'nombre' => 'PILCOMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'tblprovincia_id' => 103,
                'nombre' => 'PUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'tblprovincia_id' => 103,
                'nombre' => 'QUICHUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'tblprovincia_id' => 103,
                'nombre' => 'QUILCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'tblprovincia_id' => 103,
                'nombre' => 'SAN AGUSTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'tblprovincia_id' => 103,
                'nombre' => 'SAN JERONIMO DE TUNAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'tblprovincia_id' => 103,
                'nombre' => 'SA&Ntilde;O',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'tblprovincia_id' => 103,
                'nombre' => 'SAPALLANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'tblprovincia_id' => 103,
                'nombre' => 'SICAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'tblprovincia_id' => 103,
                'nombre' => 'SANTO DOMINGO DE ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'tblprovincia_id' => 103,
                'nombre' => 'VIQUES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'tblprovincia_id' => 104,
                'nombre' => 'CONCEPCION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'tblprovincia_id' => 104,
                'nombre' => 'ACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'tblprovincia_id' => 104,
                'nombre' => 'ANDAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'tblprovincia_id' => 104,
                'nombre' => 'CHAMBARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'tblprovincia_id' => 104,
                'nombre' => 'COCHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'tblprovincia_id' => 104,
                'nombre' => 'COMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'tblprovincia_id' => 104,
                'nombre' => 'HEROINAS TOLEDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'tblprovincia_id' => 104,
                'nombre' => 'MANZANARES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'tblprovincia_id' => 104,
                'nombre' => 'MARISCAL CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'tblprovincia_id' => 104,
                'nombre' => 'MATAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'tblprovincia_id' => 104,
                'nombre' => 'MITO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'tblprovincia_id' => 104,
                'nombre' => 'NUEVE DE JULIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'tblprovincia_id' => 104,
                'nombre' => 'ORCOTUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'tblprovincia_id' => 104,
                'nombre' => 'SAN JOSE DE QUERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'tblprovincia_id' => 104,
                'nombre' => 'SANTA ROSA DE OCOPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'tblprovincia_id' => 105,
                'nombre' => 'CHANCHAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'tblprovincia_id' => 105,
                'nombre' => 'PERENE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'tblprovincia_id' => 105,
                'nombre' => 'PICHANAQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'tblprovincia_id' => 105,
                'nombre' => 'SAN LUIS DE SHUARO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'tblprovincia_id' => 105,
                'nombre' => 'SAN RAMON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'tblprovincia_id' => 105,
                'nombre' => 'VITOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'tblprovincia_id' => 106,
                'nombre' => 'JAUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'tblprovincia_id' => 106,
                'nombre' => 'ACOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'tblprovincia_id' => 106,
                'nombre' => 'APATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'tblprovincia_id' => 106,
                'nombre' => 'ATAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'tblprovincia_id' => 106,
                'nombre' => 'CANCHAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'tblprovincia_id' => 106,
                'nombre' => 'CURICACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'tblprovincia_id' => 106,
                'nombre' => 'EL MANTARO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'tblprovincia_id' => 106,
                'nombre' => 'HUAMALI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'tblprovincia_id' => 106,
                'nombre' => 'HUARIPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'tblprovincia_id' => 106,
                'nombre' => 'HUERTAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'tblprovincia_id' => 106,
                'nombre' => 'JANJAILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'tblprovincia_id' => 106,
                'nombre' => 'JULCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'tblprovincia_id' => 106,
                'nombre' => 'LEONOR ORDO&Ntilde;EZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'tblprovincia_id' => 106,
                'nombre' => 'LLOCLLAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'tblprovincia_id' => 106,
                'nombre' => 'MARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'tblprovincia_id' => 106,
                'nombre' => 'MASMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'tblprovincia_id' => 106,
                'nombre' => 'MASMA CHICCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'tblprovincia_id' => 106,
                'nombre' => 'MOLINOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'tblprovincia_id' => 106,
                'nombre' => 'MONOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'tblprovincia_id' => 106,
                'nombre' => 'MUQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'tblprovincia_id' => 106,
                'nombre' => 'MUQUIYAUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'tblprovincia_id' => 106,
                'nombre' => 'PACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'tblprovincia_id' => 106,
                'nombre' => 'PACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'tblprovincia_id' => 106,
                'nombre' => 'PANCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'tblprovincia_id' => 106,
                'nombre' => 'PARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'tblprovincia_id' => 106,
                'nombre' => 'POMACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'tblprovincia_id' => 106,
                'nombre' => 'RICRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'tblprovincia_id' => 106,
                'nombre' => 'SAN LORENZO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'tblprovincia_id' => 106,
                'nombre' => 'SAN PEDRO DE CHUNAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'tblprovincia_id' => 106,
                'nombre' => 'SAUSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'tblprovincia_id' => 106,
                'nombre' => 'SINCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'tblprovincia_id' => 106,
                'nombre' => 'TUNAN MARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'tblprovincia_id' => 106,
                'nombre' => 'YAULI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'tblprovincia_id' => 106,
                'nombre' => 'YAUYOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'tblprovincia_id' => 107,
                'nombre' => 'JUNIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'tblprovincia_id' => 107,
                'nombre' => 'CARHUAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'tblprovincia_id' => 107,
                'nombre' => 'ONDORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'tblprovincia_id' => 107,
                'nombre' => 'ULCUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'tblprovincia_id' => 108,
                'nombre' => 'SATIPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'tblprovincia_id' => 108,
                'nombre' => 'COVIRIALI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'tblprovincia_id' => 108,
                'nombre' => 'LLAYLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'tblprovincia_id' => 108,
                'nombre' => 'MAZAMARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'tblprovincia_id' => 108,
                'nombre' => 'PAMPA HERMOSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'tblprovincia_id' => 108,
                'nombre' => 'PANGOA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'tblprovincia_id' => 108,
                'nombre' => 'RIO NEGRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'tblprovincia_id' => 108,
                'nombre' => 'RIO TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'tblprovincia_id' => 109,
                'nombre' => 'TARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'tblprovincia_id' => 109,
                'nombre' => 'ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'tblprovincia_id' => 109,
                'nombre' => 'HUARICOLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'tblprovincia_id' => 109,
                'nombre' => 'HUASAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'tblprovincia_id' => 109,
                'nombre' => 'LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'tblprovincia_id' => 109,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'tblprovincia_id' => 109,
                'nombre' => 'PALCAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'tblprovincia_id' => 109,
                'nombre' => 'SAN PEDRO DE CAJAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'tblprovincia_id' => 109,
                'nombre' => 'TAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'tblprovincia_id' => 110,
                'nombre' => 'LA OROYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'tblprovincia_id' => 110,
                'nombre' => 'CHACAPALPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'tblprovincia_id' => 110,
                'nombre' => 'HUAY-HUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'tblprovincia_id' => 110,
                'nombre' => 'MARCAPOMACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'tblprovincia_id' => 110,
                'nombre' => 'MOROCOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'tblprovincia_id' => 110,
                'nombre' => 'PACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'tblprovincia_id' => 110,
                'nombre' => 'SANTA BARBARA DE CARHUACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'tblprovincia_id' => 110,
                'nombre' => 'SANTA ROSA DE SACCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'tblprovincia_id' => 110,
                'nombre' => 'SUITUCANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'tblprovincia_id' => 110,
                'nombre' => 'YAULI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'tblprovincia_id' => 111,
                'nombre' => 'CHUPACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'tblprovincia_id' => 111,
                'nombre' => 'AHUAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'tblprovincia_id' => 111,
                'nombre' => 'CHONGOS BAJO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'tblprovincia_id' => 111,
                'nombre' => 'HUACHAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'tblprovincia_id' => 111,
                'nombre' => 'HUAMANCACA CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'tblprovincia_id' => 111,
                'nombre' => 'SAN JUAN DE ISCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'tblprovincia_id' => 111,
                'nombre' => 'SAN JUAN DE JARPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'tblprovincia_id' => 111,
                'nombre' => 'TRES DE DICIEMBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'tblprovincia_id' => 111,
                'nombre' => 'YANACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'tblprovincia_id' => 112,
                'nombre' => 'TRUJILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'tblprovincia_id' => 112,
                'nombre' => 'EL PORVENIR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'tblprovincia_id' => 112,
                'nombre' => 'FLORENCIA DE MORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'tblprovincia_id' => 112,
                'nombre' => 'HUANCHACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'tblprovincia_id' => 112,
                'nombre' => 'LA ESPERANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'tblprovincia_id' => 112,
                'nombre' => 'LAREDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'tblprovincia_id' => 112,
                'nombre' => 'MOCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'tblprovincia_id' => 112,
                'nombre' => 'POROTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'tblprovincia_id' => 112,
                'nombre' => 'SALAVERRY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'tblprovincia_id' => 112,
                'nombre' => 'SIMBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'tblprovincia_id' => 112,
                'nombre' => 'VICTOR LARCO HERRERA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'tblprovincia_id' => 113,
                'nombre' => 'ASCOPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'tblprovincia_id' => 113,
                'nombre' => 'CHICAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'tblprovincia_id' => 113,
                'nombre' => 'CHOCOPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'tblprovincia_id' => 113,
                'nombre' => 'MAGDALENA DE CAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'tblprovincia_id' => 113,
                'nombre' => 'PAIJAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'tblprovincia_id' => 113,
                'nombre' => 'RAZURI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'tblprovincia_id' => 113,
                'nombre' => 'SANTIAGO DE CAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'tblprovincia_id' => 113,
                'nombre' => 'CASA GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'tblprovincia_id' => 114,
                'nombre' => 'BOLIVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'tblprovincia_id' => 114,
                'nombre' => 'BAMBAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'tblprovincia_id' => 114,
                'nombre' => 'CONDORMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'tblprovincia_id' => 114,
                'nombre' => 'LONGOTEA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'tblprovincia_id' => 114,
                'nombre' => 'UCHUMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'tblprovincia_id' => 114,
                'nombre' => 'UCUNCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'tblprovincia_id' => 115,
                'nombre' => 'CHEPEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'tblprovincia_id' => 115,
                'nombre' => 'PACANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'tblprovincia_id' => 115,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'tblprovincia_id' => 116,
                'nombre' => 'JULCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'tblprovincia_id' => 116,
                'nombre' => 'CALAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'tblprovincia_id' => 116,
                'nombre' => 'CARABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'tblprovincia_id' => 116,
                'nombre' => 'HUASO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'tblprovincia_id' => 117,
                'nombre' => 'OTUZCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'tblprovincia_id' => 117,
                'nombre' => 'AGALLPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'tblprovincia_id' => 117,
                'nombre' => 'CHARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'tblprovincia_id' => 117,
                'nombre' => 'HUARANCHAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'tblprovincia_id' => 117,
                'nombre' => 'LA CUESTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'tblprovincia_id' => 117,
                'nombre' => 'MACHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'tblprovincia_id' => 117,
                'nombre' => 'PARANDAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'tblprovincia_id' => 117,
                'nombre' => 'SALPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'tblprovincia_id' => 117,
                'nombre' => 'SINSICAP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'tblprovincia_id' => 117,
                'nombre' => 'USQUIL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'tblprovincia_id' => 118,
                'nombre' => 'SAN PEDRO DE LLOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'tblprovincia_id' => 118,
                'nombre' => 'GUADALUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'tblprovincia_id' => 118,
                'nombre' => 'JEQUETEPEQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'tblprovincia_id' => 118,
                'nombre' => 'PACASMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'tblprovincia_id' => 118,
                'nombre' => 'SAN JOSE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'tblprovincia_id' => 119,
                'nombre' => 'TAYABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'tblprovincia_id' => 119,
                'nombre' => 'BULDIBUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'tblprovincia_id' => 119,
                'nombre' => 'CHILLIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'tblprovincia_id' => 119,
                'nombre' => 'HUANCASPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'tblprovincia_id' => 119,
                'nombre' => 'HUAYLILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'tblprovincia_id' => 119,
                'nombre' => 'HUAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'tblprovincia_id' => 119,
                'nombre' => 'ONGON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'tblprovincia_id' => 119,
                'nombre' => 'PARCOY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'tblprovincia_id' => 119,
                'nombre' => 'PATAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'tblprovincia_id' => 119,
                'nombre' => 'PIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'tblprovincia_id' => 119,
                'nombre' => 'SANTIAGO DE CHALLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'tblprovincia_id' => 119,
                'nombre' => 'TAURIJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'tblprovincia_id' => 119,
                'nombre' => 'URPAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'tblprovincia_id' => 120,
                'nombre' => 'HUAMACHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'tblprovincia_id' => 120,
                'nombre' => 'CHUGAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'tblprovincia_id' => 120,
                'nombre' => 'COCHORCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'tblprovincia_id' => 120,
                'nombre' => 'CURGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'tblprovincia_id' => 120,
                'nombre' => 'MARCABAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'tblprovincia_id' => 120,
                'nombre' => 'SANAGORAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'tblprovincia_id' => 120,
                'nombre' => 'SARIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'tblprovincia_id' => 120,
                'nombre' => 'SARTIMBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'tblprovincia_id' => 121,
                'nombre' => 'SANTIAGO DE CHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'tblprovincia_id' => 121,
                'nombre' => 'ANGASMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'tblprovincia_id' => 121,
                'nombre' => 'CACHICADAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'tblprovincia_id' => 121,
                'nombre' => 'MOLLEBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'tblprovincia_id' => 121,
                'nombre' => 'MOLLEPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'tblprovincia_id' => 121,
                'nombre' => 'QUIRUVILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'tblprovincia_id' => 121,
                'nombre' => 'SANTA CRUZ DE CHUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'tblprovincia_id' => 121,
                'nombre' => 'SITABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'tblprovincia_id' => 122,
                'nombre' => 'GRAN CHIMU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'tblprovincia_id' => 122,
                'nombre' => 'CASCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'tblprovincia_id' => 122,
                'nombre' => 'LUCMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'tblprovincia_id' => 122,
                'nombre' => 'MARMOT',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'tblprovincia_id' => 122,
                'nombre' => 'SAYAPULLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'tblprovincia_id' => 123,
                'nombre' => 'VIRU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'tblprovincia_id' => 123,
                'nombre' => 'CHAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'tblprovincia_id' => 123,
                'nombre' => 'GUADALUPITO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'tblprovincia_id' => 124,
                'nombre' => 'CHICLAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'tblprovincia_id' => 124,
                'nombre' => 'CHONGOYAPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'tblprovincia_id' => 124,
                'nombre' => 'ETEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'tblprovincia_id' => 124,
                'nombre' => 'ETEN PUERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'tblprovincia_id' => 124,
                'nombre' => 'JOSE LEONARDO ORTIZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'tblprovincia_id' => 124,
                'nombre' => 'LA VICTORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'tblprovincia_id' => 124,
                'nombre' => 'LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'tblprovincia_id' => 124,
                'nombre' => 'MONSEFU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'tblprovincia_id' => 124,
                'nombre' => 'NUEVA ARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'tblprovincia_id' => 124,
                'nombre' => 'OYOTUN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'tblprovincia_id' => 124,
                'nombre' => 'PICSI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'tblprovincia_id' => 124,
                'nombre' => 'PIMENTEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'tblprovincia_id' => 124,
                'nombre' => 'REQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'tblprovincia_id' => 124,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'tblprovincia_id' => 124,
                'nombre' => 'SA&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'tblprovincia_id' => 124,
                'nombre' => 'CAYALTI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'tblprovincia_id' => 124,
                'nombre' => 'PATAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'tblprovincia_id' => 124,
                'nombre' => 'POMALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'tblprovincia_id' => 124,
                'nombre' => 'PUCALA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'tblprovincia_id' => 124,
                'nombre' => 'TUMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'tblprovincia_id' => 125,
                'nombre' => 'FERRE&Ntilde;AFE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'tblprovincia_id' => 125,
                'nombre' => 'CA&Ntilde;ARIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'tblprovincia_id' => 125,
                'nombre' => 'INCAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'tblprovincia_id' => 125,
                'nombre' => 'MANUEL ANTONIO MESONES MURO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'tblprovincia_id' => 125,
                'nombre' => 'PITIPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'tblprovincia_id' => 125,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'tblprovincia_id' => 126,
                'nombre' => 'LAMBAYEQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'tblprovincia_id' => 126,
                'nombre' => 'CHOCHOPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'tblprovincia_id' => 126,
                'nombre' => 'ILLIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'tblprovincia_id' => 126,
                'nombre' => 'JAYANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'tblprovincia_id' => 126,
                'nombre' => 'MOCHUMI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'tblprovincia_id' => 126,
                'nombre' => 'MORROPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'tblprovincia_id' => 126,
                'nombre' => 'MOTUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'tblprovincia_id' => 126,
                'nombre' => 'OLMOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'tblprovincia_id' => 126,
                'nombre' => 'PACORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'tblprovincia_id' => 126,
                'nombre' => 'SALAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'tblprovincia_id' => 126,
                'nombre' => 'SAN JOSE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'tblprovincia_id' => 126,
                'nombre' => 'TUCUME',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'tblprovincia_id' => 127,
                'nombre' => 'LIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'tblprovincia_id' => 127,
                'nombre' => 'ANCON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'tblprovincia_id' => 127,
                'nombre' => 'ATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'tblprovincia_id' => 127,
                'nombre' => 'BARRANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'tblprovincia_id' => 127,
                'nombre' => 'BRE&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'tblprovincia_id' => 127,
                'nombre' => 'CARABAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'tblprovincia_id' => 127,
                'nombre' => 'CHACLACAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'tblprovincia_id' => 127,
                'nombre' => 'CHORRILLOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'tblprovincia_id' => 127,
                'nombre' => 'CIENEGUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'tblprovincia_id' => 127,
                'nombre' => 'COMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'tblprovincia_id' => 127,
                'nombre' => 'EL AGUSTINO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'tblprovincia_id' => 127,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'tblprovincia_id' => 127,
                'nombre' => 'JESUS MARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'tblprovincia_id' => 127,
                'nombre' => 'LA MOLINA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'tblprovincia_id' => 127,
                'nombre' => 'LA VICTORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'tblprovincia_id' => 127,
                'nombre' => 'LINCE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'tblprovincia_id' => 127,
                'nombre' => 'LOS OLIVOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'tblprovincia_id' => 127,
                'nombre' => 'LURIGANCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'tblprovincia_id' => 127,
                'nombre' => 'LURIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'tblprovincia_id' => 127,
                'nombre' => 'MAGDALENA DEL MAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'tblprovincia_id' => 127,
                'nombre' => 'MAGDALENA VIEJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'tblprovincia_id' => 127,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'tblprovincia_id' => 127,
                'nombre' => 'PACHACAMAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'tblprovincia_id' => 127,
                'nombre' => 'PUCUSANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'tblprovincia_id' => 127,
                'nombre' => 'PUENTE PIEDRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'tblprovincia_id' => 127,
                'nombre' => 'PUNTA HERMOSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'tblprovincia_id' => 127,
                'nombre' => 'PUNTA NEGRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'tblprovincia_id' => 127,
                'nombre' => 'RIMAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN BARTOLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN BORJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN ISIDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN JUAN DE LURIGANCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN JUAN DE MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN MARTIN DE PORRES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'tblprovincia_id' => 127,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'tblprovincia_id' => 127,
                'nombre' => 'SANTA ANITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'tblprovincia_id' => 127,
                'nombre' => 'SANTA MARIA DEL MAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'tblprovincia_id' => 127,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'tblprovincia_id' => 127,
                'nombre' => 'SANTIAGO DE SURCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'tblprovincia_id' => 127,
                'nombre' => 'SURQUILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'tblprovincia_id' => 127,
                'nombre' => 'VILLA EL SALVADOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'tblprovincia_id' => 127,
                'nombre' => 'VILLA MARIA DEL TRIUNFO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'tblprovincia_id' => 128,
                'nombre' => 'BARRANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'tblprovincia_id' => 128,
                'nombre' => 'PARAMONGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'tblprovincia_id' => 128,
                'nombre' => 'PATIVILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'tblprovincia_id' => 128,
                'nombre' => 'SUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'tblprovincia_id' => 128,
                'nombre' => 'SUPE PUERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'tblprovincia_id' => 129,
                'nombre' => 'CAJATAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'tblprovincia_id' => 129,
                'nombre' => 'COPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'tblprovincia_id' => 129,
                'nombre' => 'GORGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'tblprovincia_id' => 129,
                'nombre' => 'HUANCAPON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'tblprovincia_id' => 129,
                'nombre' => 'MANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'tblprovincia_id' => 130,
                'nombre' => 'CANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'tblprovincia_id' => 130,
                'nombre' => 'ARAHUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'tblprovincia_id' => 130,
                'nombre' => 'HUAMANTANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'tblprovincia_id' => 130,
                'nombre' => 'HUAROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'tblprovincia_id' => 130,
                'nombre' => 'LACHAQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'tblprovincia_id' => 130,
                'nombre' => 'SAN BUENAVENTURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'tblprovincia_id' => 130,
                'nombre' => 'SANTA ROSA DE QUIVES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'tblprovincia_id' => 131,
                'nombre' => 'SAN VICENTE DE CA&Ntilde;ETE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'tblprovincia_id' => 131,
                'nombre' => 'ASIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'tblprovincia_id' => 131,
                'nombre' => 'CALANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'tblprovincia_id' => 131,
                'nombre' => 'CERRO AZUL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'tblprovincia_id' => 131,
                'nombre' => 'CHILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'tblprovincia_id' => 131,
                'nombre' => 'COAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'tblprovincia_id' => 131,
                'nombre' => 'IMPERIAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'tblprovincia_id' => 131,
                'nombre' => 'LUNAHUANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'tblprovincia_id' => 131,
                'nombre' => 'MALA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'tblprovincia_id' => 131,
                'nombre' => 'NUEVO IMPERIAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'tblprovincia_id' => 131,
                'nombre' => 'PACARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'tblprovincia_id' => 131,
                'nombre' => 'QUILMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'tblprovincia_id' => 131,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'tblprovincia_id' => 131,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'tblprovincia_id' => 131,
                'nombre' => 'SANTA CRUZ DE FLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'tblprovincia_id' => 131,
                'nombre' => 'ZU&Ntilde;IGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'tblprovincia_id' => 132,
                'nombre' => 'HUARAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'tblprovincia_id' => 132,
                'nombre' => 'ATAVILLOS ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'tblprovincia_id' => 132,
                'nombre' => 'ATAVILLOS BAJO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'tblprovincia_id' => 132,
                'nombre' => 'AUCALLAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'tblprovincia_id' => 132,
                'nombre' => 'CHANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'tblprovincia_id' => 132,
                'nombre' => 'IHUARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'tblprovincia_id' => 132,
                'nombre' => 'LAMPIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'tblprovincia_id' => 132,
                'nombre' => 'PACARAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'tblprovincia_id' => 132,
                'nombre' => 'SAN MIGUEL DE ACOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'tblprovincia_id' => 132,
                'nombre' => 'SANTA CRUZ DE ANDAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'tblprovincia_id' => 132,
                'nombre' => 'SUMBILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'tblprovincia_id' => 132,
                'nombre' => 'VEINTISIETE DE NOVIEMBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'tblprovincia_id' => 133,
                'nombre' => 'MATUCANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'tblprovincia_id' => 133,
                'nombre' => 'ANTIOQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'tblprovincia_id' => 133,
                'nombre' => 'CALLAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'tblprovincia_id' => 133,
                'nombre' => 'CARAMPOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'tblprovincia_id' => 133,
                'nombre' => 'CHICLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'tblprovincia_id' => 133,
                'nombre' => 'CUENCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'tblprovincia_id' => 133,
                'nombre' => 'HUACHUPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'tblprovincia_id' => 133,
                'nombre' => 'HUANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'tblprovincia_id' => 133,
                'nombre' => 'HUAROCHIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'tblprovincia_id' => 133,
                'nombre' => 'LAHUAYTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'tblprovincia_id' => 133,
                'nombre' => 'LANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'tblprovincia_id' => 133,
                'nombre' => 'LARAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'tblprovincia_id' => 133,
                'nombre' => 'MARIATANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'tblprovincia_id' => 133,
                'nombre' => 'RICARDO PALMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN ANDRES DE TUPICOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN BARTOLOME',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN DAMIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN JUAN DE IRIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN JUAN DE TANTARANCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN LORENZO DE QUINTI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN MATEO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN MATEO DE OTAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN PEDRO DE CASTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'tblprovincia_id' => 133,
                'nombre' => 'SAN PEDRO DE HUANCAYRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'tblprovincia_id' => 133,
                'nombre' => 'SANGALLAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'tblprovincia_id' => 133,
                'nombre' => 'SANTA CRUZ DE COCACHACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'tblprovincia_id' => 133,
                'nombre' => 'SANTA EULALIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'tblprovincia_id' => 133,
                'nombre' => 'SANTIAGO DE ANCHUCAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'tblprovincia_id' => 133,
                'nombre' => 'SANTIAGO DE TUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'tblprovincia_id' => 133,
                'nombre' => 'SANTO DOMINGO DE LOS OLLEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'tblprovincia_id' => 133,
                'nombre' => 'SURCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'tblprovincia_id' => 134,
                'nombre' => 'HUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'tblprovincia_id' => 134,
                'nombre' => 'AMBAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'tblprovincia_id' => 134,
                'nombre' => 'CALETA DE CARQUIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'tblprovincia_id' => 134,
                'nombre' => 'CHECRAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'tblprovincia_id' => 134,
                'nombre' => 'HUALMAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'tblprovincia_id' => 134,
                'nombre' => 'HUAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'tblprovincia_id' => 134,
                'nombre' => 'LEONCIO PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'tblprovincia_id' => 134,
                'nombre' => 'PACCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'tblprovincia_id' => 134,
                'nombre' => 'SANTA LEONOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'tblprovincia_id' => 134,
                'nombre' => 'SANTA MARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'tblprovincia_id' => 134,
                'nombre' => 'SAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'tblprovincia_id' => 134,
                'nombre' => 'VEGUETA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'tblprovincia_id' => 135,
                'nombre' => 'OYON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'tblprovincia_id' => 135,
                'nombre' => 'ANDAJES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'tblprovincia_id' => 135,
                'nombre' => 'CAUJUL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'tblprovincia_id' => 135,
                'nombre' => 'COCHAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'tblprovincia_id' => 135,
                'nombre' => 'NAVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'tblprovincia_id' => 135,
                'nombre' => 'PACHANGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'tblprovincia_id' => 136,
                'nombre' => 'YAUYOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'tblprovincia_id' => 136,
                'nombre' => 'ALIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'tblprovincia_id' => 136,
                'nombre' => 'AYAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'tblprovincia_id' => 136,
                'nombre' => 'AYAVIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'tblprovincia_id' => 136,
                'nombre' => 'AZANGARO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'tblprovincia_id' => 136,
                'nombre' => 'CACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'tblprovincia_id' => 136,
                'nombre' => 'CARANIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'tblprovincia_id' => 136,
                'nombre' => 'CATAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'tblprovincia_id' => 136,
                'nombre' => 'CHOCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'tblprovincia_id' => 136,
                'nombre' => 'COCHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'tblprovincia_id' => 136,
                'nombre' => 'COLONIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'tblprovincia_id' => 136,
                'nombre' => 'HONGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'tblprovincia_id' => 136,
                'nombre' => 'HUAMPARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'tblprovincia_id' => 136,
                'nombre' => 'HUANCAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'tblprovincia_id' => 136,
                'nombre' => 'HUANGASCAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'tblprovincia_id' => 136,
                'nombre' => 'HUANTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'tblprovincia_id' => 136,
                'nombre' => 'HUA&Ntilde;EC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'tblprovincia_id' => 136,
                'nombre' => 'LARAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'tblprovincia_id' => 136,
                'nombre' => 'LINCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'tblprovincia_id' => 136,
                'nombre' => 'MADEAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'tblprovincia_id' => 136,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'tblprovincia_id' => 136,
                'nombre' => 'OMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'tblprovincia_id' => 136,
                'nombre' => 'PUTINZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'tblprovincia_id' => 136,
                'nombre' => 'QUINCHES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'tblprovincia_id' => 136,
                'nombre' => 'QUINOCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'tblprovincia_id' => 136,
                'nombre' => 'SAN JOAQUIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'tblprovincia_id' => 136,
                'nombre' => 'SAN PEDRO DE PILAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'tblprovincia_id' => 136,
                'nombre' => 'TANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'tblprovincia_id' => 136,
                'nombre' => 'TAURIPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'tblprovincia_id' => 136,
                'nombre' => 'TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'tblprovincia_id' => 136,
                'nombre' => 'TUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'tblprovincia_id' => 136,
                'nombre' => 'VI&Ntilde;AC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'tblprovincia_id' => 136,
                'nombre' => 'VITIS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'tblprovincia_id' => 137,
                'nombre' => 'IQUITOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'tblprovincia_id' => 137,
                'nombre' => 'ALTO NANAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'tblprovincia_id' => 137,
                'nombre' => 'FERNANDO LORES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'tblprovincia_id' => 137,
                'nombre' => 'INDIANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'tblprovincia_id' => 137,
                'nombre' => 'LAS AMAZONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'tblprovincia_id' => 137,
                'nombre' => 'MAZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'tblprovincia_id' => 137,
                'nombre' => 'NAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'tblprovincia_id' => 137,
                'nombre' => 'PUNCHANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'tblprovincia_id' => 137,
                'nombre' => 'PUTUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'tblprovincia_id' => 137,
                'nombre' => 'TORRES CAUSANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'tblprovincia_id' => 137,
                'nombre' => 'BELEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'tblprovincia_id' => 137,
                'nombre' => 'SAN JUAN BAUTISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'tblprovincia_id' => 138,
                'nombre' => 'YURIMAGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'tblprovincia_id' => 138,
                'nombre' => 'BALSAPUERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'tblprovincia_id' => 138,
                'nombre' => 'BARRANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'tblprovincia_id' => 138,
                'nombre' => 'CAHUAPANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'tblprovincia_id' => 138,
                'nombre' => 'JEBEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'tblprovincia_id' => 138,
                'nombre' => 'LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'tblprovincia_id' => 138,
                'nombre' => 'MANSERICHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'tblprovincia_id' => 138,
                'nombre' => 'MORONA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'tblprovincia_id' => 138,
                'nombre' => 'PASTAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'tblprovincia_id' => 138,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'tblprovincia_id' => 138,
                'nombre' => 'TENIENTE CESAR LOPEZ ROJAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'tblprovincia_id' => 139,
                'nombre' => 'NAUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'tblprovincia_id' => 139,
                'nombre' => 'PARINARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'tblprovincia_id' => 139,
                'nombre' => 'TIGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'tblprovincia_id' => 139,
                'nombre' => 'TROMPETEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'tblprovincia_id' => 139,
                'nombre' => 'URARINAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'tblprovincia_id' => 140,
                'nombre' => 'RAMON CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'tblprovincia_id' => 140,
                'nombre' => 'PEBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'tblprovincia_id' => 140,
                'nombre' => 'YAVARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'tblprovincia_id' => 140,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'tblprovincia_id' => 141,
                'nombre' => 'REQUENA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'tblprovincia_id' => 141,
                'nombre' => 'ALTO TAPICHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'tblprovincia_id' => 141,
                'nombre' => 'CAPELO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'tblprovincia_id' => 141,
                'nombre' => 'EMILIO SAN MARTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'tblprovincia_id' => 141,
                'nombre' => 'MAQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'tblprovincia_id' => 141,
                'nombre' => 'PUINAHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'tblprovincia_id' => 141,
                'nombre' => 'SAQUENA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'tblprovincia_id' => 141,
                'nombre' => 'SOPLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'tblprovincia_id' => 141,
                'nombre' => 'TAPICHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'tblprovincia_id' => 141,
                'nombre' => 'JENARO HERRERA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'tblprovincia_id' => 141,
                'nombre' => 'YAQUERANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'tblprovincia_id' => 142,
                'nombre' => 'CONTAMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'tblprovincia_id' => 142,
                'nombre' => 'INAHUAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'tblprovincia_id' => 142,
                'nombre' => 'PADRE MARQUEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'tblprovincia_id' => 142,
                'nombre' => 'PAMPA HERMOSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'tblprovincia_id' => 142,
                'nombre' => 'SARAYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'tblprovincia_id' => 142,
                'nombre' => 'VARGAS GUERRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'tblprovincia_id' => 143,
                'nombre' => 'TAMBOPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'tblprovincia_id' => 143,
                'nombre' => 'INAMBARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'tblprovincia_id' => 143,
                'nombre' => 'LAS PIEDRAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'tblprovincia_id' => 143,
                'nombre' => 'LABERINTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'tblprovincia_id' => 144,
                'nombre' => 'MANU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'tblprovincia_id' => 144,
                'nombre' => 'FITZCARRALD',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'tblprovincia_id' => 144,
                'nombre' => 'MADRE DE DIOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'tblprovincia_id' => 144,
                'nombre' => 'HUEPETUHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'tblprovincia_id' => 145,
                'nombre' => 'I&Ntilde;APARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'tblprovincia_id' => 145,
                'nombre' => 'IBERIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'tblprovincia_id' => 145,
                'nombre' => 'TAHUAMANU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'tblprovincia_id' => 146,
                'nombre' => 'MOQUEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'tblprovincia_id' => 146,
                'nombre' => 'CARUMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'tblprovincia_id' => 146,
                'nombre' => 'CUCHUMBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'tblprovincia_id' => 146,
                'nombre' => 'SAMEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'tblprovincia_id' => 146,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'tblprovincia_id' => 146,
                'nombre' => 'TORATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'tblprovincia_id' => 147,
                'nombre' => 'OMATE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'tblprovincia_id' => 147,
                'nombre' => 'CHOJATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'tblprovincia_id' => 147,
                'nombre' => 'COALAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'tblprovincia_id' => 147,
                'nombre' => 'ICHU&Ntilde;A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'tblprovincia_id' => 147,
                'nombre' => 'LA CAPILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'tblprovincia_id' => 147,
                'nombre' => 'LLOQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'tblprovincia_id' => 147,
                'nombre' => 'MATALAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'tblprovincia_id' => 147,
                'nombre' => 'PUQUINA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'tblprovincia_id' => 147,
                'nombre' => 'QUINISTAQUILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'tblprovincia_id' => 147,
                'nombre' => 'UBINAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'tblprovincia_id' => 147,
                'nombre' => 'YUNGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'tblprovincia_id' => 148,
                'nombre' => 'ILO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'tblprovincia_id' => 148,
                'nombre' => 'EL ALGARROBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('tbldistrito')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'tblprovincia_id' => 148,
                'nombre' => 'PACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'tblprovincia_id' => 149,
                'nombre' => 'CHAUPIMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'tblprovincia_id' => 149,
                'nombre' => 'HUACHON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'tblprovincia_id' => 149,
                'nombre' => 'HUARIACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'tblprovincia_id' => 149,
                'nombre' => 'HUAYLLAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'tblprovincia_id' => 149,
                'nombre' => 'NINACACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'tblprovincia_id' => 149,
                'nombre' => 'PALLANCHACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'tblprovincia_id' => 149,
                'nombre' => 'PAUCARTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'tblprovincia_id' => 149,
                'nombre' => 'SAN FCO.DE ASIS DE YARUSYACAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'tblprovincia_id' => 149,
                'nombre' => 'SIMON BOLIVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'tblprovincia_id' => 149,
                'nombre' => 'TICLACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'tblprovincia_id' => 149,
                'nombre' => 'TINYAHUARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'tblprovincia_id' => 149,
                'nombre' => 'VICCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'tblprovincia_id' => 149,
                'nombre' => 'YANACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'tblprovincia_id' => 150,
                'nombre' => 'YANAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'tblprovincia_id' => 150,
                'nombre' => 'CHACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'tblprovincia_id' => 150,
                'nombre' => 'GOYLLARISQUIZGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'tblprovincia_id' => 150,
                'nombre' => 'PAUCAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'tblprovincia_id' => 150,
                'nombre' => 'SAN PEDRO DE PILLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'tblprovincia_id' => 150,
                'nombre' => 'SANTA ANA DE TUSI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'tblprovincia_id' => 150,
                'nombre' => 'TAPUC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'tblprovincia_id' => 150,
                'nombre' => 'VILCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'tblprovincia_id' => 151,
                'nombre' => 'OXAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'tblprovincia_id' => 151,
                'nombre' => 'CHONTABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'tblprovincia_id' => 151,
                'nombre' => 'HUANCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'tblprovincia_id' => 151,
                'nombre' => 'PALCAZU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'tblprovincia_id' => 151,
                'nombre' => 'POZUZO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'tblprovincia_id' => 151,
                'nombre' => 'PUERTO BERMUDEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'tblprovincia_id' => 151,
                'nombre' => 'VILLA RICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'tblprovincia_id' => 152,
                'nombre' => 'PIURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'tblprovincia_id' => 152,
                'nombre' => 'CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'tblprovincia_id' => 152,
                'nombre' => 'CATACAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'tblprovincia_id' => 152,
                'nombre' => 'CURA MORI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'tblprovincia_id' => 152,
                'nombre' => 'EL TALLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'tblprovincia_id' => 152,
                'nombre' => 'LA ARENA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'tblprovincia_id' => 152,
                'nombre' => 'LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'tblprovincia_id' => 152,
                'nombre' => 'LAS LOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'tblprovincia_id' => 152,
                'nombre' => 'TAMBO GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'tblprovincia_id' => 153,
                'nombre' => 'AYABACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'tblprovincia_id' => 153,
                'nombre' => 'FRIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'tblprovincia_id' => 153,
                'nombre' => 'JILILI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'tblprovincia_id' => 153,
                'nombre' => 'LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'tblprovincia_id' => 153,
                'nombre' => 'MONTERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'tblprovincia_id' => 153,
                'nombre' => 'PACAIPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'tblprovincia_id' => 153,
                'nombre' => 'PAIMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'tblprovincia_id' => 153,
                'nombre' => 'SAPILLICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'tblprovincia_id' => 153,
                'nombre' => 'SICCHEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'tblprovincia_id' => 153,
                'nombre' => 'SUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'tblprovincia_id' => 154,
                'nombre' => 'HUANCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'tblprovincia_id' => 154,
                'nombre' => 'CANCHAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'tblprovincia_id' => 154,
                'nombre' => 'EL CARMEN DE LA FRONTERA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'tblprovincia_id' => 154,
                'nombre' => 'HUARMACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'tblprovincia_id' => 154,
                'nombre' => 'LALAQUIZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'tblprovincia_id' => 154,
                'nombre' => 'SAN MIGUEL DE EL FAIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'tblprovincia_id' => 154,
                'nombre' => 'SONDOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'tblprovincia_id' => 154,
                'nombre' => 'SONDORILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'tblprovincia_id' => 155,
                'nombre' => 'CHULUCANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'tblprovincia_id' => 155,
                'nombre' => 'BUENOS AIRES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'tblprovincia_id' => 155,
                'nombre' => 'CHALACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'tblprovincia_id' => 155,
                'nombre' => 'LA MATANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'tblprovincia_id' => 155,
                'nombre' => 'MORROPON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'tblprovincia_id' => 155,
                'nombre' => 'SALITRAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'tblprovincia_id' => 155,
                'nombre' => 'SAN JUAN DE BIGOTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'tblprovincia_id' => 155,
                'nombre' => 'SANTA CATALINA DE MOSSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'tblprovincia_id' => 155,
                'nombre' => 'SANTO DOMINGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'tblprovincia_id' => 155,
                'nombre' => 'YAMANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'tblprovincia_id' => 156,
                'nombre' => 'PAITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'tblprovincia_id' => 156,
                'nombre' => 'AMOTAPE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'tblprovincia_id' => 156,
                'nombre' => 'ARENAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'tblprovincia_id' => 156,
                'nombre' => 'COLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'tblprovincia_id' => 156,
                'nombre' => 'LA HUACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'tblprovincia_id' => 156,
                'nombre' => 'TAMARINDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'tblprovincia_id' => 156,
                'nombre' => 'VICHAYAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'tblprovincia_id' => 157,
                'nombre' => 'SULLANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'tblprovincia_id' => 157,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'tblprovincia_id' => 157,
                'nombre' => 'IGNACIO ESCUDERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'tblprovincia_id' => 157,
                'nombre' => 'LANCONES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'tblprovincia_id' => 157,
                'nombre' => 'MARCAVELICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'tblprovincia_id' => 157,
                'nombre' => 'MIGUEL CHECA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'tblprovincia_id' => 157,
                'nombre' => 'QUERECOTILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'tblprovincia_id' => 157,
                'nombre' => 'SALITRAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'tblprovincia_id' => 158,
                'nombre' => 'PARI&Ntilde;AS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'tblprovincia_id' => 158,
                'nombre' => 'EL ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'tblprovincia_id' => 158,
                'nombre' => 'LA BREA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'tblprovincia_id' => 158,
                'nombre' => 'LOBITOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'tblprovincia_id' => 158,
                'nombre' => 'LOS ORGANOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'tblprovincia_id' => 158,
                'nombre' => 'MANCORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'tblprovincia_id' => 159,
                'nombre' => 'SECHURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'tblprovincia_id' => 159,
                'nombre' => 'BELLAVISTA DE LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'tblprovincia_id' => 159,
                'nombre' => 'BERNAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'tblprovincia_id' => 159,
                'nombre' => 'CRISTO NOS VALGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'tblprovincia_id' => 159,
                'nombre' => 'VICE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'tblprovincia_id' => 159,
                'nombre' => 'RINCONADA LLICUAR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'tblprovincia_id' => 160,
                'nombre' => 'PUNO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'tblprovincia_id' => 160,
                'nombre' => 'ACORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'tblprovincia_id' => 160,
                'nombre' => 'AMANTANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'tblprovincia_id' => 160,
                'nombre' => 'ATUNCOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'tblprovincia_id' => 160,
                'nombre' => 'CAPACHICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'tblprovincia_id' => 160,
                'nombre' => 'CHUCUITO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'tblprovincia_id' => 160,
                'nombre' => 'COATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'tblprovincia_id' => 160,
                'nombre' => 'HUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'tblprovincia_id' => 160,
                'nombre' => 'MA&Ntilde;AZO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'tblprovincia_id' => 160,
                'nombre' => 'PAUCARCOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'tblprovincia_id' => 160,
                'nombre' => 'PICHACANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'tblprovincia_id' => 160,
                'nombre' => 'PLATERIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'tblprovincia_id' => 160,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'tblprovincia_id' => 160,
                'nombre' => 'TIQUILLACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'tblprovincia_id' => 160,
                'nombre' => 'VILQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'tblprovincia_id' => 161,
                'nombre' => 'AZANGARO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'tblprovincia_id' => 161,
                'nombre' => 'ACHAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'tblprovincia_id' => 161,
                'nombre' => 'ARAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'tblprovincia_id' => 161,
                'nombre' => 'ASILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'tblprovincia_id' => 161,
                'nombre' => 'CAMINACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'tblprovincia_id' => 161,
                'nombre' => 'CHUPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'tblprovincia_id' => 161,
                'nombre' => 'JOSE DOMINGO CHOQUEHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'tblprovincia_id' => 161,
                'nombre' => 'MU&Ntilde;ANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'tblprovincia_id' => 161,
                'nombre' => 'POTONI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'tblprovincia_id' => 161,
                'nombre' => 'SAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'tblprovincia_id' => 161,
                'nombre' => 'SAN ANTON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'tblprovincia_id' => 161,
                'nombre' => 'SAN JOSE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'tblprovincia_id' => 161,
                'nombre' => 'SAN JUAN DE SALINAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'tblprovincia_id' => 161,
                'nombre' => 'SANTIAGO DE PUPUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'tblprovincia_id' => 161,
                'nombre' => 'TIRAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'tblprovincia_id' => 162,
                'nombre' => 'MACUSANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'tblprovincia_id' => 162,
                'nombre' => 'AJOYANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'tblprovincia_id' => 162,
                'nombre' => 'AYAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'tblprovincia_id' => 162,
                'nombre' => 'COASA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'tblprovincia_id' => 162,
                'nombre' => 'CORANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'tblprovincia_id' => 162,
                'nombre' => 'CRUCERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'tblprovincia_id' => 162,
                'nombre' => 'ITUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'tblprovincia_id' => 162,
                'nombre' => 'OLLACHEA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'tblprovincia_id' => 162,
                'nombre' => 'SAN GABAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'tblprovincia_id' => 162,
                'nombre' => 'USICAYOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'tblprovincia_id' => 163,
                'nombre' => 'JULI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'tblprovincia_id' => 163,
                'nombre' => 'DESAGUADERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'tblprovincia_id' => 163,
                'nombre' => 'HUACULLANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'tblprovincia_id' => 163,
                'nombre' => 'KELLUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'tblprovincia_id' => 163,
                'nombre' => 'PISACOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'tblprovincia_id' => 163,
                'nombre' => 'POMATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'tblprovincia_id' => 163,
                'nombre' => 'ZEPITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'tblprovincia_id' => 164,
                'nombre' => 'ILAVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'tblprovincia_id' => 164,
                'nombre' => 'CAPAZO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'tblprovincia_id' => 164,
                'nombre' => 'PILCUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'tblprovincia_id' => 164,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'tblprovincia_id' => 164,
                'nombre' => 'CONDURIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'tblprovincia_id' => 165,
                'nombre' => 'HUANCANE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'tblprovincia_id' => 165,
                'nombre' => 'COJATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'tblprovincia_id' => 165,
                'nombre' => 'HUATASANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'tblprovincia_id' => 165,
                'nombre' => 'INCHUPALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'tblprovincia_id' => 165,
                'nombre' => 'PUSI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'tblprovincia_id' => 165,
                'nombre' => 'ROSASPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'tblprovincia_id' => 165,
                'nombre' => 'TARACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'tblprovincia_id' => 165,
                'nombre' => 'VILQUE CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'tblprovincia_id' => 166,
                'nombre' => 'LAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'tblprovincia_id' => 166,
                'nombre' => 'CABANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'tblprovincia_id' => 166,
                'nombre' => 'CALAPUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'tblprovincia_id' => 166,
                'nombre' => 'NICASIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'tblprovincia_id' => 166,
                'nombre' => 'OCUVIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'tblprovincia_id' => 166,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'tblprovincia_id' => 166,
                'nombre' => 'PARATIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'tblprovincia_id' => 166,
                'nombre' => 'PUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'tblprovincia_id' => 166,
                'nombre' => 'SANTA LUCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'tblprovincia_id' => 166,
                'nombre' => 'VILAVILA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'tblprovincia_id' => 167,
                'nombre' => 'AYAVIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'tblprovincia_id' => 167,
                'nombre' => 'ANTAUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'tblprovincia_id' => 167,
                'nombre' => 'CUPI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'tblprovincia_id' => 167,
                'nombre' => 'LLALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'tblprovincia_id' => 167,
                'nombre' => 'MACARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'tblprovincia_id' => 167,
                'nombre' => 'NU&Ntilde;OA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'tblprovincia_id' => 167,
                'nombre' => 'ORURILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'tblprovincia_id' => 167,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'tblprovincia_id' => 167,
                'nombre' => 'UMACHIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'tblprovincia_id' => 168,
                'nombre' => 'MOHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'tblprovincia_id' => 168,
                'nombre' => 'CONIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'tblprovincia_id' => 168,
                'nombre' => 'HUAYRAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'tblprovincia_id' => 168,
                'nombre' => 'TILALI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'tblprovincia_id' => 169,
                'nombre' => 'PUTINA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'tblprovincia_id' => 169,
                'nombre' => 'ANANEA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'tblprovincia_id' => 169,
                'nombre' => 'PEDRO VILCA APAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'tblprovincia_id' => 169,
                'nombre' => 'QUILCAPUNCU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'tblprovincia_id' => 169,
                'nombre' => 'SINA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'tblprovincia_id' => 170,
                'nombre' => 'JULIACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'tblprovincia_id' => 170,
                'nombre' => 'CABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'tblprovincia_id' => 170,
                'nombre' => 'CABANILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'tblprovincia_id' => 170,
                'nombre' => 'CARACOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'tblprovincia_id' => 171,
                'nombre' => 'SANDIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'tblprovincia_id' => 171,
                'nombre' => 'CUYOCUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'tblprovincia_id' => 171,
                'nombre' => 'LIMBANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'tblprovincia_id' => 171,
                'nombre' => 'PATAMBUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'tblprovincia_id' => 171,
                'nombre' => 'PHARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'tblprovincia_id' => 171,
                'nombre' => 'QUIACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'tblprovincia_id' => 171,
                'nombre' => 'SAN JUAN DEL ORO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'tblprovincia_id' => 171,
                'nombre' => 'YANAHUAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'tblprovincia_id' => 171,
                'nombre' => 'ALTO INAMBARI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'tblprovincia_id' => 172,
                'nombre' => 'YUNGUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'tblprovincia_id' => 172,
                'nombre' => 'ANAPIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'tblprovincia_id' => 172,
                'nombre' => 'COPANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'tblprovincia_id' => 172,
                'nombre' => 'CUTURAPI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'tblprovincia_id' => 172,
                'nombre' => 'OLLARAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'tblprovincia_id' => 172,
                'nombre' => 'TINICACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'tblprovincia_id' => 172,
                'nombre' => 'UNICACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'tblprovincia_id' => 173,
                'nombre' => 'MOYOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'tblprovincia_id' => 173,
                'nombre' => 'CALZADA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'tblprovincia_id' => 173,
                'nombre' => 'HABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'tblprovincia_id' => 173,
                'nombre' => 'JEPELACIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'tblprovincia_id' => 173,
                'nombre' => 'SORITOR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'tblprovincia_id' => 173,
                'nombre' => 'YANTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'tblprovincia_id' => 174,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'tblprovincia_id' => 174,
                'nombre' => 'ALTO BIAVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'tblprovincia_id' => 174,
                'nombre' => 'BAJO BIAVO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'tblprovincia_id' => 174,
                'nombre' => 'HUALLAGA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'tblprovincia_id' => 174,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'tblprovincia_id' => 174,
                'nombre' => 'SAN RAFAEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'tblprovincia_id' => 175,
                'nombre' => 'SAN JOSE DE SISA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'tblprovincia_id' => 175,
                'nombre' => 'AGUA BLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'tblprovincia_id' => 175,
                'nombre' => 'SAN MARTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'tblprovincia_id' => 175,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'tblprovincia_id' => 175,
                'nombre' => 'SHATOJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'tblprovincia_id' => 176,
                'nombre' => 'SAPOSOA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'tblprovincia_id' => 176,
                'nombre' => 'ALTO SAPOSOA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'tblprovincia_id' => 176,
                'nombre' => 'EL ESLABON',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'tblprovincia_id' => 176,
                'nombre' => 'PISCOYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'tblprovincia_id' => 176,
                'nombre' => 'SACANCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'tblprovincia_id' => 176,
                'nombre' => 'TINGO DE SAPOSOA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'tblprovincia_id' => 177,
                'nombre' => 'LAMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'tblprovincia_id' => 177,
                'nombre' => 'ALONSO DE ALVARADO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'tblprovincia_id' => 177,
                'nombre' => 'BARRANQUITA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'tblprovincia_id' => 177,
                'nombre' => 'CAYNARACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'tblprovincia_id' => 177,
                'nombre' => 'CU&Ntilde;UMBUQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'tblprovincia_id' => 177,
                'nombre' => 'PINTO RECODO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'tblprovincia_id' => 177,
                'nombre' => 'RUMISAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'tblprovincia_id' => 177,
                'nombre' => 'SAN ROQUE DE CUMBAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'tblprovincia_id' => 177,
                'nombre' => 'SHANAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'tblprovincia_id' => 177,
                'nombre' => 'TABALOSOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'tblprovincia_id' => 177,
                'nombre' => 'ZAPATERO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'tblprovincia_id' => 178,
                'nombre' => 'JUANJUI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'tblprovincia_id' => 178,
                'nombre' => 'CAMPANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'tblprovincia_id' => 178,
                'nombre' => 'HUICUNGO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'tblprovincia_id' => 178,
                'nombre' => 'PACHIZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'tblprovincia_id' => 178,
                'nombre' => 'PAJARILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'tblprovincia_id' => 179,
                'nombre' => 'PICOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'tblprovincia_id' => 179,
                'nombre' => 'BUENOS AIRES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'tblprovincia_id' => 179,
                'nombre' => 'CASPISAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'tblprovincia_id' => 179,
                'nombre' => 'PILLUANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'tblprovincia_id' => 179,
                'nombre' => 'PUCACACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'tblprovincia_id' => 179,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'tblprovincia_id' => 179,
                'nombre' => 'SAN HILARION',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'tblprovincia_id' => 179,
                'nombre' => 'SHAMBOYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'tblprovincia_id' => 179,
                'nombre' => 'TINGO DE PONASA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'tblprovincia_id' => 179,
                'nombre' => 'TRES UNIDOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'tblprovincia_id' => 180,
                'nombre' => 'RIOJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'tblprovincia_id' => 180,
                'nombre' => 'AWAJUN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'tblprovincia_id' => 180,
                'nombre' => 'ELIAS SOPLIN VARGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'tblprovincia_id' => 180,
                'nombre' => 'NUEVA CAJAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'tblprovincia_id' => 180,
                'nombre' => 'PARDO MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'tblprovincia_id' => 180,
                'nombre' => 'POSIC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'tblprovincia_id' => 180,
                'nombre' => 'SAN FERNANDO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'tblprovincia_id' => 180,
                'nombre' => 'YORONGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'tblprovincia_id' => 180,
                'nombre' => 'YURACYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'tblprovincia_id' => 181,
                'nombre' => 'TARAPOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'tblprovincia_id' => 181,
                'nombre' => 'ALBERTO LEVEAU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'tblprovincia_id' => 181,
                'nombre' => 'CACATACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'tblprovincia_id' => 181,
                'nombre' => 'CHAZUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'tblprovincia_id' => 181,
                'nombre' => 'CHIPURANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'tblprovincia_id' => 181,
                'nombre' => 'EL PORVENIR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'tblprovincia_id' => 181,
                'nombre' => 'HUIMBAYOC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'tblprovincia_id' => 181,
                'nombre' => 'JUAN GUERRA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'tblprovincia_id' => 181,
                'nombre' => 'LA BANDA DE SHILCAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'tblprovincia_id' => 181,
                'nombre' => 'MORALES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'tblprovincia_id' => 181,
                'nombre' => 'PAPAPLAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'tblprovincia_id' => 181,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'tblprovincia_id' => 181,
                'nombre' => 'SAUCE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'tblprovincia_id' => 181,
                'nombre' => 'SHAPAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'tblprovincia_id' => 182,
                'nombre' => 'TOCACHE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'tblprovincia_id' => 182,
                'nombre' => 'NUEVO PROGRESO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'tblprovincia_id' => 182,
                'nombre' => 'POLVORA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'tblprovincia_id' => 182,
                'nombre' => 'SHUNTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'tblprovincia_id' => 182,
                'nombre' => 'UCHIZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'tblprovincia_id' => 183,
                'nombre' => 'TACNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'tblprovincia_id' => 183,
                'nombre' => 'ALTO DE LA ALIANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'tblprovincia_id' => 183,
                'nombre' => 'CALANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'tblprovincia_id' => 183,
                'nombre' => 'CIUDAD NUEVA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'tblprovincia_id' => 183,
                'nombre' => 'INCLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'tblprovincia_id' => 183,
                'nombre' => 'PACHIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'tblprovincia_id' => 183,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'tblprovincia_id' => 183,
                'nombre' => 'POCOLLAY',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'tblprovincia_id' => 183,
                'nombre' => 'SAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'tblprovincia_id' => 183,
                'nombre' => 'CORONEL GREGORIO ALBARRACIN LANCHIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'tblprovincia_id' => 184,
                'nombre' => 'CANDARAVE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'tblprovincia_id' => 184,
                'nombre' => 'CAIRANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'tblprovincia_id' => 184,
                'nombre' => 'CAMILACA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'tblprovincia_id' => 184,
                'nombre' => 'CURIBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'tblprovincia_id' => 184,
                'nombre' => 'HUANUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'tblprovincia_id' => 184,
                'nombre' => 'QUILAHUANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'tblprovincia_id' => 185,
                'nombre' => 'LOCUMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'tblprovincia_id' => 185,
                'nombre' => 'ILABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'tblprovincia_id' => 185,
                'nombre' => 'ITE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'tblprovincia_id' => 186,
                'nombre' => 'TARATA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'tblprovincia_id' => 186,
                'nombre' => 'CHUCATAMANI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'tblprovincia_id' => 186,
                'nombre' => 'ESTIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'tblprovincia_id' => 186,
                'nombre' => 'ESTIQUE-PAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'tblprovincia_id' => 186,
                'nombre' => 'SITAJARA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'tblprovincia_id' => 186,
                'nombre' => 'SUSAPAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'tblprovincia_id' => 186,
                'nombre' => 'TARUCACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'tblprovincia_id' => 186,
                'nombre' => 'TICACO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'tblprovincia_id' => 187,
                'nombre' => 'TUMBES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'tblprovincia_id' => 187,
                'nombre' => 'CORRALES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'tblprovincia_id' => 187,
                'nombre' => 'LA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'tblprovincia_id' => 187,
                'nombre' => 'PAMPAS DE HOSPITAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'tblprovincia_id' => 187,
                'nombre' => 'SAN JACINTO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'tblprovincia_id' => 187,
                'nombre' => 'SAN JUAN DE LA VIRGEN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'tblprovincia_id' => 188,
                'nombre' => 'ZORRITOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'tblprovincia_id' => 188,
                'nombre' => 'CASITAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'tblprovincia_id' => 189,
                'nombre' => 'ZARUMILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'tblprovincia_id' => 189,
                'nombre' => 'AGUAS VERDES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'tblprovincia_id' => 189,
                'nombre' => 'MATAPALO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'tblprovincia_id' => 189,
                'nombre' => 'PAPAYAL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'tblprovincia_id' => 190,
                'nombre' => 'CALLERIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'tblprovincia_id' => 190,
                'nombre' => 'CAMPOVERDE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'tblprovincia_id' => 190,
                'nombre' => 'IPARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'tblprovincia_id' => 190,
                'nombre' => 'MASISEA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'tblprovincia_id' => 190,
                'nombre' => 'YARINACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'tblprovincia_id' => 190,
                'nombre' => 'NUEVA REQUENA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'tblprovincia_id' => 191,
                'nombre' => 'RAYMONDI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'tblprovincia_id' => 191,
                'nombre' => 'SEPAHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'tblprovincia_id' => 191,
                'nombre' => 'TAHUANIA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'tblprovincia_id' => 191,
                'nombre' => 'YURUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'tblprovincia_id' => 192,
                'nombre' => 'PADRE ABAD',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'tblprovincia_id' => 192,
                'nombre' => 'IRAZOLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'tblprovincia_id' => 192,
                'nombre' => 'CURIMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'tblprovincia_id' => 193,
                'nombre' => 'PURUS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}