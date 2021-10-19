@extends('base')

@section('contenido')

<div class="container-fluid" style="padding: 20px">

<form class="form-search content-search navbar-form" action="" method="post">
    <div class="input-group ">
        <input placeholder="Ingrese el nombre a buscar" class="form-control form-text btnbuscar" type="text" size="15"  />
        <span class="input-group-btn">
        <button type="button" class="btn btn-outline-success">Buscar</button>
        </span>
    </div>
</form>
<div class="container-fluid" style="padding: 20px">
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
      <td>X</td>
      <td>A</td>
    </tr>
    <tr>
      <td>003</td>
      <td>El José</td>
      <td>123a</td>
      <td>Venta</td>
      <td>X</td>
      <td>A</td>
    </tr>
  </tbody>
</table>
</div>

@stop
