<?php

namespace App\Services;

use App\Models\User;
use App\Models\sad\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SADLoginService {

    public function Attempt($credential) {

        $login = $credential['username'];
        $senha = $credential['password'];

        $usuario = Usuario::where('login', $login)
                        ->where('senha', md5($senha))
                        ->first();

        if ($usuario == null)
            return false;


        $user = User::where('id_usuario', $usuario->id_usuario)->first();

        if ($user == null)
        {
            $user = new User();
            $user->id_usuario = $usuario->id_usuario;
            $user->name = $usuario->nome;
            $user->username = $usuario->login;
            $user->password = Hash::make($senha);
            $user->email = $usuario->email;
            $user->save();
        };

        Auth::login($user);

        return true;

    }

}
