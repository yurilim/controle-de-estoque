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

// Route::get('/teste', function () {
//     return view('teste');
// });

// Route::get('/entrada', 'EntradaController@listar_entrada');
// Route::get('/configuracoes', 'ConfiguracoesController@listar')->name('index');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/configuracoes', 'ConfiguracoesController@listar')->name('index');

    Route::post('fornecedor', 'FornecedorController@inserir')->name('fornecedor_insert');
    Route::get('/fornecedor_edit/{id}', 'FornecedorController@editar');
    Route::put('/fornecedor_edit/{id}', 'FornecedorController@update'); 
    Route::delete('/fornecedor_delete/{id}', 'FornecedorController@deletar');

    Route::post('/tEqp_insert', 'TipoEquipamentoController@inserir')->name('tEquipamento_insert');
    Route::get('/tEqp_edit/{id}', 'TipoEquipamentoController@editar');
    Route::put('/tEqp_edit/{id}', 'TipoEquipamentoController@update');
    Route::delete('/tEqp_delete/{id}', 'TipoEquipamentoController@deletar');

    Route::get('/painel', 'PainelController@mostrar_dashboard');
    Route::get('/entrada', 'EntradaController@listar_entrada');
    Route::get('/movimentacao', 'MovimentacaoController@index');
    Route::get('/manutencao', 'ManutencaoController@index'); 
    Route::get('/relatorios', 'RelatoriosController@mostrar_relatorio');
});


// Route::group(['prefix' => 'fornecedor'], function() {
//     //
// });

// Route::group(['prefix' => 'tipoEquipamento'], function() {
//     //
// });


