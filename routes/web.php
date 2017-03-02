<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
		return view('person.index');
	});

Route::get('/create', function () {
		return view('person.create');
	});

Route::get('/show', function () {
		return view('person.show');
	});

Route::get('/edit', function () {
		return view('person.edit');
	});
