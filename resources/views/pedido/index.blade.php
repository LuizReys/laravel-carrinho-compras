@extends('layout.index')
@section('page_title','Meus Pedidos')

@section('content')
<div class="container mb-4">
    @forelse ($pedidos as $pedido)
    <div class="row">
        <div class="col-12">
            <div class="card-header bg-info text-white text-uppercase">
                <i class="fa fa-list"></i> Pedido: {{$pedido->id}}
            </div>
            <div class="card-title mt-3 mb-3"><h5>Dados do Cliente</h5></div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pedido->user->name }}</td>
                            <td>{{ $pedido->user->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-title mt-3 mb-3"><h5>Dados da Entrega</h5></div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome do Endereço</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Número</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pedido->endereco_entregas->nome }}</td>
                            <td>{{ $pedido->endereco_entregas->cep }}</td>
                            <td>{{ $pedido->endereco_entregas->estado }}</td>
                            <td>{{ $pedido->endereco_entregas->cidade }}</td>
                            <td>{{ $pedido->endereco_entregas->bairro }}</td>
                            <td>{{ $pedido->endereco_entregas->rua }}</td>
                            <td>{{ $pedido->endereco_entregas->numero }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-title mt-3 mb-3"><h5>Dados do Pedido</h5></div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col" class="text-right">Valor Unitário</th>
                            <th scope="col" class="text-right">Sub Total</th>
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @empty
    <div class="row">
        <div class="col-12">
            <div class="card-header bg-info text-white text-uppercase">
                <i class="fa fa-list"></i> Pedidos
            </div>
            <div class="card-body bg-light">
                <h5>Não há nenhum pedido feito até o momento</h5>
            </div>
        </div>
    </div>
    @endforelse
</div>
@endsection