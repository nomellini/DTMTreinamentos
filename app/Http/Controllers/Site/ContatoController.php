<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    function contato() {
        return view('site.contato', ['post' => $_POST]);
    }
}
