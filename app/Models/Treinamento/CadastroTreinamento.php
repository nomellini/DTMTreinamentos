<?php

namespace App\Models\Treinamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroTreinamento extends Model
{
    use HasFactory;
    protected $table = 'treinamento.cadastrotreinamento';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
