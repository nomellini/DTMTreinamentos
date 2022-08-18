<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public $request;

    public function Login() {
        return view('site.login');
    }

    public function Logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('welcome');
    }


    public function Auth(Request $request) {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'e-mail é obrigatório'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password]))
        {
            return view('welcome');
        } else {
            return redirect()->back()->with('danger', 'e-mail ou senha inválidos');
        }
    }

}
