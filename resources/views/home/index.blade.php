@extends('layout.index')
@section('page_title','Home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header bg-info text-white text-uppercase">
					<i class="fa fa-star"></i> Últimos Produtos
				</div>
				<div class="card-body">
					<div class="row">
						@foreach($produtos as $produto)
							<div class="col-sm">
								<div class="card">
									<img class="card-img-top" src="{{ $produto->imagem }}" alt="Card image cap">
									<div class="card-body">
										<h4 class="card-title">{{ $produto->nome }}</h4>
										<p class="card-title">{{ 'R$ '.number_format($produto->valor, 2, ',', '.') }} </p>
										<div class="row">
											<a href="{{ route('produto.show', $produto->id) }}" class="btn btn-info btn-block">Mais Detalhes</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection