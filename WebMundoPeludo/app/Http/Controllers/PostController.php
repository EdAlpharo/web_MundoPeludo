<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function registro_usuario(Request $request){

        $usuario = new usuario();

        $usuario->nombre = $request->nombre;
        $usuario->aPaterno = $request->aPaterno;
        $usuario->aMaterno = $request->aMaterno;
        $usuario->email = $request->email;
        $usuario->pass = $request->pass;
        $usuario->cpass = $request->cpass;

        $usuario->save();

        return redirect()->route('AdminUsers');
        }

    public function registro_mascota(Request $request){

        $mascota = new mascota();

        $mascota->especie = $request->especie;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->condicion_salud = $request->condicion_salud;
        $mascota->vacunado = $request->vacunado;
        $mascota->sexo = $request->sexo;


        $mascota->save();
        return redirect()->route('AdminMascotas');

        }

    public function registro_articulo(Request $request){

        $articulo = new articulo();

        $articulo->articulo = $request->articulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->cantidad = $request->cantidad;


        $articulo->save();
        return redirect()->route('AdminArticulos');

        }

    public function show($id){

        $usuarios = usuario::find($id);

        return view('AdminUsers.show',compact('usuario'));
    }
}

