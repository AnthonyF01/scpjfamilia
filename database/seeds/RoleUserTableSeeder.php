<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'user_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'role_id' => 4,
                'user_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'user_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'role_id' => 2,
                'user_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 12,
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 13,
                'role_id' => 2,
                'user_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 14,
                'role_id' => 2,
                'user_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}