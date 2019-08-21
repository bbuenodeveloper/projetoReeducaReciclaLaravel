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

Route::get('/dadoscompra/{id}', 'DadosCompraController@dadosProduto')->middleware('acesso');

// rotas internas do mapa de acesso ao banco de dados

Route::get('/marcadores/{cidade}/{materiaisIds}', 'MarcadoresController@marcadores')->name('marcadores');

Route::get('/cidades', 'CidadeController@obterJson');

// rotas incluir registros
Route::get('/add-cidade', 'CidadeController@addCidade')->middleware('acesso');

Route::get('/add-material', 'MaterialController@addMaterial')->middleware('acesso');

Route::get('/add-empresa', 'EmpresaController@addEmpresa')->middleware('acesso');

Route::get('/add-produto', 'ProdutoController@addProduto')->middleware('acesso');

Route::get('/add-newsletter', 'NewsletterController@addnewsletter')->middleware('acesso');

Route::get('/add-categoria', 'CategoriaController@categorias')->middleware('acesso');

Route::get('/add-postagens', 'BlogController@addPostagem');

Route::get('/add-tagBlog', 'BlogController@addTag');

Route::get('/registerPainel','Auth\RegisterController@addUser');

Route::get('/add-admin','AdminController@addAdmin')->middleware('acesso');

Route::get('/registerPainel','Auth\RegisterController@addUser')->middleware('acesso');

// rotas cadastrar registros

Route::post('/cadastrartagblog', 'BlogController@cadastrarPpostagem')->name('tagBlog.cadastrar');

Route::post('/cadastrarpostagem', 'BlogController@cadastrarPpostagem')->name('postagem.cadastrar');
Route::post('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('produto.cadastrar')->middleware('acesso');

Route::post('/cadastrarempresa', 'EmpresaController@cadastrarEmpresa')->name('empresa.cadastrar')->middleware('acesso');

Route::post('/cadastrarmaterial', 'MaterialController@cadastrarMaterial')->name('material.cadastrar')->middleware('acesso');

Route::post('/cadastrarcidade', 'CidadeController@cadastrarCidade')->name('cidade.cadastrar')->middleware('acesso');

Route::post('/cadastrarnewsletter', 'NewsletterController@cadastrarNewsletter')->name('newsletter.cadastrar')->middleware('acesso');

Route::post('/cadastrarAdmin','AdminController@cadastrarAdmin')->name('admin.cadastrar')->middleware('acesso');

Route::post('/cadastrarcategoria','CategoriaController@cadastrarCategoria')->name('categoria.cadastrar')->middleware('acesso');

Route::post('/cadastrarusuario','RegisterController@create')->middleware('acesso');


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


Route::get('/relatorio-Users', 'RelatoriosController@relatorioUsers')->middleware('acesso');

Route::get('/relatorio-Empresas', 'RelatoriosController@relatorioEmpresas')->middleware('acesso');

Route::get('/relatorio-Cidades', 'RelatoriosController@relatorioCidades')->middleware('acesso');

Route::get('/relatorio-Materiais', 'RelatoriosController@relatorioMateriais')->middleware('acesso');

Route::get('/relatorio-Newsletter', 'RelatoriosController@relatorioNewsletter')->middleware('acesso');


// Rotas de autenticação


Auth::routes();
Route::get('/painel', 'PainelController@painel')->name('painel')->middleware('acesso');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'NewsletterController@home')->name('home');

Route::post('/home', 'NewsletterController@home');



Route::get('/adminlista','AdminController@mostrarLista')->middleware('acesso');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::get('/registerPainel','Auth\RegisterController@addUser');









