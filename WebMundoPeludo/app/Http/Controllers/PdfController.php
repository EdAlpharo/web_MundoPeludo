<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function reporteMascotas(){
        $mascotas = \DB::table('mascotas')->select('id','especie','raza','edad','condicion_salud','vacunado','sexo')->get();
        $view =  \View::make('reporte_mascotasPDF', compact('mascotas'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteMascotas.pdf');
    }

    public function reporteArticulos(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad')->get();
        $view =  \View::make('reporte_articulosPDF', compact('articulos'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteArticulos.pdf');
    }

    public function reporteUsuarios(){
        $usuarios = \DB::table('usuarios')->select('id','nombre','aPaterno','aMaterno','email')->get();
        $users = \DB::table('users')->select('id','name','email','sexo')->get();
        $view =  \View::make('reporte_usuariosPDF', compact('usuarios','users'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteUsuarios.pdf');
    }

}
