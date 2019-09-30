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
                'updated_at' => '2019-09-24 08:21:19',
                'special' => 'all-access',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin Modulo',
                'slug' => 'adminmodulo',
                'description' => 'Administrador de Modulo',
                'created_at' => '2019-02-06 19:13:41',
                'updated_at' => '2019-09-28 11:37:43',
                'special' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Modulo Operadores',
                'slug' => 'modulopolicia',
                'description' => 'Permite Aperturar una denuncia y cargar el registro policial',
                'created_at' => '2019-03-17 23:07:00',
                'updated_at' => '2019-09-28 11:40:25',
                'special' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Asistente',
                'slug' => 'asistente',
                'description' => 'Asistente',
                'created_at' => '2019-04-23 08:09:23',
                'updated_at' => '2019-08-13 17:38:14',
                'special' => NULL,
            ),
        ));
        
        
    }
}