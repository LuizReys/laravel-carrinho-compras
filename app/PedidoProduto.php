<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $table = "pedido_produtos";

    public function produto()
    {
        return $this->belongsTo('App\Produto', 'produto_id', 'id');
    }
}
