<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\requestValidaciones;

class validacionesControler extends Controller
{

    function recibirMascota(requestValidaciones $validador){
        return redirect('registroMascotas')->with('mensaje','Todo correcto. Mascota Dada de alta en sistema');
    }
    function recibirUsuario(requestValidaciones $validador){
        return redirect('registroUsuarios')->with('mensaje','Todo correcto. Usuario Dado de alta en sistema');
    }
    function recibirArticulo(requestValidaciones $validador){
        return redirect('registroArticulos')->with('mensaje','Todo correcto. Articulo Dada de alta en sistema');
    }
}
