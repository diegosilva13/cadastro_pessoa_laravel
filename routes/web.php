<?php

Route::get('/',
	['as'   => 'index',
		'uses' => 'Pessoa\PessoaController@index'
	]);

Route::group(['as' => 'pessoa.', 'prefix' => 'pessoa'], function () {

		Route::get('',
			['as'   => 'index',
				'uses' => 'Pessoa\PessoaController@index'
			]);

		Route::get('criar',
			['as'   => 'criar',
				'uses' => 'Pessoa\PessoaController@criar'
			]);

		Route::post('salvar',
			['as'   => 'salvar',
				'uses' => 'Pessoa\PessoaController@salvar'
			]);

		Route::get('editar/{id}',
			['as'   => 'editar',
				'uses' => 'Pessoa\PessoaController@editar'
			]);

		Route::post('/{id}/atualizar',
			['as'   => 'atualizar',
				'uses' => 'Pessoa\PessoaController@atualizar'
			]);

		Route::get('/{id}/remover',
			['as'   => 'salvar',
				'uses' => 'Pessoa\PessoaController@remover'
			]);

		Route::get('/detalhes/{id}',
			['as'   => 'detalhes',
				'uses' => 'Pessoa\PessoaController@detalhes'
			]);
	});