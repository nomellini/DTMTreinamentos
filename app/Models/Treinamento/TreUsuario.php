<?php

namespace App\Models\Treinamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreUsuario extends Model
{
    use HasFactory;
    protected $table = 'treinamento.tre_usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
