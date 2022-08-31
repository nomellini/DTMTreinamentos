{{-- @extends('layouts.master')
@section('title', 'Turmas disponíveis')
@section('content')
--}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    {{-- Descrição do treinamento --}}
    <div class="p-5 text-black">
        <h1 class="text-3xl" >{{$turma->Nome}}</h1>
        <p class="mt-2 text-slate-900 text-sm" >{{$turma->Descricao}}</p>
    </div>

    {{-- Conteúdo e carga horária --}}
    <div class="grid grid-cols-1 md:grid-cols-4">

        {{-- Conteúdo --}}
        <div class="col-span-3 m-1">

            <div class="flex flex-col sm:flex-row items-stretch justify-between " >
                <div class="flex-auto p-5 bg-slate-50
                    border-b-2
                    hover:border-b-2 hover:border-black">Visão Geral</div>
                <div class="flex-auto p-5 bg-slate-50
                    border-b-2
                    hover:border-b-2 hover:border-black">Informações Complementares</div>
                <div class="flex-auto p-5 bg-slate-50
                    border-b-2
                    hover:border-b-2 hover:border-black">Inscrição</div>
            </div>

            <div class="bg-slate-100 ">
                <p class="p-5 tracking-tight">
                    {!! nl2br($turma->Conteudo) !!}
                </p>
            </div>

            <div class="bg-slate-100 ">
                <p class="p-5 tracking-tight">
                    {!! nl2br($turma->Sinopse) !!}
                </p>
            </div>

        </div>

        {{-- Carga horária --}}
        <div class="m-1 p-5 rounded-xl col-span-1">
            <ol>
                <li>Duração: {{ $turma->Modulos }}</li>
                <li>{{ $turma->CargaHoraria }}</li>
                <li>{{ $turma->Preco }}</li>
                <li><span>Local do treinamento: </span><a href="https://goo.gl/maps/Qv11dMsMkZQ2" target="_blank">Veja o mapa</a></li>
            </ol>
        </div>
    </div>

    </div>
</div>
</x-app-layout>
