<?php

namespace App\Models\Acessos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'sad.usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
}
