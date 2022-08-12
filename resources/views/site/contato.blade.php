@extends('adminlte::page')

@section('title', 'Contato')

@section('content_header')
    <h1>Contato</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            @component('site.layouts._components.contatoform', ['cor' => '#ff0000'])
            <p>Teste</p>
            @endcomponent
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
