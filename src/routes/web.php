<?php

use Illuminate\Support\Facades\Route;

Route::get('/hl', function () {

    $nome = 'Francisco';
    $idade = 30;
    $profissao = 'programador';
    return view('hellowordl',['nome' => $nome, 'idade' => $idade,'profissao' => $profissao]);
});
Route::get('/', function () {
    return view('welcome');
});
