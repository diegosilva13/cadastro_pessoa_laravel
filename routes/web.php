<?php

Route::get('/', function () {
		return view('perssoa.index');
	});

Route::get('/create', function () {
		return view('perssoa.create');
	});

Route::get('/show', function () {
		return view('perssoa.show');
	});

Route::get('/edit', function () {
		return view('perssoa.edit');
	});
