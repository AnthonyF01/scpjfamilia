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
                'email' => 'clan_snk_01@outlook.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'nombre' => 'Administrador General',
                'dni' => '47839757',
                'fchnac' => '1993-07-17',
                'direccion' => 'Dstr. Gregorio Albarracin Las Americas Ñ 11',
                'fono' => '47839757',
                'imagen' => NULL,
                'acceso' => 1,
                'remember_token' => 'ODwZ5LYftMJWmon3rtqdCtp66ZsBbgszqmsRK3Ys1qr5FakVSxxkqlDjXPzJ',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'name' => 'admintacna',
                'email' => 'admintacna@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'nombre' => 'Administrador Tacna',
                'dni' => '32659865',
                'fchnac' => '1990-01-01',
                'direccion' => 'Tacna',
                'fono' => '052580003',
                'imagen' => NULL,
                'acceso' => 1,
                'remember_token' => 'McLYVQR5YJ8e09QUOrxKv8QDv1OlmAkDJ1Iz2kM0PvEBJ9sfCAsdEG7HZftl',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
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
                'acceso' => 1,
                'remember_token' => 'sSAbFe4gmF',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'name' => 'adminventanilla',
                'email' => 'adminventanilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HB0AeoT90EGUQST1r9XXGeRljGa7F.DIFn2y9tvh.zTWb8Lj/UsUa',
                'nombre' => 'Administrador Ventanilla',
                'dni' => '31649584',
                'fchnac' => '1990-06-12',
                'direccion' => 'Ventanilla',
                'fono' => '965986532',
                'imagen' => NULL,
                'acceso' => 1,
                'remember_token' => 'Nf6k7qSUKg883QSWWVbywhnSMPaLVl67JWQJfTIfTqWDX08RaGYqAA3D5h9z',
                'created_at' => '2019-02-14 22:03:01',
                'updated_at' => '2019-02-17 11:35:37',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'name' => 'pnpventanilla',
                'email' => 'pnpventanilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vCJKSNZfwUXZZsqL57YDyOChcX4rKr0bWMBuDEKDL2i7iz9UQCwY2',
                'nombre' => 'PNP Ventanilla',
                'dni' => '61946194',
                'fchnac' => '1990-06-19',
                'direccion' => 'Ventanilla',
                'fono' => '954848754',
                'imagen' => NULL,
                'acceso' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-02-14 22:08:43',
                'updated_at' => '2019-02-17 11:24:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}