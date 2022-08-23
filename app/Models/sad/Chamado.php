<?php

namespace App\Models\sad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chamado extends Model
{
    use HasFactory;
    protected $table = 'sad.chamado';
    protected $primaryKey = 'id_chamado';
    public $timestamps = false;
}
