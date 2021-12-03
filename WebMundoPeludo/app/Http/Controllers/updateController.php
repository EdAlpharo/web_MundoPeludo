<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use Illuminate\Http\Request;
use Illuminate\Http\User;
use RealRashid\SweetAlert\Facades\Alert;

class updateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update_usuario(){


    }
    public function get_mascota($id){
        $mascotas = mascota::find($id);
        return view('edit_mascotas', ['mascotas' => $mascotas]);
    }

    public function update_mascota(Request $request, $id){
        $mascota = mascota::findOrFail($id);
        $mascota->especie = $request->input('especie');
        $mascota->raza = $request->input('raza');
        $mascota->edad = $request->input('edad');
        $mascota->condicion_salud = $request->input('condicion_salud');
        $mascota->sexo = $request->input('sexo');
        $mascota->vacunado = $request->input('vacunado');
        $mascota->status = $request->input('status');
        $mascota->imagen = $request->input('imagen');

        if($imagen = $request->file('imagen')){
                $rutaGuardarImg = 'img/mascotas/';
                $imagenMascota = date('YmdHis') . $imagen->getClientOriginalName();
                $imagen->move($rutaGuardarImg, $imagenMascota);
                $mascota['imagen'] = $imagenMascota;
            }

        $mascota->save();
        alert()->success('Actualizacion de registros','La mascota '.$mascota->especie.' raza: '.$mascota->raza.' con ID 00'.$mascota->id.' fué actualizada con exito');
        return redirect()->route('actMascota');

    }
    public function get_articulo($id){
        $articulos = articulo::find($id);
        return view('edit_articulo',['articulos'=>$articulos]);
    }
    public function update_articulo(Request $request, $id){
        $articulo = articulo::findOrFail($id);
        $articulo->articulo = $request->input('articulo');
        $articulo->descripcion = $request-> input('descripcion');
        $articulo->precio = $request-> input('precio');
        $articulo->cantidad = $request-> input('cantidad');
        $articulo->estatus = $request-> input('estatus');
        $articulo->imagen = $request-> input('imagen');

        if($imagen = $request->file('imagen')){
                $rutaGuardarImg = 'img/articulos/';
                $imagenArticulo = date('YmdHis') . $imagen->getClientOriginalName();
                $imagen->move($rutaGuardarImg, $imagenArticulo);
                $articulo['imagen'] = $imagenArticulo;
            }

        $articulo->save();
        alert()->success('Actualizacion de registros','El artículo '.$articulo->articulo.' con ID 00'.$articulo->id.' fué actualizado con exito');
        return redirect()->route('actArticulo');
    }
    public function changeStatus_adoptado($id){
        $mascotas = \DB::table('mascotas')->select('id','especie','raza','edad','condicion_salud','vacunado','sexo','imagen','status')
        ->where('id','=',$id)
        ->get();
        $mascota = mascota::findOrFail($id);
        $mascota->status = 'adoptado';
        $mascota->save();
        return view('confirmarAdopcion',['mascotas'=>$mascotas]);
    }

    public function changeStatus_carrito($id){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','estatus','imagen')
        ->where('id','=',$id)
        ->get();
        $articulo = articulo::findOrFail($id);
        $articulo->estatus = 'en_carrito';
        $articulo->save();
        return redirect()->route('SolicitarArticulo');
    }

    public function changeStatus_vendido($id){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','estatus','imagen')
        ->where('estatus','=',$id)
        ->get();
        $articulo = articulo::findOrFail($id);
        $articulo->estatus = 'vendido';
        $articulo->save();
        return view('confirmarCompra',['articulos'=>$articulos]);
    }
    public function carrito(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','estatus','imagen')
        ->where('estatus','=','en_carrito')
        ->get();
        return view('carrito_compras',['articulos'=>$articulos]);
    }
    public function articulo_vendido(){
        return view('error');
    }
    public function changeStatus_disponible($id){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','estatus','imagen')
        ->where('estatus','=',$id)
        ->get();
        $articulo = articulo::findOrFail($id);
        $articulo->estatus = 'vendido';
        $articulo->save();
        return view('carrito_compras',['articulos'=>$articulos]);
    }


}
