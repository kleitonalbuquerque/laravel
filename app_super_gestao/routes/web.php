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

Route::get('/', function () {
    return '<h1>Home Page</h1>';
});

Route::get('/sobre-nos', function () {
    return '<h1>Sobre nós</h1>';
});

Route::get('/contato', function () {
    return '<h1>Contato</h1>';
});