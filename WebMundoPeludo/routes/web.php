<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::get('inicio', ['as'=> 'inicio', function () {
    return view('inicio');
}]);

Route::get('Admin_users', ['as'=> 'AdminUsers', function () {
    return view('Admin_users');
}]);

Route::get('registroArticulos', ['as'=> 'NArticulos', function () {
    return view('registroArticulos');
}]);

Route::get('carritos_compras', ['as'=> 'NCcompras', function () {
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

Route::get('Admin_mascotas', ['as'=> 'AdminMascotas', function () {
    return view('Admin_mascotas');
}]);

Route::get('Admin_articulos', ['as'=> 'AdminArticulos', function () {
    return view('Admin_articulos');
}]);
