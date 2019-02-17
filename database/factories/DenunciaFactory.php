<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Denuncia::class, function (Faker $faker) {
    return [
        'tblcomisaria_id' => $faker->numberBetween(1,16),
        'oficio' => $faker->unique()->randomNumber($nbDigits = 4)."-2018",
        'fdenuncia' => $faker->dateTimeBetween($startDate = "2018-06-01", $endDate = "2018-06-15")->format('Y-m-d'),
        'fformalizacion' => $faker->dateTimeBetween($startDate = "2018-06-16", $endDate = "2018-06-30")->format('Y-m-d'),
        'expediente' => $faker->unique()->randomNumber($nbDigits = 4)."-2018",
        'calificacion' => $faker->randomElement(['No ha lugar', 'Ha lugar']),
        'hora' => '00:00',
        'faudiencia' => $faker->dateTimeBetween($startDate = "2018-07-01", $endDate = "2018-07-15")->format('Y-m-d'),
        'remitido' => $faker->randomElement(['Ministerio Público', 'Juzgado de Paz Letrado', 'Sala Superior']),
        'oficioremitido' => $faker->unique()->randomNumber($nbDigits = 4)."-2018",
        'fremision' => $faker->dateTimeBetween($startDate = "2018-07-16", $endDate = "2018-07-31")->format('Y-m-d'),
        'ministerio' => $faker->randomElement([0, 1]),
        'tblinstancia_id' => $faker->randomElement([25, 26, 37, 38, 28]),
        'asistencialegal' => $faker->randomElement([0, 1]),
        'psicologia' => $faker->randomElement([0, 1]),
        'remitidod' => $faker->randomElement(['Archivo Central', 'Juzgado de Investigación Preparatoria']),
        'oficioremitidod' => $faker->unique()->randomNumber($nbDigits = 4)."-2018",
        'fremisiond' => $faker->dateTimeBetween($startDate = "2018-08-01", $endDate = "2018-08-15")->format('Y-m-d'),
        'remitidoj' => $faker->randomElement(['Archivo Central', 'Juzgado de Investigación Preparatoria']),
        'oficioremitidoj' => $faker->unique()->randomNumber($nbDigits = 4)."-2018",
        'fremisionj' => $faker->dateTimeBetween($startDate = "2018-08-16", $endDate = "2018-08-31")->format('Y-m-d'),
        'observacion' => $faker->realText(180),
        'tblmodulo_id' => 30,
        'medida_file' => null,
        'registro_file' => null,
    ];
});
