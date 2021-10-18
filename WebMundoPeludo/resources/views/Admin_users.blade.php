@extends('base')

@section('contenido')

<div class="container-fluid" style="padding: 20px">

    <table class="table table-success table-striped">
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
      <th scope="row">1</th>
      <td>001</td>
      <td>El JK</td>
      <td>123</td>
      <td>X</td>
      <td>A</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>001</td>
      <td>El José</td>
      <td>123a</td>
      <td>X</td>
      <td>A</td>
    </tr>
    <tr>
  </tbody>
</table>
</div>

@stop
