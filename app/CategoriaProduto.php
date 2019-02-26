<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $table = "categorias_produtos";

	public function produto()
	{
		return $this->belongsTo(Produto::class, 'produto_id', 'id');
	}

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
	}
}
