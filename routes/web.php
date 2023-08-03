<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/login', function () {'Login';})->name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () {
        'Produtos'; })->name('app.produtos');
});

Route::get('/rota1', function () {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function () {
    echo ('A rota acessada não existe. <a href = "'.route('site.index').'"Clique aqui</a> para retornar a página inicial');
});