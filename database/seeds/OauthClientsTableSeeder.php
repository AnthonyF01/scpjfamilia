<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'w0qxvDc7KAY8NYPhTBiKK4MYmW7Ez5qnULmB0faa',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2019-05-12 13:13:25',
                'updated_at' => '2019-05-12 13:13:25',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'WEA6xi0YYRXEDFdei2EP8waZEtduCEWXwdEkvm18',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2019-05-12 13:13:25',
                'updated_at' => '2019-05-12 13:13:25',
            ),
        ));
        
        
    }
}