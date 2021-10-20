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


<div class="container">
<h3 style="text-align: center; padding-top:25px">Administración de mascotas</h3>
<form class="form-search content-search navbar-form" action="" style="align: center">
    <div class="input-group" style="padding: 25px">
        <form class="d-flex">
        <input class="me-2" placeholder="Ingrese el tipo de mascota a buscar" size="25">
        <button class="btn btn-outline-success">Buscar</button>
      </form>

    </div>
    <div style="padding-left: 25px">
        <a class="btn btn-outline-success button" href="{{route('NMascotas')}}">Nueva mascota</a>
    </div>

</form>


<div class="container-fluid" style="padding: 25px">
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Especie</th>
      <th scope="col">Raza</th>
      <th scope="col">Edad</th>
      <th scope="col">Condicion de salud</th>
      <th scope="col">Vacunado</th>
      <th scope="col">Sexo</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Actualizar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>001</td>
      <td>Perro</td>
      <td>Criolla</td>
      <td>1</td>
      <td>Sano</td>
      <td>si</td>
      <td>Macho</td>
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
      <td>Gato</td>
      <td>Siames</td>
      <td>.5</td>
      <td>Sano</td>
      <td>si</td>
      <td>Hembra</td>
      <td><span class="material-icons-outlined">
delete
</span>
</span>
</span></td>
      <td><span class="material-icons-outlined">
task_alt</td>

    </tr>
      <td>004</td>
      <td>Gato</td>
      <td>Ejipcio</td>
      <td>.9</td>
      <td>Sano</td>
      <td>si</td>
      <td>Macho</td>
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
