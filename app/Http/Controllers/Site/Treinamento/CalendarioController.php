<?php

namespace App\Http\Controllers\Site\Treinamento;

use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CalendarioController extends Controller
{

    public Carbon $currDate;

    public function __construct()
    {
        $this->currDate = Carbon::now();
    }


    public function getDates($mes, $ano) {


        $currDate = Carbon::now();
        $currDate->year($ano)->month($mes)->day(1);

        $Anterior = (new Carbon($currDate))->addMonth(-1);
        $Proximo = (new Carbon($currDate))->addMonth(1);

        return [
            'mesAtual' => $mes,
            'anoAtual' => $ano,
            'mesAnterior' => $Anterior->month,
            'anoAnterior' => $Anterior->year,
            'mesProximo' => $Proximo->month,
            'anoProximo' => $Proximo->year
        ];
    }


    public function index($mes = 0, $ano = 0) {

        if ($mes==0) {
            $mes = $this->currDate->month;
        }
        if ($ano==0) {
            $ano = $this->currDate->year;
        }

        $datas = $this->getDates($mes, $ano);

        $sql = "select
        tr.idTreinamento, Nome, min(DataInicio) as DataInicio, tu.Aberta, tu.Vagas
    from
        treinamento_new.curtreinamento tr
            inner join treinamento_new.curturma tu on tr.idTreinamento = tu.idTreinamento
    where
         tr.Publicado = 1 and tu.Publicado = 1
        and MONTH(DataInicio) = " . $datas['mesAtual'] . "
        and YEAR(DataInicio) = " . $datas['anoAtual'] .  "
    group by
        tr.idTreinamento, Nome, tu.Aberta, tu.Vagas
    order by 3 asc";
        $turmas = DB::select($sql);

        foreach($turmas as $turma) {
            if ($turma->Aberta)
            {
                $turma->class = "text-success";
                $turma->icon = 'fas fa-check';
            } else {
                $turma->class = "text-danger";
                $turma->icon = 'fas fa-times';
            }
        }

        return view('site.treinamento.calendario', [
            'turmas' => $turmas,
            'datas' => $datas
        ]);
    }
}
