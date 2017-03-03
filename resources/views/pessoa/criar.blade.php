<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastro de Pessoas</title>

 <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
 <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	 <div class="container-fluid">
	  <div class="navbar-header">
	   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	   </button>
	   <a class="navbar-brand" href="#">Cadastro de Pessoas</a>
	  </div>
	  <div id="navbar" class="navbar-collapse collapse">
	   <ul class="nav navbar-nav navbar-right">
	    <li><a href="#">Início</a></li>
	   </ul>
	  </div>
	 </div>
	</nav>

	<div id="main" class="container-fluid">

	  <h3 class="page-header">Cadastrar</h3>

	  <form action="/pessoa/salvar" method="post">
	  	<div class="row">
	  	  <div class="form-group col-md-4">
	  	  	<label for="inputNome">Nome</label>
	  	  	<input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" name="nome">
	  	  </div>
		  <div class="form-group col-md-4">
	  	  	<label for="inputEmail">E-mail</label>
	  	  	<input type="text" class="form-control" id="inputEmail" placeholder="email@provedor" name="email">
	  	  </div>
		  <div class="form-group col-md-4">
	  	  	<label for="inputTelefone">Telefone</label>
	  	  	<input type="text" class="form-control" id="inputTelefone" placeholder="(00)0000-00000" name="telefone">
	  	  </div>
		</div>
		<hr />

		<div class="row">
		  <div class="col-md-12">
		  	<button type="submit" class="btn btn-primary">Salvar</button>
			<a href="{{url::route('pessoa.index')}}" class="btn btn-default">
				Cancelar
			</a>
		  </div>
		  <input type="hidden" hidden="true" name="_token" value="{{ csrf_token() }}">
		</div>

	  </form>
	</div>

 <script src="{{URL::asset('js/jquery.min.js')}}"></script>
 <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>