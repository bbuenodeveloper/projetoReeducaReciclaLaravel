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

// Rotas menu acesso as paginas

Route::get('/','HomeController@home');

Route::get('/home','HomeController@home');

Route::get('/sobre', 'SobreController@sobre');

Route::get('/contato', 'ContatoController@contato');

Route::post('/contato', 'ContatoController@sendMail');

Route::get('/mapa', 'MapaController@mapa');

Route::get('/faq', 'FaqController@faq');

Route::get('/loja', 'LojaController@loja');

Route::get('/privacidade', 'PrivacidadeController@privacidade');

Route::get('/termos', 'TermosController@termos');

Route::get('/blog', 'BlogController@blog');

Route::get('/blog-details', 'BlogController@blogdetails');

Route::get('/como-reciclar', 'ReciclarController@comoReciclar');


// Rotas loja

Route::get('/carrinho', 'CarrinhoController@carrinho');

Route::get('/finalizada', 'FinalizadaController@finalizada');

Route::get('/dadoscompra', 'DadosCompraController@dadoscompra');

Route::get('/internaProduto/{id}', 'InternaLojaController@exibirProdutoUnico');

Route::get('/carrinho/{id}', 'CarrinhoController@carrinhoProduto');

Route::get('/dadoscompra/{id}', 'DadosCompraController@dadosProduto');

Route::get('/loja', 'ProdutoController@exibirProdutos');


// rotas internas do mapa de acesso ao banco de dados

Route::get('/marcadores/{cidade}/{materiaisIds}', 'MarcadoresController@marcadores')->name('marcadores');

Route::get('/cidades', 'CidadeController@obterJson');




// rotas incluir registros

Route::get('/add-cidade', 'CidadeController@addCidade');

Route::get('/add-material', 'MaterialController@addMaterial');

Route::get('/add-empresa', 'EmpresaController@addEmpresa');

Route::get('/add-produto', 'ProdutoController@addProduto');

Route::get('/add-newsletter', 'NewsletterController@addnewsletter');

Route::get('/add-categoria', 'CategoriaController@categorias');

Route::get('/add-admin','AdminController@addAdmin');

Route::get('/registerPainel','Auth\RegisterController@addUser');


// rotas cadastrar registros


Route::post('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('produto.cadastrar');

Route::post('/cadastrarempresa', 'EmpresaController@cadastrarEmpresa')->name('empresa.cadastrar');

Route::post('/cadastrarmaterial', 'MaterialController@cadastrarMaterial')->name('material.cadastrar');

Route::post('/cadastrarcidade', 'CidadeController@cadastrarCidade')->name('cidade.cadastrar');

Route::post('/cadastrarnewsletter', 'NewsletterController@cadastrarNewsletter')->name('newsletter.cadastrar');

Route::post('/cadastrarAdmin','AdminController@cadastrarAdmin')->name('admin.cadastrar');

Route::post('/cadastrarcategoria','CategoriaController@cadastrarCategoria')->name('categoria.cadastrar');

Route::post('/cadastrarusuario','RegisterController@create');


// rotas deletar registros


Route::get('/apagarmaterial/{id}','MaterialController@apagarMaterial');

Route::get('/apagarempresa/{id}','EmpresaController@apagarEmpresa');

Route::get('/apagarcidade/{id}','CidadeController@apagarCidade');

Route::get('/apagarnews/{id}', 'Newslettercontroller@apagarNews');


// rotas editar registros Get


Route::get('/editar-material/{id}','MaterialController@ViewEditarMaterial');

Route::get('/editar-empresa/{id}','EmpresaController@ViewEditarEmpresa');

Route::get('/editar-cidade/{id}','CidadeController@ViewEditarCidade');



// rotas editar registros Post

Route::post('/editado/{id}','MaterialController@editarMaterial');

Route::post('/editadoempresa/{id}','EmpresaController@editarEmpresa');

Route::post('/editadocidade/{id}','CidadeController@editarCidade');



Route::get('/editar-news/{id}', 'NewsletterController@editarNews');
Route::post('/editar-news/{id}', 'NewsletterController@editarNews');



// rotas relatórios


Route::get('/relatorio-Users', 'RelatoriosController@relatorioUsers');

Route::get('/relatorio-Empresas', 'RelatoriosController@relatorioEmpresas');

Route::get('/relatorio-Cidades', 'RelatoriosController@relatorioCidades');

Route::get('/relatorio-Materiais', 'RelatoriosController@relatorioMateriais');

Route::get('/relatorio-Newsletter', 'RelatoriosController@relatorioNewsletter');



// Rotas de autenticação


Auth::routes();
Route::get('/painel', 'PainelController@painel')->name('painel');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'NewsletterController@home')->name('home');

Route::post('/home', 'NewsletterController@home');



Route::get('/adminlista','AdminController@mostrarLista');

Route::get('/registerPainel','Auth\RegisterController@addUser');









