<?php

use Illuminate\Database\Seeder;

class TbltipoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbltipo')->delete();
        
        \DB::table('tbltipo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Adulto Mayor',
                'created_at' => '2018-11-06 04:27:40',
                'updated_at' => '2018-11-06 04:27:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Hombre',
                'created_at' => '2018-11-06 04:27:52',
                'updated_at' => '2018-11-06 04:27:52',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Menor',
                'created_at' => '2018-11-06 04:27:59',
                'updated_at' => '2018-11-06 04:27:59',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Mujer',
                'created_at' => '2018-11-06 04:28:06',
                'updated_at' => '2018-11-06 04:28:06',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}