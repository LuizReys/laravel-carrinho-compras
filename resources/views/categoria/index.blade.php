@extends('layout.index')
@section('page_title', 'Categorias')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-info text-white text-uppercase"><i class="fa fa-list"></i> Categorias</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
                    <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
                    <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Nome do Produto</h4>
                            <p class="card-title">R$ 14,70</p>
                            <div class="row">
                                <a href="#" class="btn btn-info btn-block">Mais Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Nome do Produto</h4>
                            <p class="card-title">R$ 14,70</p>
                            <div class="row">
                                <a href="#" class="btn btn-info btn-block">Mais Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Nome do Produto</h4>
                            <p class="card-title">R$ 14,70</p>
                            <div class="row">
                                <a href="#" class="btn btn-info btn-block">Mais Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection