@extends('layout.index')
@section('page_title','Carrinho de compras')

@section('content')
<div class="container mb-4">
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
                            <th scope="col" class="text-right">Preço</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Dada</td>
                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right">R$ 124,90</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>R$ 346,90</strong></td>
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
                    <a href="" class="btn btn-block btn-success text-uppercase">Finalizar Pedido</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection