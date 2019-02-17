<?php

use Illuminate\Database\Seeder;

class DenunciaAgresorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\DenunciaAgresor::class, 20)->create();
    }
}
