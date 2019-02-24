@extends('layout.index')
@section('page_title','Produtos')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <h2>{{ $produto->nome }}</h2>
            </div>
        </div>

        <div class="row">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <img class="img-fluid" src="{{ $produto->imagem }}" />
                    </div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h3 class="card-title">{{ 'R$ '.number_format($produto->valor, 2, ',', '.') }}</h3>

                        <p class="card-text">
                            {{ $produto->descricao }}
                        </p>

                        <form method="get" action="cart.html">
                            <a href="{{route('carrinho')}}" class="btn btn-success btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Adicionar ao carrinho
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection