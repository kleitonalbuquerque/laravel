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

// Route::get('/', function () {
//     return '<h1>Home Page</h1>';
// });

Route::get('/', 'PrincipalController@principal');

// Route::get('/sobre-nos', function () {
//     return '<h1>Sobre nós</h1>';
// });

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

// Route::get('/contato', function () {
//     return '<h1>Contato</h1>';
// });

Route::get('/contato', 'ContatoController@contato');

// Parâmetros: nome, categoria, titulo, mensagem
Route::get('/contato/{titulo}/{nome}/{categoria}/{mensagem}', function(string $titulo, string $nome, string $categoria, string $mensagem) {
    echo '<div class="container">';
    echo "<h1>$titulo</h1>";
    echo '<br>';
    echo "Autor: $nome";
    echo '<br>';
    echo "Categoria: $categoria";
    echo '<br>';
    echo '<textarea placeholder="Texto">' . $mensagem . '</textarea>';
    echo '</div>';
});