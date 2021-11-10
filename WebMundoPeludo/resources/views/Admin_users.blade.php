@extends('base')

@section('contenido')
    <!-- https://material.io/resources/icons/?style=baseline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=outline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=round -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=sharp -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=twotone -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
      rel="stylesheet">

<link rel="stylesheet" href="<?php echo asset('css/Admin_user.css')?>" type="text/css">

<title>Mundo Peludo|Usuarios</title>

@include('sweetalert::alert')

<div class="container">
<h3 style="text-align: center; padding-top:25px">Administración de usuarios</h3>


<form class="form-search content-search navbar-form" action="datosUsuario" style="align: center">
    <div class="input-group" style="padding: 25px">
        <form class="d-flex">
        <input class="me-2" placeholder="Ingrese el usuario a buscar" size="25">
        <button class="btn btn-outline-success">Buscar</button>
      </form>

    </div>
    <div style="padding-left: 25px">
        <a class="btn btn-outline-success button" href="{{route('NUsuarios')}}">Nuevo Usuario</a>
    </div>
</form>



<div class="container-fluid" style="padding: 25px">
    <h4 style="text-align: center">Empleados</h4>
    <br>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>00{{$usuario->id}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->aPaterno}}</td>
            <td>{{$usuario->aMaterno}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->pass}}</td>
            <td><span class="material-icons-outlined">refresh</span></td>
            <td><span class="material-icons-outlined">delete</span></td>
        </tr>
       @endforeach

  </tbody>
</table>

</div>
<br>
<div class="container-fluid" style="padding: 25px">
    <h4 style="text-align: center">Usuarios - clientes</h4>
    <br>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">contraseña</th>
      <th scope="col">Fecha creación</th>
      <th scope="col">Fecha actualización</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($users as $user)
        <tr>
            <td>00{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><span class="material-icons-outlined">refresh</span></td>
            <td><span class="material-icons-outlined">delete</span></td>
        </tr>
       @endforeach

  </tbody>
</table>

</div>

</div>
@stop
