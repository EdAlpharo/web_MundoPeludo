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
    public function update_mascota(){

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

}
