<?php

use Faker\Generator as Faker;

$factory->define(App\Articulo::class, function (Faker $faker) {
    return [
        'titulo' => $faker->text(50),
        'cuerpo' => $faker->text(200)
    ];
});
