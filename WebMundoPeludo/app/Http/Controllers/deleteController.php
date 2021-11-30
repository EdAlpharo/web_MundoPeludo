<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use Illuminate\Http\User;

class deleteController extends Controller
{
    public function delete_mascota($id){
        $mascota = mascota::find($id);
        $mascota->delete();
        alert()->success('Registro eliminado con éxito');
        return redirect()->route('actMascota');


    }
}
