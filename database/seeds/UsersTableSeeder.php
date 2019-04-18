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
                'imagen' => '/img/users/file_user_44z7ntqo1551939885.png',
                'acceso' => 1,
                'remember_token' => 'CNPhAZIb1TEGzbGzhs4MJK4AViCqgkeGvTJh4AsnircyVH57i2wuFFMhX5DE',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-03-07 01:24:45',
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
                'imagen' => '/img/users/file_user_u7jif9x41551939498.png',
                'acceso' => 1,
                'remember_token' => '7U72yvhL4KvZPTJD2YsuneZPDeSKSZBABE7aHQuDridv911zUCfYUHt6P4DZ',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-03-07 01:18:18',
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
                'remember_token' => 's3AFZ9E2Iqx6Z6fCdwQuAwxjo7dhjTwleN3rH4aFRI3EWEwxeWnO6Uyeoz3j',
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
                'remember_token' => 'DGIIVLsvLsgiSfZT0cpQWuPLCeo1dfP5UoR17TOaAFD5o2RsIVHtyLf0qUVo',
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
                'imagen' => '/img/users/file_user_fyvr2crx1551729181.png',
                'acceso' => 1,
                'remember_token' => '8qLEPzoMIOOh2WSa2aRIGlHjAgISHgzMo6WHgpjFouy5VR7ZI5TwvSqLjkN3',
                'created_at' => '2019-02-14 22:08:43',
                'updated_at' => '2019-03-04 14:53:01',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'name' => 'asistenteventanilla',
                'email' => 'asistenteventanilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$./UHremIjagpm2toQ3V02OXM89xSJDGbdBvoFPof9AW6UUaaIHkEW',
                'nombre' => 'Asistente Ventanilla',
                'dni' => '32659887',
                'fchnac' => '1990-06-12',
                'direccion' => 'Ventanilla',
                'fono' => '58986598',
                'imagen' => '/img/users/file_user_e7w4o7uo1551708981.png',
                'acceso' => 1,
                'remember_token' => 'kwkOHsGXTuihKxHpe7HKguiAsdGNLaBhLVJw612NKPqLdGJX4pJBaZYwkf0G',
                'created_at' => '2019-03-04 09:07:15',
                'updated_at' => '2019-03-04 09:16:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}