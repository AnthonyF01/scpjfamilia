<?php

use Illuminate\Database\Seeder;

class TbldocumentoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbldocumento')->delete();
        
        \DB::table('tbldocumento')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Carnet de Extranjeria',
                'sigla' => 'CTX',
                'created_at' => '2018-11-06 04:08:47',
                'updated_at' => '2018-11-06 04:08:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Documento Nacional de Identidad',
                'sigla' => 'DNI',
                'created_at' => '2018-11-06 04:09:09',
                'updated_at' => '2018-11-06 04:09:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Otros',
                'sigla' => 'OTR',
                'created_at' => '2018-11-06 04:09:25',
                'updated_at' => '2018-11-06 04:09:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Partida de Nacimiento Identidad',
                'sigla' => 'PNI',
                'created_at' => '2018-11-06 04:09:51',
                'updated_at' => '2018-11-06 04:09:51',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Pasaporte',
                'sigla' => 'PSP',
                'created_at' => '2018-11-06 04:13:45',
                'updated_at' => '2018-11-06 04:13:45',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Cedula Diplomatica de Identidad',
                'sigla' => 'CDI',
                'created_at' => '2018-11-06 04:15:48',
                'updated_at' => '2018-11-06 04:15:48',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Registro Unico de Contribuyentes',
                'sigla' => 'RUC',
                'created_at' => '2018-11-06 04:16:16',
                'updated_at' => '2018-11-06 04:16:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}