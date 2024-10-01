<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;


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

Route::get('/contato', 'ContatoController@contato')->name('contato');
Route::get('/', 'PrincipalController@principal')->name('home');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('sobreNos');

Route::get('/paises', 'PaisController@index')->name('paises.index');
Route::get('/paises/{nome}', 'PaisController@show')->name('paises.show');

Route::get('/cidades', [CidadeController::class, 'index'])->name('cidades.index');
Route::get('/cidades/{id}', [CidadeController::class, 'show'])->name('cidades.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
