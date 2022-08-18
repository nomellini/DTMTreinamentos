<?php

namespace App\Http\Controllers\Site\Treinamento;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Treinamento\CadastroTreinamento;

class ListaTreinamentoController extends Controller
{
    function index() {

        $this->authorize('lista-treinados');

        $lista = CadastroTreinamento::all();

        return view('site.treinamento.lista', compact('lista'));
    }
}
