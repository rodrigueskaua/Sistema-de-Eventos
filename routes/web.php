<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Kauã";
    $idade = 19;
    $profissao = "Desenvolvedor";
    $arr = ['10',200,3000,40000,500000];

    return view('welcome', [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => $profissao, 
        'arr' => $arr
    ]);
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('produtos');
});

