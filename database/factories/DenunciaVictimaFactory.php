<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DenunciaVictima::class, function (Faker $faker) {
    static $denuncia = 1;
    static $victima = 1;
    return [
        'denuncia_id' => $denuncia++,
        'victima_id' => $victima++,
    ];
});
