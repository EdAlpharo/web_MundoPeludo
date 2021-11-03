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

        @foreach ($articulos as $articulo)

       @endforeach

<!-- Modal -->
<div class="container">
    <h5 style="color: blue">id del articulo: 00{{$articulos->id}} </h5>

    <form class="contenedorform2 mt-4" action="" method="POST">

        <div class="form-group" style="padding: auto">

            @csrf

           <label class="form-group p-2"><b>Articulo:</label>
           <input type="" class="" id="txtArticulo" name="articulo" value="{!! $articulos->articulo !!}" style="WIDTH: auto;">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Descripción:</label>
           <input type="" class="" id="txtDescripcion" name="descripcion" value="{!! $articulos->descripcion !!}" style="WIDTH: auto;align:self">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Precio:</label>
           <input type="" class="" id="txtPrecio" name="precio" value="{!! $articulos->precio !!}"  style="WIDTH: auto;">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Existencia:</label>
           <input type="" class="" id="txtExistencia" name="cantidad" value="{!! $articulos->cantidad !!}"  style="WIDTH: auto;">
        </div>
          </form>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" href="{{route('actArticulo')}}">Cancelar</a>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>

</div>


@stop
