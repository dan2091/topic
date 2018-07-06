<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'nombre_usuario' => $faker->text(150),
        /*'id_rol' => $faker->numeric(5),*/ /*no me funcionó*/
    ];
});
