@extends('layouts.master')
@section('title', 'Turmas disponíveis')

@section('content')

<div class="bg-laravel text-white m-5 p-5 opacity-90 text-lg shadow-lg rounded-lg">
    {{$turma->Nome}}
    <p class="text-sm text-slate-300 " >{{$turma->Descricao}}</p>
</div>

<p class="m-5 p-5 font-sans font-normal">
    {!! nl2br($turma->Conteudo) !!}
</p>


@stop
