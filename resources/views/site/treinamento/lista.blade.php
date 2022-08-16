@extends('adminlte::page')

@section('title', 'Lista de items !')

@section('content_header')
    <h1>Listagem de items</h1>
@stop

@section('content')
@livewire('search-users')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

