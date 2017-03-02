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

	  <h3 class="page-header">Editar</h3>

	  <form action="index.html">
	  	<div class="row">
	  	  <div class="form-group col-md-4">
	  	  	<label for="exampleInputEmail1">Nome</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-4">
	  	  	<label for="exampleInputEmail1">Sobrenome</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-4">
	  	  	<label for="exampleInputEmail1">Idade</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		</div>

		<div class="row">
	  	  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Estado</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Cidade</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">CEP</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Bairro</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		</div>

		<div class="row">
	  	  <div class="form-group col-md-6">
	  	  	<label for="exampleInputEmail1">Endereço</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-6">
	  	  	<label for="exampleInputEmail1">Número</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		</div>

		<div class="row">
	  	  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Celular</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Telefone Fixo</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Email</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		  <div class="form-group col-md-3">
	  	  	<label for="exampleInputEmail1">Email Alternativo</label>
	  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
	  	  </div>
		</div>

		<hr />

		<div class="row">
		  <div class="col-md-12">
		  	<button type="submit" class="btn btn-primary">Atualizar</button>
			<a href="template.html" class="btn btn-default">Cancelar</a>
		  </div>
		</div>

	  </form>
	</div>

 <script src="{{URL::asset('js/jquery.min.js')}}"></script>
 <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>