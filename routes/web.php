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

Route::get('/add-produto', 'CategoriaController@exibirCategorias');

Route::get('/loja', 'ProdutoController@exibirProdutos');

Route::get('/carrinho', 'CarrinhoController@carrinho');

Route::get('/finalizada', 'FinalizadaController@finalizada');

Route::get('/dadoscompra', 'DadosCompraController@dadoscompra');

Route::get('/privacidade', 'PrivacidadeController@privacidade');

Route::get('/termos', 'TermosController@termos');

Route::get('/marcadores/{cidade}/{materiaisIds}', 'MarcadoresController@marcadores')->name('marcadores');

Route::get('/cidades', 'CidadeController@obterJson');

Route::get('/internaProduto', 'InternaLojaController@interna');

Route::get('/add-cidade', 'CidadeController@addCidade');

Route::get('/add-material', 'MaterialController@addMaterial');

Route::get('/add-empresa', 'EmpresaController@addEmpresa');

Route::get('/add-produto', 'ProdutoController@addProduto');


Route::get('/add-newsletter', 'NewsletterController@addnewsletter');

Route::get('/add-categoria', 'CategoriaController@categorias');
Route::get('/add-admin','AdminController@addAdmin');

Route::get('/add-produto', 'ProdutoController@exibirCategorias');

Route::post('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('produto.cadastrar');

Route::post('/cadastrarempresa', 'EmpresaController@cadastrarEmpresa')->name('empresa.cadastrar');

Route::post('/cadastrarmaterial', 'MaterialController@cadastrarMaterial')->name('material.cadastrar');

Route::post('/cadastrarcidade', 'CidadeController@cadastrarCidade')->name('cidade.cadastrar');

Route::post('/cadastrarcategoria', 'CategoriaController@cadastrarCategoria')->name('categoria.cadastrar'); 

Route::get('/internaProduto/{id}', 'InternaLojaController@interna');
Route::get('/internaProduto/{id}', 'InternaLojaController@exibirProdutoUnico');

Route::post('/cadastrarnewsletter', 'NewsletterController@cadastrarNewsletter')->name('newsletter.cadastrar');

Route::post('/cadastrarAdmin','AdminController@cadastrarAdmin')->name('admin.cadastrar');

Route::get('/relatorio-Users', 'RelatoriosController@relatorioUsers');

Route::get('/relatorio-Empresas', 'RelatoriosController@relatorioEmpresas');

Route::get('/relatorio-Cidades', 'RelatoriosController@relatorioCidades');

Route::get('/relatorio-Materiais', 'RelatoriosController@relatorioMateriais');

Route::get('/relatorio-Newsletter', 'RelatoriosController@relatorioNewsletter');

Route::get('/internaProduto', 'InternaLojaController@interna');


// Rotas são definidas em ./vendor/laravel/framework/src/Illuminate/Routing/Router.php # auth
Auth::routes();
Route::get('/painel', 'PainelController@painel')->name('painel');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'NewsletterController@home');

Route::post('/home', 'NewsletterController@home');

Route::get('/loja', 'CategoriaController@exibirCategorias')->name('loja');
Route::get('/loja', 'ProdutoController@exibirProdutos');








