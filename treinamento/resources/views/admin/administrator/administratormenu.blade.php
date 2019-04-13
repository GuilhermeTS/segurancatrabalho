@extends('templates.menu')
@section('menu')
    <li class="nav-item active">
        <a class="nav-link text-white" href="/painel">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/paine/funcionario">Cadastro de funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/painel/desempenho">Desempenho do funcionário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/painel/treinamento">Adcionar treinamentos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/painel/teste">Adcionar testes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Sair</a>
    </li>
@endsection