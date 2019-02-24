@extends('layout.index')
@section('page_title', 'Produtos')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-info text-white text-uppercase"><i class="fa fa-list"></i> Categorias</div>
                <ul class="list-group category_block">
                    @foreach($categorias as $categoria)
                        <li class="list-group-item"><a href="{{ route('produto.categoria', $categoria->id) }}">{{ $categoria->nome }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
      <div class="col">
            <div class="row">
                @foreach($produtos as $produto)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ $produto->imagem }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $produto->nome }}</h4>
                                <p class="card-title">{{ 'R$ '.number_format($produto->valor, 2, ',', '.') }}</p>
                                <div class="row">
                                    <a href="{{ route('produto.show', $produto->id) }}" class="btn btn-info btn-block">Mais Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Paginacao --}}
            {{$produtos->links()}}
        </div>
    </div>
</div>
@endsection