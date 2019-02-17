<?php

use Illuminate\Database\Seeder;

class DenunciaVictimaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\DenunciaVictima::class, 20)->create();
    }
}
