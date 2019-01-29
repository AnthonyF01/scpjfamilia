<?php

use Illuminate\Database\Seeder;

class AgresorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Agresor::class, 20)->create();
    }
}
