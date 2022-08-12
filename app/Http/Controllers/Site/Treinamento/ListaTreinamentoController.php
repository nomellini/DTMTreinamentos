<?php

namespace App\Http\Controllers\Site\Treinamento;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Treinamento\CadastroTreinamento;

class ListaTreinamentoController extends Controller
{
    function index() {

        Paginator::useBootstrapFive();

        $lista = CadastroTreinamento::paginate(10);

        return view('site.treinamento.lista',
            [
                'lista' => $lista
            ]);
    }
}
