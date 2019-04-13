@extends('templates.table')
@extends('admin.administrator.administratormenu')
@extends('templates.struct')

<div style="margin-top:-10px;">Lazal</div>
@section('css')
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('title')
    Home
@endsection