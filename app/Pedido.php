<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
        'endereco_entregas_id',
        'status',
    ];

    public function pedido_produtos()
    {
        return $this->hasMany('App\PedidoProduto')
            ->select(\DB::raw('produto_id, sum(valor) as valores, count(1) as qtd'))
            ->groupBy('produto_id')
            ->orderBy('produto_id', 'desc');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function endereco_entregas()
    {
        return $this->belongsTo('App\EnderecoEntrega');
    }
}
