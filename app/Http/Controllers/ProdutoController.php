<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\CategoriaProduto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoria = null)
    {
        $categorias = DB::table('categorias')
                ->orderBy('nome', 'asc')
                ->get();

        if(!$categoria)
        {
            $produtos = DB::table('produtos')
                ->orderBy('id', 'desc')
                ->paginate(6);
        }else
        {
            $categoria = Categoria::findOrFail($categoria);

            $produtos = DB::table('produtos')
                ->join('categorias_produtos', 'produtos.id', '=', 'categorias_produtos.produto_id')
                ->join('categorias', 'categorias.id', '=', 'categorias_produtos.categoria_id')
                ->select('produtos.*')
                ->where('categorias.id', '=', $categoria->id)
                ->paginate(6);
        }

        return view('produto.index', compact('produtos','categorias'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
