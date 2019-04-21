<?php
//Rota raiz
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

//Login
Route::post('/login', 'Auth\LoginController@login');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

//Logout de administração
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Registro
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::post('/register', 'Auth\RegisterController@register');


//Painel de adminstração
Route::get('/painel', 'Administrator@painel');
Route::get('/painel/funcionario', 'Administrator@addFuncionario');
Route::post('/painel/addfuncionario', 'Administrator@employeeRegister');
Route::get('/painel/desempenho', 'Administrator@desempFuncionario');
Route::get('/painel/treinamento', 'Administrator@addTreinamento');
Route::get('/painel/teste', 'Administrator@addTeste');

//Teste
Route::get('/teste', function () {
    return view('admin.test');
});
Route::get('/cadastrar_teste', function () {
    return view('admin.registrations.registertest');
});
Route::get('/alterar_teste', function () {
    return view('admin.changes.changetest');
});


/*
Route::get('/informacao', function () {
    return view('employee.employee');
});
Route::get('/desempenho', function () {
    return view('employee.development');
});
Route::get('/treinamento', function () {
    return view('employee.training');
});
Route::get('/teste', function () {
    return view('employee.test');
});
*/