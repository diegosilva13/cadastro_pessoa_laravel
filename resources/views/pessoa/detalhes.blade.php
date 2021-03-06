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
	 <h3 class="page-header">Detalhes</h3>
	 	<div class="row">
		  <div class="col-md-4">
		    <p><strong>Nome</strong></p>
		    <p>{{$pessoa->nome}}</p>
		  </div>
		  <div class="col-md-4">
		    <p><strong>Telefone</strong></p>
		    <p>{{$pessoa->telefone}}</p>
		  </div>
		  <div class="col-md-4">
		    <p><strong>E-mail</strong></p>
		    <p>{{$pessoa->email}}</p>
		  </div>
		</div>

		<hr />
		<div id="actions" class="row">
		 <div class="col-md-12">
		   <a href="{{url::route('pessoa.index')}}" class="btn btn-primary">Voltar</a>
		   <a href="/pessoa/editar/{{$pessoa->id}}" class="btn btn-default">Editar</a>
		   <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
		 </div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
		      </div>
		      <div class="modal-body">
		        Deseja realmente excluir este item?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" onclick="window.location.replace('/pessoa/{{$pessoa->id}}/remover');">Sim</button>
		 <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
		      </div>
		    </div>
		  </div>
		</div> <!-- /.modal -->
	</div>

 <script src="{{URL::asset('js/jquery.min.js')}}"></script>
 <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>