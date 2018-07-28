<?php

use Faker\Generator as Faker;

$factory->define(\App\Pedido::class, function (Faker $faker) {
    return [
        'user_id' => random_int(0,20),
        'ciclo' => random_int(-3,3),
        'que_pide' => random_int(0,7),
        'tipo_peticion' => random_int(0,3),
        'user_pedidor_id' => random_int(0,20),
        'estado' => random_int(0,2)
    ];
});
