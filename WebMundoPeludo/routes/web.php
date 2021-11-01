<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\controladorLogin;
use App\Http\Controllers\getController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [controladorLogin::class,'index']);

Route::get('inicio', ['as'=> 'inicio', function () {
    return view('inicio');
}]);


Route::get('registroArticulos', ['as'=> 'NArticulos', function () {
    return view('registroArticulos');
}]);


Route::get('carritos_compras', ['as'=> 'Carritoscompras', function () {
    return view('carritos_compras');
}]);


Route::get('registroMascotas', ['as'=> 'NMascotas', function () {
    return view('registroMascotas');
}]);

Route::get('registroUsuarios', ['as'=> 'NUsuarios', function () {
    return view('registroUsuarios');
}]);

Route::get('estadisticasMascotas', ['as'=> 'estMascotas', function () {
    return view('estadisticas_mascotas');
}]);

Route::get('estadisticasUsuario', ['as'=> 'estUsuarios', function () {
    return view('estadisticas_usuarios');
}]);

Route::get('estadisticasArticulos', ['as'=> 'estArticulos', function () {
    return view('estadisticas_articulos');
}]);

Route::get('Solicitar_mascota', ['as'=> 'SolicitarMascota', function () {
    return view('solicitar_mascota');
}]);

Route::get('Solicitar_articulo', ['as'=> 'SolicitarArticulo', function () {
    return view('solicitar_articulo');
}]);


/*RUTAS DE ENVIO DE INFORMACION A BD*/
Route::post('nuevoUsuario',[PostController::class, 'registro_usuario'])->name('nuevoUsuario.registro_usuario');
Route::post('nuevoArticulo',[PostController::class, 'registro_articulo'])->name('nuevoArticulo.registro_articulo');
Route::post('nuevaMascota',[PostController::class, 'registro_mascota'])->name('nuevaMascota.registro_mascota');
/*FIN*/

/*RUTAS DE RECUPERACION DE DATOS DE BD*/
Route::get('usuarios','App\Http\Controllers\getController@recuperar_usuario' )->name('actUser');
Route::get('mascotas','App\Http\Controllers\getController@recuperar_mascota' )->name('actMascota');
Route::get('articulos','App\Http\Controllers\getController@recuperar_articulo' )->name('actArticulo');
/*FIN*/
