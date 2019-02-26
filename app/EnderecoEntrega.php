<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoEntrega extends Model
{
    protected $table = "endereco_entregas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
        'nome',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
    ];

    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }
}