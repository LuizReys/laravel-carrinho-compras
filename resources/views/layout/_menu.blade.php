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

			<!-- Authentication Links -->
			@guest
			<a class="btn btn-info btn-sm ml-3" href="{{route('login')}}">
				<i class="fa fa-user"></i> Entrar
			</a>

			<a class="btn btn-info btn-sm ml-3" href="{{route('register')}}">
				<i class="fa fa-user"></i> Cadastre-se
			</a>
			@else
			<div class="dropdown show">
				<a class="btn btn-secondary dropdown-toggle btn-sm ml-3" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->name }}
				</a>

				<div class="dropdown-menu ml-3" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
				</div>
			</div>
			@endguest

			<a class="btn btn-success btn-sm ml-3" href="{{route('carrinho')}}">
				<i class="fa fa-shopping-cart"></i> Carrinho
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</div>
	</div>
</nav>