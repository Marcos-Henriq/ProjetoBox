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
    return view('index');
});


Route::get('/formulario', function () {
    return view('form');
});


//  Rota para a Div (Processo Administrativos/ Div filhos) - inicio

Route::get('/processosAdm', function () {
    return view('pg');
});


Route::get('/form', function () {
    $pg_use= request('pg');
        return view('form', ['recebendo' => $recebendo]);
});
Route::get('/enviar', function () {
    $recebendo= request('caminho');
    $nome= request('nome_completo');
    $cpf= request('cpf');
    $cargo= request('cargo');
    $senioridade= request('senioridade');
    $chk_box= request('chk_box');
    return view('form', ['nome' => $nome,
                         'recebendo'=>$recebendo,
                         'cpf'=>$cpf,
                        'cargo'=>$cargo,
                        'senioridade'=>$senioridade,
                        'chk_box'=>$chk_box]);  
});
Route::get('/pg', function () {
    $recebendo= request('inp');
    $pg_use= request('pg');
        return view('pg', ['recebendo' => $recebendo]);
    
});
//  Rota para a Div (Processo Administrativos/ Div filhos) roteirizar no javascripts - fim