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

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('Admin_users', ['as'=> 'AdminUsers', function () {
    return view('Admin_users');
}]);

Route::get('registroArticulos', ['as'=> 'NArticulos', function () {
    return view('registroArticulos');
}]);

Route::get('registroMascotas', ['as'=> 'NMascotas', function () {
    return view('registroMascotas');
}]);

Route::get('registroUsuarios', ['as'=> 'NUsuarios', function () {
    return view('registroUsuarios');
}]);
