<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $table = "pedido_produtos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'pedido_id',
        'produto_id',
        'valor',
    ];

    public function pedido()
	{
		return $this->belongsTo(Pedido::class, 'pedido_id', 'id');
	}

	public function produto()
	{
		return $this->belongsTo(Produto::class, 'produto_id', 'id');
	}
}
