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

Route::get('/login', function() { return 'Login'; });

Route::get('/clientes', function() { return 'Clientes'; });

Route::get('/fornecedores', function() { return 'Fornecedores'; });

Route::get('/produtos', function() { return 'Produtos'; });

// Parâmetros: nome, categoria, titulo, mensagem
// Route::get('/contato/{titulo?}/{autor?}/{categoria?}/{mensagem?}', function(
//     string $titulo = 'Título', 
//     string $autor = 'Autor', 
//     string $categoria = 'Categoria', 
//     string $mensagem = ""
//     ) { // /{mensagem?} => parâmetro opcional
//     echo '<div class="container">';
//     echo "<h1>$titulo</h1>";
//     echo '<br>';
//     echo "Autor: $autor";
//     echo '<br>';
//     echo "Categoria: $categoria";
//     echo '<br>';
//     echo '<textarea placeholder="Texto">' . $mensagem . '</textarea>';
//     echo '</div>';
// });

// Tratando parâmetros de rotas com expressões regulares
// Route::get('/contato/{nome}/{categoria_id}', function(
//     string $nome = 'Desconhecido', 
//     int $categoria_id = 1 // 1 - 'Informação'
//     ) {
//     echo "$nome - $categoria_id";
//     }
// )->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+');