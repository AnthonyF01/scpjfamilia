<?php

use Illuminate\Database\Seeder;

class TblviolenciaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblviolencia')->delete();
        
        \DB::table('tblviolencia')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Violencia Fisica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Violencia Psicologica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Violencia Sexual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Violencia Economica o Patrimonial',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}