@extends('adminlte::page')

@section('title', 'Planos !')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <p>Estes são nossos planos:</p>
    <div class="card">
        <div class="card-header">
            #filtos
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width=50>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                    <tr>
                        <td>{{$plan->nome}}</td>
                        <td>{{$plan->price}}</td>
                        <td> <a href="" class="btn btn-warning">ok</a>             </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
        </div>
    </div>
    @dd($plans)
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

