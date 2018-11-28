<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Agresor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'tbldocumento_id' => 2, 
        'nro_doc' => $faker->unique()->randomNumber($nbDigits = 8),
        'sexo' => $faker->randomElement(['Masculino', 'Femenino']), 
        'tbldepartamento_id' => 23,
        'tblprovincia_id' => 183,
        'tbldistrito_id' => 1779,
    ];
});
