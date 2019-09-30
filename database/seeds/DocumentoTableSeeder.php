<?php

use Illuminate\Database\Seeder;

class DocumentoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('documento')->delete();
        
        \DB::table('documento')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'fecha' => '2019-05-13',
                'numero' => '405-2019',
                'tipo' => 'OFICIO',
                'file' => '/img/documento/file_digitalizado_405-2019_1557769213.pdf',
                'tblmodulo_id' => 33,
                'verificado' => 0,
                'created_at' => '2019-05-13 12:40:13',
                'updated_at' => '2019-05-13 12:40:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'fecha' => '2019-05-15',
                'numero' => '397-2019',
                'tipo' => 'OFICIO',
                'file' => '/img/documento/file_digitalizado_397-2019_1557938014.pdf',
                'tblmodulo_id' => 33,
                'verificado' => 0,
                'created_at' => '2019-05-15 11:33:34',
                'updated_at' => '2019-05-15 11:33:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'fecha' => '2019-05-15',
                'numero' => '398-2019',
                'tipo' => 'OFICIO',
                'file' => '/img/documento/file_digitalizado_398-2019_1557938059.pdf',
                'tblmodulo_id' => 33,
                'verificado' => 0,
                'created_at' => '2019-05-15 11:34:19',
                'updated_at' => '2019-05-15 11:34:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'fecha' => '2019-05-15',
                'numero' => '399-2019',
                'tipo' => 'OFICIO',
                'file' => '/img/documento/file_digitalizado_399-2019_1557938144.pdf',
                'tblmodulo_id' => 33,
                'verificado' => 0,
                'created_at' => '2019-05-15 11:35:44',
                'updated_at' => '2019-05-15 11:35:44',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'fecha' => '2019-05-15',
                'numero' => '400-2019',
                'tipo' => 'OFICIO',
                'file' => '/img/documento/file_digitalizado_400-2019_1557938176.pdf',
                'tblmodulo_id' => 33,
                'verificado' => 0,
                'created_at' => '2019-05-15 11:36:16',
                'updated_at' => '2019-05-15 11:36:16',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 4,
                'fecha' => '2019-05-15',
                'numero' => '401-2019',
                'tipo' => 'OFICIO',
                'file' => '/img/documento/file_digitalizado_401-2019_1557938210.pdf',
                'tblmodulo_id' => 33,
                'verificado' => 0,
                'created_at' => '2019-05-15 11:36:50',
                'updated_at' => '2019-05-15 11:36:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}