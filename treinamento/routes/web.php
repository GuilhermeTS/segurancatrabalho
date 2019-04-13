<?php

//Rota raiz
Route::get('/', function () {
    return view('auth.login');
});

//Login
Route::post('/login', 'Auth\LoginController@login');

//Painel de adminstração
Route::get('/painel', 'Administrator@painel');
Route::get('/painel/funcionario', 'Administrator@addFuncionario');
Route::get('/painel/desempenho', 'Administrator@desempFuncionario');
Route::get('/painel/treinamento', 'Administrator@addTreinamento');
Route::get('/painel/teste', 'Administrator@addTeste');

Route::get('/funcionario/home', function () {
    return view('employee.home');
});

Route::get('/funcionario/informacao', function () {
    return view('employee.employee');
});

Route::get('/funcionario/progresso', function () {
    return view('employee.progress');
});

Route::get('/funcionario/treinamento', function () {
    return view('employee.training');
});

Route::get('/funcionario/teste', function () {
    return view('employee.test');
});