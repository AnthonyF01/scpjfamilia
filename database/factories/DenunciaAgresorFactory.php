<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DenunciaAgresor::class, function (Faker $faker) {
    static $denuncia = 1;
    static $agresor = 1;
    return [
        'denuncia_id' => $denuncia++,
        'agresor_id' => $agresor++,
        'tblparentesco_id' => $faker->numberBetween(1, 8),
    ];
});
