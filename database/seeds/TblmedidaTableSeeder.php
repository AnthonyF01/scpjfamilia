<?php

use Illuminate\Database\Seeder;

class TblmedidaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblmedida')->delete();
        
        \DB::table('tblmedida')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Medida tipo 1',
                'created_at' => '2019-02-14 01:03:01',
                'updated_at' => '2019-02-14 01:03:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Medida tipo 2',
                'created_at' => '2019-02-14 01:03:05',
                'updated_at' => '2019-02-14 01:03:10',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Medida tipo 3',
                'created_at' => '2019-02-14 01:03:14',
                'updated_at' => '2019-02-14 01:03:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}