<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorLogin extends Controller
{
    function login(){
        return view('login');
    }

public function acceso(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
        ]);

        $credentials = $request->only('user', 'pass');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('inicio')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Error al iniciar sesión intente de nuevo');
    }
}
