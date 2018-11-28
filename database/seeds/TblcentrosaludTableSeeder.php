<?php

use Illuminate\Database\Seeder;

class TblcentrosaludTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblcentrosalud')->delete();
        
        \DB::table('tblcentrosalud')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Metropolitano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Viñani',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => '5 de Noviembre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Leguía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Leoncio Prado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Bolognesi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Natividad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Pocollay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Ciudad Nueva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Alto de la Alianza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Esperanza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Calana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Boca del Río',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Sama Inclán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Yarada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => 'Hospital Unanue',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'nombre' => '28 de Agosto - Yarada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}