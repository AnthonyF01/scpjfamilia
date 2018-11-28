<?php

use Illuminate\Database\Seeder;

class TblmotivoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblmotivo')->delete();
        
        \DB::table('tblmotivo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Atención',
                'created_at' => '2018-11-05 18:58:25',
                'updated_at' => '2018-11-05 19:04:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Atención',
                'created_at' => '2018-11-05 18:58:34',
                'updated_at' => '2018-11-05 18:59:51',
                'deleted_at' => '2018-11-05 18:59:51',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Evaluación',
                'created_at' => '2018-11-05 19:03:21',
                'updated_at' => '2018-11-05 19:03:21',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Orientación',
                'created_at' => '2018-11-05 19:03:36',
                'updated_at' => '2018-11-05 19:03:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Reunión',
                'created_at' => '2018-11-05 19:03:46',
                'updated_at' => '2018-11-05 19:03:46',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Sala de Encuentro',
                'created_at' => '2018-11-05 19:03:53',
                'updated_at' => '2018-11-05 19:04:29',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Savry',
                'created_at' => '2018-11-05 19:04:01',
                'updated_at' => '2018-11-05 19:04:01',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Seguimiento',
                'created_at' => '2018-11-05 19:04:11',
                'updated_at' => '2018-11-05 19:04:11',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Visita',
                'created_at' => '2018-11-05 19:04:16',
                'updated_at' => '2018-11-05 19:04:16',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Prueba',
                'created_at' => '2018-11-05 21:12:27',
                'updated_at' => '2018-11-05 21:12:35',
                'deleted_at' => '2018-11-05 21:12:35',
            ),
        ));
        
        
    }
}