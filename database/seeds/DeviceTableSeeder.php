<?php

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('device')->delete();
        
        \DB::table('device')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 7,
                'client_id' => 2,
                'token_device' => 'eLGKTvrveTM:APA91bGaopVM7WrRqMAb4MZl-gdaUNjUsY_Ta606af7nRvMscTUpZQibxgW8aiPKxPHItWXh_zT1a2OoDUSZbFB796Ain4AXXYZmXdfG-E_J7W0m6-SG1yGm-TRc4sVJSjq4PeqzaG7L',
                'sesion' => 1,
                'created_at' => '2019-09-02 07:52:57',
                'updated_at' => '2019-09-02 07:52:58',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 8,
                'client_id' => 2,
                'token_device' => 'dpJh1xpI0-Y:APA91bEQ_3_3D9SpNth8ZRI9QhGTenMQSxxyYBfEKV2oYu3oShj2EVvaFq4jBZKbxntb_h9ZnXX3z5laVjkN0TY0LegCqDNLDxJjO4kSY6jEVF9JyCg4wnNZrSQ5XAvoGm-nFlSO6VpT',
                'sesion' => 1,
                'created_at' => '2019-09-02 09:28:27',
                'updated_at' => '2019-09-02 09:28:28',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'client_id' => 2,
                'token_device' => 'fOvdqyN2ZKw:APA91bGlQy4FqXOBi0RelLSBfg1tyYf6Jnj0Gj32g-1eNeOU6oeTBnqmHekFLpLAYIsucNwhULEmTJoDTLK2RiOKfyNTbJ5i5d2iiPZK6wCxcSGWU7Xt0C5Mn9IHZSGB3Lo5cq4kjzdv',
                'sesion' => 1,
                'created_at' => '2019-09-02 09:37:44',
                'updated_at' => '2019-09-02 09:37:44',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 9,
                'client_id' => 2,
                'token_device' => 'edA3WPye5U0:APA91bGUz68NfjBrbBcg-cBb1xOUpMzNhT6AYHNd1cDiRTgVqsuZ1rfS3yAN2-4p7I76bo__LvchOeVIV_icNNj_8N_TwcBhJdl1Id0DTJGk1wfUA2rG6B8z7dkqOWBDW-JoCeheb7Hk',
                'sesion' => 1,
                'created_at' => '2019-09-02 09:42:09',
                'updated_at' => '2019-09-02 09:42:10',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 5,
                'client_id' => 2,
                'token_device' => 'dZw0NqeFj5c:APA91bHxoNuEWYh1JUUxKqyEfauIdSsD3dRTrLw92E2foKUKP0CUMTAo_YTO1gUDRQbqMiq6woukp44xPa3FQJzBBfNBol6JRw6uHIWFXZFXiGNtU_8A76XBCZzjlAdc3rBf6s2yMMts',
                'sesion' => 1,
                'created_at' => '2019-09-23 05:56:16',
                'updated_at' => '2019-09-23 05:56:16',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 11,
                'client_id' => 2,
                'token_device' => 'f4QTJbC2FKw:APA91bGYXz7GhvhMuLtRZBsnf-xefoj7q9SiQaBmCkmeoIwtiuwMFLk26c--4nW4mpQkBq43qDW5SKILCWgujxeT3KlCvpcrPDAMpe6nKspLjAiQLzFWqOC49jYa4oJjLUt3hfmlvVLW',
                'sesion' => 1,
                'created_at' => '2019-09-25 11:55:05',
                'updated_at' => '2019-09-25 11:55:06',
            ),
        ));
        
        
    }
}