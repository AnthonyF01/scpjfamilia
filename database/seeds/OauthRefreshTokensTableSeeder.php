<?php

use Illuminate\Database\Seeder;

class OauthRefreshTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_refresh_tokens')->delete();
        
        \DB::table('oauth_refresh_tokens')->insert(array (
            0 => 
            array (
                'id' => '1a05e5cb774365b02b8b76153cc7c163ac601fb044c71c219927baf3b6ec4f17ba6cb83f755c4f56',
                'access_token_id' => '9e6d688240073556475a3ff75b4b70f43141401ffc291f250a3e0bdefbf91cfb0e4c756bf0c3480f',
                'revoked' => 0,
                'expires_at' => '2020-09-25 16:55:06',
            ),
            1 => 
            array (
                'id' => '8ac3fd90db46d314c983a5db50b4bab1963fd31abe8306aa887cbc2ea326c24ec59b546d7fe3aa4d',
                'access_token_id' => '173c322a06c40a2bacfc953602e6422274153fc17cc81002f687131af71ccf1dfdfe0f67f5e88956',
                'revoked' => 0,
                'expires_at' => '2020-09-02 14:42:09',
            ),
            2 => 
            array (
                'id' => 'b6c35d8eb13b878f75233a9d546fcd1a5770cf068df2eb5cbd2550929b8fe70a98e0b4f397d99f27',
                'access_token_id' => 'f82fa32966cc2154a8e552d215558c97f725a9cf27ad506446f903cda8d7f3db291028b5ba95215d',
                'revoked' => 0,
                'expires_at' => '2020-09-23 10:56:15',
            ),
            3 => 
            array (
                'id' => 'bfcf2dc88d052f10e0672f8396163b7ddd90119aafa82df503e214b80c15c5f7534afa9df2ab2969',
                'access_token_id' => '6ca0ed1d1d289ad56aa28965a713ef89a1c75548d19631a960681c048087da93a8dd8f486897f908',
                'revoked' => 0,
                'expires_at' => '2020-09-02 14:28:28',
            ),
            4 => 
            array (
                'id' => 'f37f905a8a8f9f05d93c17b50729cb777daeab01e698deb1c167480151dcbad930560bcef0d16e16',
                'access_token_id' => '4d152c620cdcf1f5e70070d382de00432aa46e2b0afd52e7382ffdc8a5ae2ce7bf79d70da4dbb0d4',
                'revoked' => 0,
                'expires_at' => '2020-09-02 14:37:43',
            ),
            5 => 
            array (
                'id' => 'faaa27dd7e79b150e65c4aa77613735634ace7f72a51222096c83db04148f5384a776c46a6ccf746',
                'access_token_id' => '96597108b46131aaa59cd7072b7860485472f7f7c18b6b1a9f81d662c1316fff2ab5e09ec6643fca',
                'revoked' => 0,
                'expires_at' => '2020-09-02 12:52:58',
            ),
        ));
        
        
    }
}