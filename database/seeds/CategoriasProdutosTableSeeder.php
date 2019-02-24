<?php

use Illuminate\Database\Seeder;

class CategoriasProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CategoriaProduto::class, 30)->create()->unique();
    }
}
