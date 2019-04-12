<?php

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('admin.home');
});
Route::get('/funcionario', function () {
    return view('admin.addemployee');
});
Route::get('/desempenho_funcionario', function () {
    return view('admin.employeedevelopment');
});
Route::get('/treinamento', function () {
    return view('admin.addtraining');
});
Route::get('/teste', function () {
    return view('admin.addtest');
});
Route::get('/home', function () {
    return view('admin.home');
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