@extends('layout.index')
@section('page_title','Meus Pedidos')

@section('content')
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="card-header bg-info text-white text-uppercase">
                    <i class="fa fa-list"></i> Pedido: 450
                </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col" class="text-right">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Dada</td>
                            <td>4</td>
                            <td class="text-right">R$ 124,90</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>R$ 346,90</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card-header bg-info text-white text-uppercase">
                    <i class="fa fa-list"></i> Pedido: 697
                </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col" class="text-right">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Dada</td>
                            <td>1</td>
                            <td class="text-right">R$ 124,90</td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>1</td>
                            <td class="text-right">R$ 33,90</td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>1</td>
                            <td class="text-right">R$ 70,00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>R$ 346,90</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection