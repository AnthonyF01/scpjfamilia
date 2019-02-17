<?php

use Illuminate\Database\Seeder;

class TblprovinciaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblprovincia')->delete();
        
        \DB::table('tblprovincia')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010100',
                'nombre' => 'Chachapoyas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010200',
                'nombre' => 'Bagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010300',
                'nombre' => 'Bongará',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010400',
                'nombre' => 'Condorcanqui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010500',
                'nombre' => 'Luya',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010600',
                'nombre' => 'Rodríguez de Mendoza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tbldepartamento_id' => 1,
                'ubigeo' => '010700',
                'nombre' => 'Utcubamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020100',
                'nombre' => 'Huaraz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020200',
                'nombre' => 'Aija',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020300',
                'nombre' => 'Antonio Raymondi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020400',
                'nombre' => 'Asunción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020500',
                'nombre' => 'Bolognesi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020600',
                'nombre' => 'Carhuaz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020700',
                'nombre' => 'Carlos Fermín Fitzcarrald',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020800',
                'nombre' => 'Casma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tbldepartamento_id' => 2,
                'ubigeo' => '020900',
                'nombre' => 'Corongo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021000',
                'nombre' => 'Huari',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021100',
                'nombre' => 'Huarmey',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021200',
                'nombre' => 'Huaylas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021300',
                'nombre' => 'Mariscal Luzuriaga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021400',
                'nombre' => 'Ocros',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021500',
                'nombre' => 'Pallasca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021600',
                'nombre' => 'Pomabamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021700',
                'nombre' => 'Recuay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021800',
                'nombre' => 'Santa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'tbldepartamento_id' => 2,
                'ubigeo' => '021900',
                'nombre' => 'Sihuas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'tbldepartamento_id' => 2,
                'ubigeo' => '022000',
                'nombre' => 'Yungay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030100',
                'nombre' => 'Abancay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030200',
                'nombre' => 'Andahuaylas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030300',
                'nombre' => 'Antabamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030400',
                'nombre' => 'Aymaraes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030500',
                'nombre' => 'Cotabambas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030600',
                'nombre' => 'Chincheros',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'tbldepartamento_id' => 3,
                'ubigeo' => '030700',
                'nombre' => 'Grau',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040100',
                'nombre' => 'Arequipa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040200',
                'nombre' => 'Camaná',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040300',
                'nombre' => 'Caravelí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040400',
                'nombre' => 'Castilla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040500',
                'nombre' => 'Caylloma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040600',
                'nombre' => 'Condesuyos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040700',
                'nombre' => 'Islay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'tbldepartamento_id' => 4,
                'ubigeo' => '040800',
                'nombre' => 'La Uniòn',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050100',
                'nombre' => 'Huamanga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050200',
                'nombre' => 'Cangallo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050300',
                'nombre' => 'Huanca Sancos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050400',
                'nombre' => 'Huanta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050500',
                'nombre' => 'La Mar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050600',
                'nombre' => 'Lucanas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050700',
                'nombre' => 'Parinacochas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050800',
                'nombre' => 'Pàucar del Sara Sara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'tbldepartamento_id' => 5,
                'ubigeo' => '050900',
                'nombre' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'tbldepartamento_id' => 5,
                'ubigeo' => '051000',
                'nombre' => 'Víctor Fajardo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'tbldepartamento_id' => 5,
                'ubigeo' => '051100',
                'nombre' => 'Vilcas Huamán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060100',
                'nombre' => 'Cajamarca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060200',
                'nombre' => 'Cajabamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060300',
                'nombre' => 'Celendín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060400',
                'nombre' => 'Chota',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060500',
                'nombre' => 'Contumazá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060600',
                'nombre' => 'Cutervo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060700',
                'nombre' => 'Hualgayoc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060800',
                'nombre' => 'Jaén',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'tbldepartamento_id' => 6,
                'ubigeo' => '060900',
                'nombre' => 'San Ignacio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'tbldepartamento_id' => 6,
                'ubigeo' => '061000',
                'nombre' => 'San Marcos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'tbldepartamento_id' => 6,
                'ubigeo' => '061100',
                'nombre' => 'San Miguel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'tbldepartamento_id' => 6,
                'ubigeo' => '061200',
                'nombre' => 'San Pablo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'tbldepartamento_id' => 6,
                'ubigeo' => '061300',
                'nombre' => 'Santa Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'tbldepartamento_id' => 7,
                'ubigeo' => '070100',
                'nombre' => 'Prov. Const. del Callao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080100',
                'nombre' => 'Cusco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080200',
                'nombre' => 'Acomayo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080300',
                'nombre' => 'Anta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080400',
                'nombre' => 'Calca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080500',
                'nombre' => 'Canas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080600',
                'nombre' => 'Canchis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080700',
                'nombre' => 'Chumbivilcas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080800',
                'nombre' => 'Espinar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'tbldepartamento_id' => 8,
                'ubigeo' => '080900',
                'nombre' => 'La Convención',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'tbldepartamento_id' => 8,
                'ubigeo' => '081000',
                'nombre' => 'Paruro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'tbldepartamento_id' => 8,
                'ubigeo' => '081100',
                'nombre' => 'Paucartambo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'tbldepartamento_id' => 8,
                'ubigeo' => '081200',
                'nombre' => 'Quispicanchi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'tbldepartamento_id' => 8,
                'ubigeo' => '081300',
                'nombre' => 'Urubamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090100',
                'nombre' => 'Huancavelica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090200',
                'nombre' => 'Acobamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090300',
                'nombre' => 'Angaraes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090400',
                'nombre' => 'Castrovirreyna',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090500',
                'nombre' => 'Churcampa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090600',
                'nombre' => 'Huaytará',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'tbldepartamento_id' => 9,
                'ubigeo' => '090700',
                'nombre' => 'Tayacaja',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100100',
                'nombre' => 'Huánuco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100200',
                'nombre' => 'Ambo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100300',
                'nombre' => 'Dos de Mayo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100400',
                'nombre' => 'Huacaybamba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100500',
                'nombre' => 'Huamalíes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100600',
                'nombre' => 'Leoncio Prado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100700',
                'nombre' => 'Marañón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100800',
                'nombre' => 'Pachitea',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'tbldepartamento_id' => 10,
                'ubigeo' => '100900',
                'nombre' => 'Puerto Inca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'tbldepartamento_id' => 10,
                'ubigeo' => '101000',
                'nombre' => 'Lauricocha ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'tbldepartamento_id' => 10,
                'ubigeo' => '101100',
                'nombre' => 'Yarowilca ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'tbldepartamento_id' => 11,
                'ubigeo' => '110100',
                'nombre' => 'Ica ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'tbldepartamento_id' => 11,
                'ubigeo' => '110200',
                'nombre' => 'Chincha ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'tbldepartamento_id' => 11,
                'ubigeo' => '110300',
                'nombre' => 'Nasca ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'tbldepartamento_id' => 11,
                'ubigeo' => '110400',
                'nombre' => 'Palpa ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'tbldepartamento_id' => 11,
                'ubigeo' => '110500',
                'nombre' => 'Pisco ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120100',
                'nombre' => 'Huancayo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120200',
                'nombre' => 'Concepción ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120300',
                'nombre' => 'Chanchamayo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120400',
                'nombre' => 'Jauja ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120500',
                'nombre' => 'Junín ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120600',
                'nombre' => 'Satipo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120700',
                'nombre' => 'Tarma ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120800',
                'nombre' => 'Yauli ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'tbldepartamento_id' => 12,
                'ubigeo' => '120900',
                'nombre' => 'Chupaca ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130100',
                'nombre' => 'Trujillo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130200',
                'nombre' => 'Ascope ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130300',
                'nombre' => 'Bolívar ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130400',
                'nombre' => 'Chepén ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130500',
                'nombre' => 'Julcán ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130600',
                'nombre' => 'Otuzco ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130700',
                'nombre' => 'Pacasmayo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130800',
                'nombre' => 'Pataz ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'tbldepartamento_id' => 13,
                'ubigeo' => '130900',
                'nombre' => 'Sánchez Carrión ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'tbldepartamento_id' => 13,
                'ubigeo' => '131000',
                'nombre' => 'Santiago de Chuco ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'tbldepartamento_id' => 13,
                'ubigeo' => '131100',
                'nombre' => 'Gran Chimú ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'tbldepartamento_id' => 13,
                'ubigeo' => '131200',
                'nombre' => 'Virú ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'tbldepartamento_id' => 14,
                'ubigeo' => '140100',
                'nombre' => 'Chiclayo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'tbldepartamento_id' => 14,
                'ubigeo' => '140200',
                'nombre' => 'Ferreñafe ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'tbldepartamento_id' => 14,
                'ubigeo' => '140300',
                'nombre' => 'Lambayeque ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150100',
                'nombre' => 'Lima ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150200',
                'nombre' => 'Barranca ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150300',
                'nombre' => 'Cajatambo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150400',
                'nombre' => 'Canta ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150500',
                'nombre' => 'Cañete ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150600',
                'nombre' => 'Huaral ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150700',
                'nombre' => 'Huarochirí ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150800',
                'nombre' => 'Huaura ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'tbldepartamento_id' => 15,
                'ubigeo' => '150900',
                'nombre' => 'Oyón ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'tbldepartamento_id' => 15,
                'ubigeo' => '151000',
                'nombre' => 'Yauyos ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160100',
                'nombre' => 'Maynas ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160200',
                'nombre' => 'Alto Amazonas ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160300',
                'nombre' => 'Loreto ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160400',
                'nombre' => 'Mariscal Ramón Castilla ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160500',
                'nombre' => 'Requena ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160600',
                'nombre' => 'Ucayali ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160700',
                'nombre' => 'Datem del Marañón ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'tbldepartamento_id' => 16,
                'ubigeo' => '160800',
                'nombre' => 'Putumayo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'tbldepartamento_id' => 17,
                'ubigeo' => '170100',
                'nombre' => 'Tambopata ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'tbldepartamento_id' => 17,
                'ubigeo' => '170200',
                'nombre' => 'Manu ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'tbldepartamento_id' => 17,
                'ubigeo' => '170300',
                'nombre' => 'Tahuamanu ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'tbldepartamento_id' => 18,
                'ubigeo' => '180100',
                'nombre' => 'Mariscal Nieto ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'tbldepartamento_id' => 18,
                'ubigeo' => '180200',
                'nombre' => 'General Sánchez Cerro ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'tbldepartamento_id' => 18,
                'ubigeo' => '180300',
                'nombre' => 'Ilo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'tbldepartamento_id' => 19,
                'ubigeo' => '190100',
                'nombre' => 'Pasco ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'tbldepartamento_id' => 19,
                'ubigeo' => '190200',
                'nombre' => 'Daniel Alcides Carrión ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'tbldepartamento_id' => 19,
                'ubigeo' => '190300',
                'nombre' => 'Oxapampa ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200100',
                'nombre' => 'Piura ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200200',
                'nombre' => 'Ayabaca ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200300',
                'nombre' => 'Huancabamba ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200400',
                'nombre' => 'Morropón ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200500',
                'nombre' => 'Paita ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200600',
                'nombre' => 'Sullana ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200700',
                'nombre' => 'Talara ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'tbldepartamento_id' => 20,
                'ubigeo' => '200800',
                'nombre' => 'Sechura ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210100',
                'nombre' => 'Puno ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210200',
                'nombre' => 'Azángaro ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210300',
                'nombre' => 'Carabaya ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210400',
                'nombre' => 'Chucuito ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210500',
                'nombre' => 'El Collao ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210600',
                'nombre' => 'Huancané ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210700',
                'nombre' => 'Lampa ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210800',
                'nombre' => 'Melgar ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'tbldepartamento_id' => 21,
                'ubigeo' => '210900',
                'nombre' => 'Moho ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'tbldepartamento_id' => 21,
                'ubigeo' => '211000',
                'nombre' => 'San Antonio de Putina ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'tbldepartamento_id' => 21,
                'ubigeo' => '211100',
                'nombre' => 'San Román ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'tbldepartamento_id' => 21,
                'ubigeo' => '211200',
                'nombre' => 'Sandia ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'tbldepartamento_id' => 21,
                'ubigeo' => '211300',
                'nombre' => 'Yunguyo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220100',
                'nombre' => 'Moyobamba ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220200',
                'nombre' => 'Bellavista ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220300',
                'nombre' => 'El Dorado ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220400',
                'nombre' => 'Huallaga ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220500',
                'nombre' => 'Lamas ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220600',
                'nombre' => 'Mariscal Cáceres ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220700',
                'nombre' => 'Picota ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220800',
                'nombre' => 'Rioja ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'tbldepartamento_id' => 22,
                'ubigeo' => '220900',
                'nombre' => 'San Martín ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'tbldepartamento_id' => 22,
                'ubigeo' => '221000',
                'nombre' => 'Tocache ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'tbldepartamento_id' => 23,
                'ubigeo' => '230100',
                'nombre' => 'Tacna ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'tbldepartamento_id' => 23,
                'ubigeo' => '230200',
                'nombre' => 'Candarave ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'tbldepartamento_id' => 23,
                'ubigeo' => '230300',
                'nombre' => 'Jorge Basadre ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'tbldepartamento_id' => 23,
                'ubigeo' => '230400',
                'nombre' => 'Tarata ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'tbldepartamento_id' => 24,
                'ubigeo' => '240100',
                'nombre' => 'Tumbes ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'tbldepartamento_id' => 24,
                'ubigeo' => '240200',
                'nombre' => 'Contralmirante Villar ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'tbldepartamento_id' => 24,
                'ubigeo' => '240300',
                'nombre' => 'Zarumilla ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'tbldepartamento_id' => 25,
                'ubigeo' => '250100',
                'nombre' => 'Coronel Portillo ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'tbldepartamento_id' => 25,
                'ubigeo' => '250200',
                'nombre' => 'Atalaya ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'tbldepartamento_id' => 25,
                'ubigeo' => '250300',
                'nombre' => 'Padre Abad ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'tbldepartamento_id' => 25,
                'ubigeo' => '250400',
                'nombre' => 'Purús',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}