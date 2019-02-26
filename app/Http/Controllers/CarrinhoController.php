<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\Pedido;
use App\PedidoProduto;
use App\EnderecoEntrega;

class CarrinhoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::where([
            'user_id' => Auth::id(),
            'status'  => 'CARRINHO'
            ])->get();

        return view('carrinho.index', compact('pedidos'));
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
        $produto = Produto::findOrFail($request->id);

        if(empty($produto))
        {
            return redirect()->route('carrinho')
                ->with('mensagem-falha', 'Produto não encontrado em nossa loja!');
        }

        $usuario = Auth::id();

        $pedido = Pedido::where([
            'user_id' => $usuario,
            'status'  => 'CARRINHO'
            ])->first(['id']);

        if(empty($pedido))
        {
            $pedidoNovo = Pedido::create([
                'user_id' => $usuario,
                'status'  => 'CARRINHO'
                ]);

            $pedido = $pedidoNovo->id;
        }

        PedidoProduto::create([
            'pedido_id'  => $pedido->id,
            'produto_id' => $produto->id,
            'valor'      => $produto->valor,
            ]);

        return redirect()->route('carrinho')
            ->with('mensagem-sucesso', 'Produto adicionado ao carrinho com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $pedido)
    {
        $pedido = Pedido::findOrFail($pedido);

        $usuario = Auth::id();

        $entrega = EnderecoEntrega::where([
            'user_id' => $usuario,
            ])->first(['id']);

        $pedido->status = 'FINALIZADO';
        $pedido->endereco_entregas_id = $entrega->id;
        $pedido->save();

        if($pedido)
        {
            return redirect()->route('pedido')
                ->with('mensagem-sucesso', 'Pedido finalizado com sucesso!');
        }

        return redirect()->route('pedido')
            ->with('mensagem-falha', 'Erro ao finalizar pedido!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $pedido, $produto)
    {
        $pedido = Pedido::findOrFail($pedido);
        $produto = Produto::findOrFail($produto);

        $pedidoProduto = DB::table('pedido_produtos')
                ->where('pedido_id', '=', $pedido->id)
                ->where('produto_id', '=', $produto->id)
                ->orderBy('id','desc')
                ->first();

        if($pedidoProduto)
        {
            PedidoProduto::destroy($pedidoProduto->id);
            $request->session()->flash('mensagem-sucesso', 'Produto excluído do carrinho com sucesso!');
            return redirect()->route('carrinho');
        }

        return redirect()->route('carrinho')
            ->with('mensagem-falha', 'Erro ao excluir produto do carrinho!');
    }
}
