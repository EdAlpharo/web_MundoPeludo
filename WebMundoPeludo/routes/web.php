<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\controladorLogin;
use App\Http\Controllers\getController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\authController;
use App\Http\Middleware\Authenticate;

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

Route::get('login', ['as'=> 'login', function () {
    return view('login');
}]);

Route::get('registro', ['as'=> 'registro', function () {
    return view('registro');
}]);


Route::get('inicio', [authController::class,'inicio'])->name('inicio');

Route::get('registroArticulos', [authController::class, 'registroArticulos'])->name('NArticulos');

Route::get('carritos_compras', [authController::class, 'carrito_compras'])->name('Carritoscompras');

Route::get('registroMascotas', [authController::class, 'registroMascotas'])->name('NMascotas');

Route::get('registroUsuarios', [authController::class, 'registroUsuarios'])->name('NUsuarios');

Route::get('estadisticasMascotas', [authController::class, 'estadisticasMascotas'])->name('estMascotas');

Route::get('estadisticasUsuario', [authController::class, 'estadisticasUsuario'])->name('estUsuarios');

Route::get('estadisticasArticulos', [authController::class, 'estadisticasArticulos'])->name('estArticulos');

Route::get('Solicitar_mascota', [authController::class, 'solicitar_mascota'])->name('SolicitarMascota');

Route::get('Solicitar_articulo', [authController::class, 'solicitar_articulo'])->name('SolicitarArticulo');


/*RUTAS DE ENVIO DE INFORMACION A BD*/
Route::post('nuevoUsuario',[PostController::class, 'registro_usuario'])->name('nuevoUsuario.registro_usuario');
Route::post('nuevoArticulo',[PostController::class, 'registro_articulo'])->name('nuevoArticulo.registro_articulo');
Route::post('nuevaMascota',[PostController::class, 'registro_mascota'])->name('nuevaMascota.registro_mascota');
Route::post('user',[controladorLogin::class, 'registro'])->name('user.registro');
/*FIN*/

/*RUTAS DE RECUPERACION DE DATOS DE BD*/
Route::get('usuarios','App\Http\Controllers\getController@recuperar_usuario' )->name('actUser');
Route::get('mascotas','App\Http\Controllers\getController@recuperar_mascota' )->name('actMascota');
Route::get('articulos','App\Http\Controllers\getController@recuperar_articulo' )->name('actArticulo');
/*FIN*/


/*RUTAS DE EDICION DE REGISTROS*/
Route::get('articulo/{id?}/edit','App\Http\Controllers\updateController@get_articulo' )->name('editAtriculo.get_articulo');
/*FIN*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

