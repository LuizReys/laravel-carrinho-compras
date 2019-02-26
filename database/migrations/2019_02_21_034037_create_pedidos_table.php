<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('endereco_entregas_id')->unsigned()->nullable();
            $table->enum('status', ['CARRINHO', 'FINALIZADO']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('endereco_entregas_id')->references('id')->on('endereco_entregas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
