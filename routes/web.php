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



Route::get('/home','HomeController@home');
Route::get('/sobre', 'SobreController@sobre');
Route::get('/contato', 'ContatoController@contato');
Route::get('/mapa', 'MapaController@mapa');
Route::get('/faq', 'FaqController@faq');
Route::get('/loja', 'LojaController@loja');
Route::get('/carrinho', 'CarrinhoController@carrinho');
Route::get('/finalizada', 'FinalizadaController@finalizada');
Route::get('/dadoscompra', 'DadosCompraController@dadoscompra');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
