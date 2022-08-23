{{-- @extends('layouts.master') --}}
@extends('adminlte::page')

@section('title', 'Lista de trainados !')

@section('content_header')
<div class="bg-laravel text-white p-5 opacity-90">
    Turmas Disponíveis
</div>

        <div class="row align-items-center no-gutters" >
            <div class="col-2">
                <a href="{{ route('site.treinamento.calendario',[
                    'mes' => $datas['mesAnterior'],
                    'ano' => $datas['anoAnterior']
                ]) }}"><i class="fas fa-arrow-left fa-lg"></i> </a>
            </div>
            <div class="col">
                <h3 >Calendário de treinamentos {{ $datas['mesAtual'] . "/" . $datas["anoAtual"]  }}</h3>
            </div>
            <div class="col-2">
                <a href="{{ route('site.treinamento.calendario',[
                    'mes' => $datas['mesProximo'],
                    'ano' => $datas['anoProximo']
                ]) }}"> <i class="fas fa-arrow-right fa-lg "></i> </a>
            </div>
        </div>
@stop

@section('content')

<div class="row">
    <div class="col">
        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">Início</th>
                <th scope="col">Curso / Treinamento</th>
                <th class="text-center" scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($turmas as $turma)
            <tr class="{{$turma->class}}"">
                <td>{{ date('d/m', strtotime($turma->DataInicio))  }}</td>
                <td>
                    <a href="{{ route('treinamento.turmas-disponiveis',
                        [
                            'id'  => $turma->idTreinamento,
                            'mes' => $datas['mesAtual'],
                            'ano' => $datas['anoAtual']
                        ] )}}">
                    {{ $turma->Nome  }}
                </a>
                </td>
                <td class="text-center"><i class="{{$turma->icon}}"></i>
                </td>
            </tr>
            @empty
            <tr >
                <td class="p-5 align-middle text-center" colspan="3">
                    <h3>
                    Sem turmas para {{ $datas['mesAtual'] . "/" . $datas["anoAtual"]  }}
                    </h3>
                </td>
            </tr>
            @endforelse
        </tbody>
        </table>

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

