@extends('adminlte::page')

@section('title', 'Lista de trainados !')

@section('content_header')
    <h1>Listagem de treinados</h1>
@stop

@section('content')
    @livewire('search-treinados')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

