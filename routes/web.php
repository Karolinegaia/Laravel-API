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

Route::get('/', 'PrincipalController@principal');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobre-nos', 'SobreNosController@sobrenos');

Route::prefix('/app')->group(function () {
    Route::get('/login', function () {
        'Login'; });
    Route::get('/clientes', function () {
        'Clientes'; });
    Route::get('/fornecedores', function () {
        'Fornecedores'; });
    Route::get('/produtos', function () {
        'Produtos'; });
});