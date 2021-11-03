
@extends('base')

@section('contenido')
    <link rel="stylesheet" href="css/articulos.css">

    <title>Registro de Artículos</title>
  </head>
  <body>

<div style="padding: 150px">
     <h1 class="display-4 text-center" style = "font-family:Calisto MT;"><FONT COLOR="WHITE"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                            Agregar artículo</FONT></h1>

    <div id="general" style="padding:.5cm">
       <br>

      <H3 align="center" style = "font-family:Calisto MT;"><FONT COLOR="WHITE">Formulario de artículos</FONT></H3>
      <center>
      <img src="img/logo2.png" width="60" height="60" /></center>

      <form class="contenedorform2 mt-4" action="datosArticulo" action="{{route('nuevoArticulo.registro_articulo')}}"  method="POST">

        @if (session()->has('mensaje'))
            <h5 style="color: blue">{{ session('mensaje') }}</h5>
        @endif

        <div class="form-group" style="padding: 0.5cm">

            @csrf
              <left>
           <label><FONT COLOR="WHITE"><b>Articulo: </FONT></label>
           <input id="txtArticulo" name="articulo" value="{{ old('articulo') }}" placeholder="Ingrese el nombre del artículo" style="WIDTH: auto;">
           <label style="color: red">{{ $errors -> first('articulo') }}</label>
           </left><br>
        </div>

        <div class="form-group" style="padding: 0.5cm">
              <left>
           <label><FONT COLOR="WHITE">Descripción:</FONT></label>
           <input id="txtDescripcion" name="descripcion" value="{{ old('descripcion') }}" placeholder="Ingrese la descripción del artículo" style="WIDTH: auto;">
              <label style="color: red">{{ $errors -> first('descripcion') }}</label>
        </left><br>
        </div>

        <div class="form-group" style="padding: 0.5cm">
              <left>
           <label><FONT COLOR="white">Precio: </FONT></label>
           <input id="txtPrecio" name="precio" value="{{ old('precio') }}" placeholder="Ingrese el precio" style="WIDTH: auto;">
              <label style="color: red">{{ $errors -> first('precio') }}</label>
              </left><br>
        </div>

        <div class="form-group" style="padding: 0.5cm">
              <left>
           <label><FONT COLOR="WHITE">Existencia:</FONT></label>
           <input id="txtExistencia" name="cantidad" value="{{ old('cantidad')}}" placeholder="Indique la cantidad disponible" style="WIDTH: auto;">
                <label style="color: red">{{ $errors -> first('cantidad') }}</label>
              </left>
        </div>

            <center><button class="btnAgregar" type="submit">Agregar registro</button></center><br>
          </form>
      </div>


</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
@stop
