<?php

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '173c322a06c40a2bacfc953602e6422274153fc17cc81002f687131af71ccf1dfdfe0f67f5e88956',
                'user_id' => 9,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-09-02 09:42:09',
                'updated_at' => '2019-09-02 09:42:09',
                'expires_at' => '2020-09-02 14:42:09',
            ),
            1 => 
            array (
                'id' => '4d152c620cdcf1f5e70070d382de00432aa46e2b0afd52e7382ffdc8a5ae2ce7bf79d70da4dbb0d4',
                'user_id' => 5,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-09-02 09:37:43',
                'updated_at' => '2019-09-02 09:37:43',
                'expires_at' => '2020-09-02 14:37:43',
            ),
            2 => 
            array (
                'id' => '6ca0ed1d1d289ad56aa28965a713ef89a1c75548d19631a960681c048087da93a8dd8f486897f908',
                'user_id' => 8,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-09-02 09:28:28',
                'updated_at' => '2019-09-02 09:28:28',
                'expires_at' => '2020-09-02 14:28:28',
            ),
            3 => 
            array (
                'id' => '96597108b46131aaa59cd7072b7860485472f7f7c18b6b1a9f81d662c1316fff2ab5e09ec6643fca',
                'user_id' => 7,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-09-02 07:52:58',
                'updated_at' => '2019-09-02 07:52:58',
                'expires_at' => '2020-09-02 12:52:58',
            ),
            4 => 
            array (
                'id' => '9e6d688240073556475a3ff75b4b70f43141401ffc291f250a3e0bdefbf91cfb0e4c756bf0c3480f',
                'user_id' => 11,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-09-25 11:55:06',
                'updated_at' => '2019-09-25 11:55:06',
                'expires_at' => '2020-09-25 16:55:06',
            ),
            5 => 
            array (
                'id' => 'f82fa32966cc2154a8e552d215558c97f725a9cf27ad506446f903cda8d7f3db291028b5ba95215d',
                'user_id' => 5,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2019-09-23 05:56:15',
                'updated_at' => '2019-09-23 05:56:15',
                'expires_at' => '2020-09-23 10:56:15',
            ),
        ));
        
        
    }
}