@extends('adminlte::page')

@section('title', 'Lista de items !')

@section('content_header')
    <h1>Listagem de items</h1>
@stop

@section('content')

    <div class="row">

    <div class="card">
        <div class="card-header">
            #filtos
        </div>
        <div class="card-body">
            <table class="table  table-hover table-sm ">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cargo</th>
                        <th width=50>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lista as $item)
                    <tr>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->cargo}}</td>
                        <td> <a href="{{ route('site.treinamento.lista', ['id' => $item->id]) }}" class="btn btn-warning">ok</a>             </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('site.treinamento.lista') }}">lista</a>

        </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

