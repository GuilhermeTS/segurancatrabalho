@extends('templates.struct')

@section('title', 'Funcionário')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('body')

    @component('admin.administrator.administratormenu') @endcomponent

    <div class="text-center">
        <button type="button" class="cadast btn btn-outline-success btn-lg" data-toggle="modal" data-target="#register">Cadastrar</button>
    </div>

    @component('admin.administrator.table')
        @slot('head')
            <th scope="col">Nome</th>
            <th scope="col">Número de acertos</th>
            <th scope="col">Número de erros</th>
            <th scope="col">Área</th>
            <th scope="col">Status</th>
        @endslot
        <td></td>
    @endcomponent

@endsection