@extends('templates.struct')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('title', 'Home')

@section('body')

  @component('admin.administrator.administratormenu') @endcomponent

@endsection