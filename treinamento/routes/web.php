<?php


//Painel de adminstração
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/painel', function () {
    return view('admin.home');
});
Route::get('/painel/funcionario', function () {
    return view('admin.addemployee');
});
Route::get('/painel/desempenho', function () {
    return view('admin.employeedevelopment');
});
Route::get('/painel/treinamento', function () {
    return view('admin.addtraining');
});
Route::get('/painel/teste', function () {
    return view('admin.addtest');
});

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