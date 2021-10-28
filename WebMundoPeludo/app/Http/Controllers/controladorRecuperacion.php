<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class controladorRecuperacion extends Controller
{
    public function rUsuarios(){

        $usuarios = usuario::all();

        return redirect()->route('AdminUsers',compact('usuarios'));
    }

}
