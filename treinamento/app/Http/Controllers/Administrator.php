<?php

namespace treinamento\Http\Controllers;

use treinamento\Http\Requests\EmployeeRegister;

use Illuminate\Http\Request;

class Administrator extends Controller
{    
    public function __construct()
    {
        $this->middleware('sessao');
    }   

    public function painel(){
        return view('admin.home');
    }

    public function addFuncionario(){
        return view('admin.addemployee');
    }
    
    //Injeta o request criado para cadastro de funcionários
    public function employeeRegister(EmployeeRegister $request)
    {
        //Envia para o request
        $validacao = $request->validated();

        if ($validacao->fails()) {
            return view('admin.addemployee');
        }
    }

    public function desempFuncionario(){
        return view('admin.employeedevelopment');
    }

    public function addTreinamento(){
        return view('admin.addtraining');
    }
    
    public function addTeste(){
        return view('admin.addtest');
    }
}
