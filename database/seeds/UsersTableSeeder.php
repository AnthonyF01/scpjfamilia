<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'nombre' => 'Administrador General',
                'dni' => '47839757',
                'fchnac' => '1993-07-17',
                'direccion' => 'Dstr. Gregorio Albarracin Las Americas Ñ 11',
                'fono' => '47839757',
                'imagen' => NULL,
                'lat' => '-18.0092832',
                'lng' => '-70.2438729',
                'acceso' => 1,
                'remember_token' => 'tBVM7J018vbQMKvTL81qjKrJcNTlzjKVHUyYnjGGPrt9L8qZ60ttNukSPh6E',
                'created_at' => '2019-04-23 07:57:07',
                'updated_at' => '2019-04-23 07:57:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'name' => 'adminmod',
                'email' => 'adminmod@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'nombre' => 'Administrador General MT',
                'dni' => '32659865',
                'fchnac' => '1990-01-01',
                'direccion' => 'Tacna',
                'fono' => '052580003',
                'imagen' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'acceso' => 1,
                'remember_token' => 'TXGWpXPpUc',
                'created_at' => '2019-04-23 07:57:07',
                'updated_at' => '2019-04-23 07:57:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'name' => 'pnptacna',
                'email' => 'pnptacna@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'nombre' => 'PNP Tacna',
                'dni' => '32216554',
                'fchnac' => '1990-01-01',
                'direccion' => 'Direccion',
                'fono' => '965542132',
                'imagen' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'acceso' => 1,
                'remember_token' => 'lvapwSxWYG',
                'created_at' => '2019-04-23 07:57:07',
                'updated_at' => '2019-04-23 07:57:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'name' => 'asistenteventanilla',
                'email' => 'asistenteventanilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$O5WmJe0gmgZ7ozNAdvZPGOg.W66F.mOAJgEB0VBovzS61oq4xdw96',
                'nombre' => 'Asistente Ventanilla',
                'dni' => '32659887',
                'fchnac' => '1990-06-12',
                'direccion' => 'Ventanilla',
                'fono' => '58986598',
                'imagen' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'acceso' => 1,
                'remember_token' => 'lQ2SttTpqn76Xjy9g478NeHwm21DCm47mHB1TzIQjyOC3PMhUBYRj6snLqGn',
                'created_at' => '2019-04-23 08:12:27',
                'updated_at' => '2019-04-23 08:12:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'name' => 'adminventanilla',
                'email' => 'adminventanilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8TATiAFnas33hhqnh2MI7ePgN5KL4Yx0/wdAG1UgLSb6r1KJkzGb6',
                'nombre' => 'Administrador Ventanilla',
                'dni' => '31649584',
                'fchnac' => '1990-06-12',
                'direccion' => 'Ventanilla',
                'fono' => '965986532',
                'imagen' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'acceso' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-04-23 08:24:36',
                'updated_at' => '2019-04-23 08:24:36',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'name' => 'pnpventanilla',
                'email' => 'pnpventanilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w858EpqdrJrZC6KlGTmcAekGqJ5m7xhP5ioRpW5q2fXqVDR4nCVUO',
                'nombre' => 'PNP Ventanilla',
                'dni' => '61946194',
                'fchnac' => '1990-06-19',
                'direccion' => 'Ventanilla',
                'fono' => '954848754',
                'imagen' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'acceso' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-04-23 08:26:16',
                'updated_at' => '2019-04-23 08:26:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}