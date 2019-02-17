<?php

use Illuminate\Database\Seeder;

class TblparentescoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblparentesco')->delete();
        
        \DB::table('tblparentesco')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Conviviente',
                'created_at' => '2018-11-10 20:33:58',
                'updated_at' => '2018-11-10 20:33:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Cónyuge',
                'created_at' => '2018-11-10 20:34:04',
                'updated_at' => '2018-11-10 20:34:04',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Enamorado',
                'created_at' => '2018-11-10 20:34:14',
                'updated_at' => '2018-11-10 20:34:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Ex-conviviente',
                'created_at' => '2018-11-10 20:34:23',
                'updated_at' => '2018-11-10 20:34:23',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Familiar',
                'created_at' => '2018-11-10 20:34:32',
                'updated_at' => '2018-11-10 20:34:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Hijo(a)',
                'created_at' => '2018-11-10 20:34:40',
                'updated_at' => '2018-11-10 20:34:40',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Padastro(Ma)',
                'created_at' => '2018-11-10 20:34:54',
                'updated_at' => '2018-11-10 20:34:54',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Progenitor(a)',
                'created_at' => '2018-11-10 20:35:00',
                'updated_at' => '2018-11-10 20:35:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Otros',
                'created_at' => '2018-11-10 20:35:00',
                'updated_at' => '2018-11-10 20:35:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}