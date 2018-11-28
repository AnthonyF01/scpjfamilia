<?php

use Illuminate\Database\Seeder;

class TblmoduloTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblmodulo')->delete();
        
        \DB::table('tblmodulo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tbldepartamento_id' => 1,
                'nombre' => 'AMAZONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tbldepartamento_id' => 2,
                'nombre' => 'ANCASH',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tbldepartamento_id' => 3,
                'nombre' => 'APURIMAC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tbldepartamento_id' => 4,
                'nombre' => 'AREQUIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tbldepartamento_id' => 5,
                'nombre' => 'AYACUCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tbldepartamento_id' => 6,
                'nombre' => 'CAJAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tbldepartamento_id' => 7,
                'nombre' => 'CALLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tbldepartamento_id' => 15,
                'nombre' => 'CAÑETE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tbldepartamento_id' => 8,
                'nombre' => 'CUSCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tbldepartamento_id' => 2,
                'nombre' => 'DEL SANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tbldepartamento_id' => 9,
                'nombre' => 'HUANCAVELICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tbldepartamento_id' => 10,
                'nombre' => 'HUANUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tbldepartamento_id' => 15,
                'nombre' => 'HUAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tbldepartamento_id' => 11,
                'nombre' => 'ICA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tbldepartamento_id' => 12,
                'nombre' => 'JUNIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tbldepartamento_id' => 13,
                'nombre' => 'LA LIBERTAD',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tbldepartamento_id' => 14,
                'nombre' => 'LAMBAYEQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tbldepartamento_id' => 15,
                'nombre' => 'LIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tbldepartamento_id' => 15,
                'nombre' => 'LIMA ESTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tbldepartamento_id' => 15,
                'nombre' => 'LIMA NORTE',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tbldepartamento_id' => 15,
                'nombre' => 'LIMA SUR',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'tbldepartamento_id' => 16,
                'nombre' => 'LORETO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'tbldepartamento_id' => 17,
                'nombre' => 'MADRE DE DIOS',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'tbldepartamento_id' => 18,
                'nombre' => 'MOQUEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'tbldepartamento_id' => 19,
                'nombre' => 'PASCO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'tbldepartamento_id' => 20,
                'nombre' => 'PIURA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'tbldepartamento_id' => 21,
                'nombre' => 'PUNO',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'tbldepartamento_id' => 22,
                'nombre' => 'SAN MARTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'tbldepartamento_id' => 20,
                'nombre' => 'SULLANA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'TACNA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'tbldepartamento_id' => 24,
                'nombre' => 'TUMBES',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'tbldepartamento_id' => 25,
                'nombre' => 'UCAYALI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'tbldepartamento_id' => 7,
                'nombre' => 'VENTANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}