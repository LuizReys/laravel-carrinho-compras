<div class="container">
	@if (Session::has('mensagem-sucesso'))
		<div class="alert alert-success" role="alert">
		  {{ Session::get('mensagem-sucesso') }}
		</div>
	@endif
	@if (Session::has('mensagem-falha'))
	    <div class="alert alert-danger" role="alert">
		  {{ Session::get('mensagem-falha') }}
		</div>
	@endif
</div>