<?php

use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification')->delete();
        
        \DB::table('notification')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 9,
                'tblmodulo_id' => 7,
                'tbldepartamento_id' => 7,
                'lat' => '-11.87938',
                'lng' => '-77.12665',
                'acc' => '98m',
                'state' => 2,
                'title' => ' Notificaciones de AppPanic.',
                'body' => 'ROLANDO EDWIN solicita ayuda.',
                'worker_id' => 5,
                'created_at' => '2019-09-02 09:42:43',
                'updated_at' => '2019-09-02 09:49:03',
            ),
        ));
        
        
    }
}