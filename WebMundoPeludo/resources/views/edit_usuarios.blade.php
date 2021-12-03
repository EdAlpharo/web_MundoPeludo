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
<h3 style="text-align: center; padding-top:25px">Edición de Articulos</h3>

        @foreach ($usuarios as $usuario)

       @endforeach

<!-- Modal -->
<div class="container">
    <h5 style="color: blue">id de la mascota: 00{{$usuarios->id}} </h5>

    <form class="contenedorform2 mt-4" action="{{route('usuarioUpdated',$usuarios->id)}}" method="POST" enctype="multipart/form-data">

        <div class="form-group" style="padding: auto">

            @csrf

           <label class="form-group p-2"><b>Nombre:</label>

           <input type="" class="" id="txtNombre" name="nombre" value="{{ $usuarios->nombre }}" style="WIDTH: auto;">
            <br>
        </div>

        <div class="form-group p-2" style="padding: auto">
           <label>Apellido Paterno:</label>
           <input type="" class="" id="txtaPaterno" name="aPaterno" value="{{ $usuarios->aPaterno }}" style="WIDTH: auto;align:self">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Apellido Materno:</label>
           <input type="" class="" id="txtaMaterno" name="aMaterno" value="{{ $usuarios->aMaterno }}"  style="WIDTH: auto;">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>email:</label>
           <input type="" class="" id="txtemail" name="email" value="{{$usuarios->email}}"  style="WIDTH: auto;">
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Contraseña:</label>
           <input type="" class="" id="txtPass" name="pass" value="{{$usuarios->pass}}"  style="WIDTH: auto;">
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Confirmar contraseña:</label>
           <input type="" class="" id="txtcpass" name="cpass" value="{{$usuarios->cpass}}"  style="WIDTH: auto;">
        </div>

        <div class="modal-footer">
        <a type="button" class="btn btn-secondary" href="{{route('actUser')}}">Cancelar</a>
        <button class="btnAgregar btn btn-primary" type="submit">Actualizar registro</button>
      </div>
          </form>
      </div>

</div>



@stop
