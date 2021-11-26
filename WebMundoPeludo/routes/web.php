<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\controladorLogin;
use App\Http\Controllers\getController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\authController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\PdfController;

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
    return view('auth.register');
}]);


Route::get('inicio', [authController::class,'inicio'])->name('inicio');

Route::get('registroArticulos', [authController::class, 'registroArticulos'])->name('NArticulos');

Route::get('carritos_compras', [authController::class, 'carrito_compras'])->name('Carritoscompras');

Route::get('registroMascotas', [authController::class, 'registroMascotas'])->name('NMascotas');

Route::get('registroUsuarios', [authController::class, 'registroUsuarios'])->name('NUsuarios');

Route::get('Solicitar_mascota', [authController::class, 'solicitar_mascota'])->name('SolicitarMascota');

Route::get('Solicitar_articulo', [authController::class, 'solicitar_articulo'])->name('SolicitarArticulo');

Route::get('solicitarAdopcion', [authController::class, 'solicitarAdopcion'])->name('SolicitarAdopcion');

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
Route::get('estadisticas/mascotas', 'App\Http\Controllers\getController@estadisticas_mascota')->name('estMascotas');
Route::get('estadisticas/articulos', 'App\Http\Controllers\getController@estadisticas_articulo')->name('estArticulos');
Route::get('estadisticas/usuarios', 'App\Http\Controllers\getController@estadisticas_usuario')->name('estUsuarios');
/*FIN*/


/*RUTAS DE EDICION DE REGISTROS*/
Route::get('articulo/{id?}/edit','App\Http\Controllers\updateController@get_articulo' )->name('editAtriculo.get_articulo');
/*FIN*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('charts', 'HomeController@chartjs');

/*RUTAS PRA GENERAR PDF*/
Route::get('/imprimir/reporteMascotasPDF', 'App\Http\Controllers\PdfController@reporteMascotas')->name('reporteMascotas');
Route::get('/imprimir/reporteArticulosPDF', 'App\Http\Controllers\PdfController@reporteArticulos')->name('reporteArticulos');
Route::get('/imprimir/reporteUsuariosPDF', 'App\Http\Controllers\PdfController@reporteUsuarios')->name('reporteUsuarios');
/*FIN*/
