<?php
use App\Newsletter;
use App\Http\Controllers\Newslettercontroller;


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


Route::get('/','HomeController@home');

Route::get('/home','HomeController@home');

Route::get('/sobre', 'SobreController@sobre');

Route::get('/contato', 'ContatoController@contato');

Route::post('/contato', 'ContatoController@sendMail');

Route::get('/mapa', 'MapaController@mapa');

Route::get('/faq', 'FaqController@faq');

Route::get('/loja', 'LojaController@loja');

Route::get('/carrinho', 'CarrinhoController@carrinho');

Route::get('/finalizada', 'FinalizadaController@finalizada');

Route::get('/dadoscompra', 'DadosCompraController@dadoscompra');

Route::get('/privacidade', 'PrivacidadeController@privacidade');

Route::get('/termos', 'TermosController@termos');

Route::get('/marcadores/{cidade}/{materiaisIds}', 'MarcadoresController@marcadores')->name('marcadores');

// Route::get('/painel', 'PainelController@painel');

Route::get('/cidades', 'CidadeController@obterJson');

Route::get('/add-cidade', 'CidadeController@addCidade');

Route::get('/add-material', 'MaterialController@addMaterial');

Route::get('/add-empresa', 'EmpresaController@addEmpresa');

Route::get('/add-produto', 'ProdutoController@addProduto');

Route::get('/add-newsletter', 'NewsletterController@addnewsletter');

Route::get('/add-admin','AdminController@addAdmin');

Route::post('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('produto.cadastrar');

Route::post('/cadastrarempresa', 'EmpresaController@cadastrarEmpresa')->name('empresa.cadastrar');

Route::post('/cadastrarmaterial', 'MaterialController@cadastrarMaterial')->name('material.cadastrar');

Route::post('/cadastrarcidade', 'CidadeController@cadastrarCidade')->name('cidade.cadastrar');

Route::get('/internaProduto', 'InternaLojaController@interna');

Route::post('/cadastrarAdmin','AdminController@cadastrarAdmin')-> name('admin.cadastrar');

// Rotas são definidas em ./vendor/laravel/framework/src/Illuminate/Routing/Router.php # auth
Auth::routes();
Route::get('/painel', 'PainelController@painel')->name('painel');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'NewsletterController@home');

Route::post('/home', 'NewsletterController@home');

Route::get('/loja', 'ProdutoController@exibirProdutos');


