<?php

namespace App\Http\Controllers\Pessoa;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;

use Illuminate\Http\Request;

class PessoaController extends Controller {

	public function index() {
		$pessoas = Pessoa::all();
		return view('pessoa.index')->with(['pessoas' => $pessoas]);
	}

	public function editar($id) {
		$pessoa = Pessoa::find($id);
		return view('pessoa.editar')->with(['pessoa' => $pessoa]);
	}

	public function atualizar(Request $request, $id) {
		$pessoa           = Pessoa::find($id);
		$pessoa->nome     = $request->nome;
		$pessoa->email    = $request->email;
		$pessoa->telefone = $request->telefone;

		$pessoa->save();
		return redirect()->route('pessoa.index');
	}

	public function criar() {
		return view('pessoa.criar');
	}

	public function salvar(Request $request) {
		$pessoa           = new Pessoa;
		$pessoa->nome     = $request->nome;
		$pessoa->email    = $request->email;
		$pessoa->telefone = $request->telefone;

		$pessoa->save();
		return redirect()->route('pessoa.index');
	}

	public function detalhes($id) {
		$pessoa = Pessoa::find($id);
		return view('pessoa.detalhes')->with(['pessoa' => $pessoa]);
	}

	public function remover($id) {
		$pessoa = Pessoa::find($id);
		$pessoa->delete();
		return redirect()->route('pessoa.index');
	}
}
