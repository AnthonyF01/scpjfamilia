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
        $this->call(TbldenunciaTableSeeder::class);
        $this->call(TblmedidaTableSeeder::class);
        $this->call(TbldpenalTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);

        // datos reales
        $this->call(VictimaTableSeeder::class);
        $this->call(AgresorTableSeeder::class);
        $this->call(DenunciaTableSeeder::class);
        $this->call(DenunciaAgresorTableSeeder::class);
        $this->call(DenunciaVictimaTableSeeder::class);

        // fake data (Factory Faker)
        // $this->call(VictimaTableSeeder::class);
        // $this->call(AgresorTableSeeder::class);
        // $this->call(DenunciaTableSeeder::class);
        // $this->call(DenunciaVictimaTableSeeder::class);
        // $this->call(DenunciaAgresorTableSeeder::class);
        $this->call(TblviolenciaTableSeeder::class);
        $this->call(DenunciaTblviolenciaTableSeeder::class);
        $this->call(DenunciaTblmedidaTableSeeder::class);
    }
}
