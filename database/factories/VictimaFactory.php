<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Victima::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'tbldocumento_id' => 2,
        'nro_doc' => $faker->unique()->randomNumber($nbDigits = 8),
        'edad' => $faker->numberBetween(25,70),
        'hijos' => $faker->numberBetween(0,5),
        'tbltipo_id' => $faker->numberBetween(1,4),
        'tbldepartamento_id' => 23,
        'tblprovincia_id' => 183,
        'tbldistrito_id' => 1779,
    ];
});
