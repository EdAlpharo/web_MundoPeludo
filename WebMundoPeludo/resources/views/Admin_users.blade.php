@extends('base')

@section('contenido')
<link rel="stylesheet" href="<?php echo asset('css/Admin_user.css')?>" type="text/css">


<div class="container">
<h3 style="text-align: center; padding-top:25px">Administración de usuarios</h3>
<form class="form-search content-search navbar-form" action="" style="align: center">
    <div class="input-group" style="padding: 25px">
        <form class="d-flex">
        <input class="me-2" placeholder="Ingrese el usuario a buscar" size="25">
        <button class="btn btn-outline-success">Buscar</button>
      </form>
    </div>
</form>

<div class="container-fluid" style="padding: 25px">
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Departamento</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Actualizar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>001</td>
      <td>El JK</td>
      <td>123</td>
      <td>Venta</td>
      <td><span class="material-icons-outlined">
delete
</span>
</span>
</span></td>
      <td><span class="material-icons-outlined">
task_alt</td>
    </tr>
    <tr>
      <td>003</td>
      <td>El José</td>
      <td>123a</td>
      <td>Cliente</td>
      <td><span class="material-icons-outlined">
delete
</span>
</span>
</span></td>
      <td><span class="material-icons-outlined">
task_alt</td>
    </tr>
      <td>003</td>
      <td>El José</td>
      <td>123a</td>
      <td>Venta</td>
      <td><span class="material-icons-outlined">
delete
</span>
</span>
</span></td>
      <td><span class="material-icons-outlined">
task_alt</td>
    </tr>
  </tbody>
</table>
</div>

</div>
@stop
