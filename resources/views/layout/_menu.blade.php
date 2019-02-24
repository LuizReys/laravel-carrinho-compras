<!-- Menu -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="{{route('index')}}">Loja Virtual</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

			<ul class="navbar-nav m-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{route('index')}}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('produto')}}">Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('pedido')}}">Meus Pedidos</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Buscar...">
					<div class="input-group-append">
						<button type="button" class="btn btn-secondary btn-number">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>

				<a class="btn btn-info btn-sm ml-3" href="{{route('login')}}">
					<i class="fa fa-user"></i> Entrar
				</a>

				<a class="btn btn-success btn-sm ml-3" href="{{route('carrinho')}}">
					<i class="fa fa-shopping-cart"></i> Carrinho
				</a>
			</form>
		</div>
	</div>
</nav>