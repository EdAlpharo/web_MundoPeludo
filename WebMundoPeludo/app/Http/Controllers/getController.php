<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use Illuminate\Http\Request;


class getController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function recuperar_usuario(){

        $usuarios = \DB::table('usuarios')->select('id','nombre','aPaterno','aMaterno','email','pass')->get();
        $users = \DB::table('users')->select('id','name','email','password','created_at','updated_at')->get();
        return view('Admin_users',['usuarios'=>$usuarios],['users'=>$users]);
    }
    public function recuperar_articulo(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad')->get();
        return view('Admin_articulos',['articulos'=>$articulos]);

    }
    public function recuperar_mascota(){
        $mascotas = \DB::table('mascotas')->select('id','especie','raza','edad','condicion_salud','vacunado','sexo')->get();
        return view('Admin_mascotas',['mascotas'=>$mascotas]);
    }
    public function buscarUsuario(){

    }
}
