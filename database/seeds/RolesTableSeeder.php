<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin General',
                'slug' => 'admin',
                'description' => 'Administrador General',
                'created_at' => '2019-02-06 19:13:41',
                'updated_at' => '2019-02-06 19:13:41',
                'special' => 'all-access',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin Modulo',
                'slug' => 'adminmodulo',
                'description' => 'Administrador de Modulo',
                'created_at' => '2019-02-06 19:13:41',
                'updated_at' => '2019-03-17 22:29:12',
                'special' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Modulo Policía Nacional',
                'slug' => 'modulopolicia',
                'description' => 'Permite Aperturar una denuncia y cargar el registro policial',
                'created_at' => '2019-03-17 23:07:00',
                'updated_at' => '2019-03-17 23:07:00',
                'special' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Asistente',
                'slug' => 'asistente',
                'description' => 'Asistente',
                'created_at' => '2019-04-23 08:09:23',
                'updated_at' => '2019-04-23 08:21:19',
                'special' => NULL,
            ),
        ));
        
        
    }
}