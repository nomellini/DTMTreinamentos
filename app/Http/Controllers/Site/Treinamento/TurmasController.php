<?php
namespace App\Http\Controllers\Site\Treinamento;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TurmasController extends Controller {

    public function show($TreinamentoId, $mes, $ano) {
        $sql = "SELECT idTreinamento, Nome, Sinopse, Descricao, Conteudo, Preco, CargaHoraria, Modulos
                FROM treinamento_new.curTreinamento
                WHERE idTreinamento = ?";

        $turma = DB::select($sql, [$TreinamentoId])[0];


        return view('site.treinamento.turmas-disponiveis', compact('turma'));

    }

}

