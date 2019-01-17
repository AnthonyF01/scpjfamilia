<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 20)->create();

        App\User::create([
            'tblmodulo_id' => '30',
            'tbldepartamento_id' => '23',
            'name' => 'admin',
            'email' => 'clan_snk_01@outlook.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'nombre' => 'Administrador General',
            'dni' => '47839757',
            'fchnac' => '1993-07-17',
            'direccion' => 'Dstr. Gregorio Albarracin Las Americas Ñ 11',
            'fono' => '47839757',
            'remember_token' => str_random(10),
        ]);

        App\User::create([
            'tblmodulo_id' => '30',
            'tbldepartamento_id' => '23',
            'name' => 'adminmod',
            'email' => 'adminmod@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'nombre' => 'Administrador General MT',
            'dni' => '32659865',
            'fchnac' => '1990-01-01',
            'direccion' => 'Tacna',
            'fono' => '052580003',
            'remember_token' => str_random(10),
        ]);

        Role::create([
            'name' => 'Admin General',
            'slug' => 'admin',
            'special' => 'all-access',
            'description' => 'Administrador General'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
        ]);


    }
}
