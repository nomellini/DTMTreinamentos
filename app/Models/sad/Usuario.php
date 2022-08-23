<?php

namespace App\Models\sad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuario extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'sad.usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
}
