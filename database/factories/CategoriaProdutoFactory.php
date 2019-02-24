<?php

use Faker\Generator as Faker;
use App\Categoria;
use App\Produto;

$categorias = App\Categoria::all();
$produtos = App\Produto::all();

$factory->define(App\CategoriaProduto::class, function (Faker $faker) {
    return [
        'categoria_id' => $faker->randomElement(\App\Categoria::pluck('id', 'id')->toArray()),
        'produto_id' => $faker->randomElement(\App\Produto::pluck('id', 'id')->toArray()),
    ];
});