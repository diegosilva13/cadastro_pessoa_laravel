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
	    <li><a href="{{url('/')}}">Início</a></li>
	   </ul>
	  </div>
	 </div>
	</nav>

	<div id="main" class="container-fluid" style="margin-top: 50px">

 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Pessoas</h2>
		</div>
		<div class="col-sm-3">
			<a href="{{url::route('pessoa.criar')}}" class="btn btn-primary pull-right h2">Cadastrar</a>
		</div>
	</div> <!-- /#top -->


 	<hr />
 	<div id="list" class="row">

	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Telefone</th>
					<th>E-mail</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pessoas as $pessoa)
				<tr>
					<td>{{$pessoa->id}}</td>
					<td>{{$pessoa->nome}}</td>
					<td>{{$pessoa->telefone}}</td>
					<td>{{$pessoa->email}}</td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="/pessoa/detalhes/{{$pessoa->id}}">Detalhes</a>
						<a class="btn btn-warning btn-xs" href="/pessoa/editar/{{$pessoa->id}}">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	</div> <!-- /#list -->
 </div> <!-- /#main -->

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
</div>

 <script src="{{URL::asset('js/jquery.min.js')}}"></script>
 <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>