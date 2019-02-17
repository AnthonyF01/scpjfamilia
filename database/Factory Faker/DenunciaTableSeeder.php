<?php

use Illuminate\Database\Seeder;

class DenunciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Denuncia::class, 20)->create();
    }
}
