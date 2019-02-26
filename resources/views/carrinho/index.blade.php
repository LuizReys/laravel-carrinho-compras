@extends('layout.index')
@section('page_title','Carrinho de compras')

@section('content')
<div class="container mb-4">
    @foreach ($pedidos as $pedido)
    @if(!empty($pedido->pedido_produtos[0]))
    <div class="row">
        <div class="col-12">
            <div class="card-header bg-info text-white text-uppercase">
                <i class="fa fa-shopping-cart"></i> Carrinho de compras
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col" class="text-right">Valor Unitário</th>
                            <th scope="col" class="text-right">Sub Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total_carrinho = 0;
                        @endphp

                        @foreach ($pedido->pedido_produtos as $pedido_produto)
                        <tr>
                            <td><img src="{{ $pedido_produto->produto->imagem }}" /> </td>
                            <td>{{ $pedido_produto->produto->nome }}</td>
                            <td>{{ $pedido_produto->qtd }}</td>
                            <td class="text-right">{{ 'R$ '.number_format($pedido_produto->produto->valor, 2, ',', '.') }}</td>
                            <td class="text-right">{{ 'R$ '.number_format($pedido_produto->valores, 2, ',', '.') }}</td>
                            <td class="text-right">
                                <a href="{{ route('carrinho.destroy', ['pedido'=>$pedido->id,'produto'=>$pedido_produto->produto->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></a>
                                <a href="{{ route('carrinho.store', $pedido_produto->produto->id) }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                        @php
                        $total_carrinho += $pedido_produto->valores;
                        @endphp
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Valor Total</strong></td>
                            <td class="text-right"><strong>{{ 'R$ '.number_format($total_carrinho, 2, ',', '.') }}</strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{route('produto')}}" class="btn btn-block btn-info text-uppercase">Continuar comprando</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{ route('carrinho.update', $pedido->id) }}" class="btn btn-block btn-success text-uppercase">Finalizar Pedido</a>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            <div class="card-header bg-info text-white text-uppercase">
                <i class="fa fa-shopping-cart"></i> Carrinho de compras
            </div>
            <div class="card-body bg-light">
                <h5>Não há nenhum pedido no carrinho</h5>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection