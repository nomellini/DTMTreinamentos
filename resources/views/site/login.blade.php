@extends('adminlte::page')

@section('title', 'Lista de trainados !')

@section('content_header')
    <h1>Login</h1>
@stop

@section('content')

<form action={{ route('site.auth') }} method="post">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email"
            id="email"
            placeholder="Email" >
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="text" class="form-control" name='password' id='password' placeholder="Password" >
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@if (session('danger'))
    <div class="alert alert-danger mt-2">
        <ul>
            {{ session('danger') }}
        </ul>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@isset($request)
    @php
        print_r($request);
    @endphp
@endisset

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

