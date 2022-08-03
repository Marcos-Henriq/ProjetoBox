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
    $recebendo= request('inp');
        return view('form', ['recebendo' => $recebendo]);
});

Route::get('/form', function () {
    $data= request('data');
    $recebendo= request('caminho');
    $nome= request('nome_completo');
    $cpf= request('cpf');
    $cargo= request('cargo');
    $senioridade= request('senioridade');
    $chk_box= request('chk_box');
    $local_trabalho= request('local_trabalho');
    $cidade_estado= request('cidade_estado');
    return view('form', 
                    ['nome'         =>      $nome,
                    'recebendo'     =>      $recebendo,
                    'cargo'         =>      $cargo,
                    'senioridade'   =>      $senioridade,
                    'chk_box'       =>      $chk_box,
                    'local_trabalho'=>      $local_trabalho,  
                    'cidade_estado' =>      $cidade_estado,
                    'cpf'           =>      $cpf,
                    'data'          =>      $data
                    ]);  
});
Route::get('/pg', function () {
    $recebendo= request('inp');
        return view('pg', ['recebendo' => $recebendo]);
    
});
//  Rota para a Div (Processo Administrativos/ Div filhos) roteirizar no javascripts - fim