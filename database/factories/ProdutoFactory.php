<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->text,
        'imagem' => "http://lorempixel.com/500/500/technics/" .rand(1, 10),
        'valor' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10) ,
    ];
});