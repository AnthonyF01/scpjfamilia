<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TbldepartamentoTableSeeder::class);
        $this->call(TblmoduloTableSeeder::class);
        $this->call(TblprovinciaTableSeeder::class);
        $this->call(TbldistritoTableSeeder::class);
        $this->call(TblcentrosaludTableSeeder::class);
        $this->call(TblcomisariaTableSeeder::class);
        $this->call(TblinstanciaTableSeeder::class);
        $this->call(TblmotivoTableSeeder::class);
        $this->call(TbldocumentoTableSeeder::class);
        $this->call(TbltipoTableSeeder::class);
        $this->call(TblparentescoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);

        // fake data
        $this->call(VictimaTableSeeder::class);
        $this->call(AgresorTableSeeder::class);
        $this->call(DenunciaTableSeeder::class);
        $this->call(DenunciaVictimaTableSeeder::class);
        $this->call(DenunciaAgresorTableSeeder::class);
    }
}
