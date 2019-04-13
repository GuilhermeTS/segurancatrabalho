<?php

namespace treinamento\Http\Controllers;

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
