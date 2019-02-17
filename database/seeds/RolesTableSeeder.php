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
                'created_at' => '2019-01-29 22:32:21',
                'updated_at' => '2019-01-29 22:32:21',
                'special' => 'all-access',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin Modulo',
                'slug' => 'adminmodulo',
                'description' => 'Administrador de Modulo',
                'created_at' => '2019-02-02 13:13:38',
                'updated_at' => '2019-02-14 22:23:03',
                'special' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Policia Nacional',
                'slug' => 'policia',
                'description' => 'Policia Nacional',
                'created_at' => '2019-02-12 21:50:33',
                'updated_at' => '2019-02-12 21:50:33',
                'special' => NULL,
            ),
        ));
        
        
    }
}