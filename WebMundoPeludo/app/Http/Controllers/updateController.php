<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use Illuminate\Http\Request;
use Illuminate\Http\User;

class updateController extends Controller
{
    public function get_usuario(){

    }
    public function get_mascota(){

    }
    public function get_articulo($id){
        $articulos=articulo::whereid($id)->firstOrFail();
        return view('edit_articulo',['articulos'=>$articulos]);


    }
    public function update_usuario(){

    }
    public function update_mascota(){

    }
    public function update_articulo($id){


    }

}
