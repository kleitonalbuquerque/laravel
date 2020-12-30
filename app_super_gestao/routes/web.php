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

// Route::get('/sobre-nos', function () {
//     return '<h1>Sobre nós</h1>';
// });

// Route::get('/contato', function () {
//     return '<h1>Contato</h1>';
// });

// Rotas públicas
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function() { return 'Login'; })->name('site.login');

// Rotas privadas => /app
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');


Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Route::redirect('/rota2', '/rota1');


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