@extends('templates.table')
@extends('admin.administrator.administratormenu')
@extends('templates.struct')

@section('title')   
Funcionário 
@endsection
<div style="margin-top:-10px;">Lazal</div>
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('body')
    @section('tabletitle')
        <th scope="col">Nome</th>
        <th scope="col">Número de acertos</th>
        <th scope="col">Número de erros</th>
        <th scope="col">Área</th>
        <th scope="col">Status</th>
    @endsection
    @section('body')
        <td></td>
    @endsection 
@endsection