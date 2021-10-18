
@extends('base')

@section('contenido')

 <link rel="stylesheet" href="css/mascotas.css">

    <title>Registro de Mascotas</title>
  </head>
  <body>
    <div class="container-fluid" style="padding: 50px">

        <h1 class="display-4 text-center" style = "font-family:Calisto MT;"><FONT COLOR="Black">Agregar mascota</FONT></h1>

    <div id="general" style="padding: 25px">
       <br>
      <H3 align="center"  style = "font-family:Calisto MT;"><FONT COLOR="black">Formulario de mascotas</FONT></H3>
      <center>
      <img src="img/logo1.png" width="60" height="60" /></center>

      <form class="contenedorform2 mt-4">
        <div class="form-group" style="padding: 5px">
              <left>
           <label><FONT COLOR="white">Especie: </FONT>  </label>
           <input type="" class="" id="txtEspecie" name="txtEspecie" placeholder="Ingrese la especie del animal" style="WIDTH: auto;">
              </ñ>
        </div>

        <div class="form-group" style="padding: 5px">
              <left>
           <label><FONT COLOR="white">Raza: </FONT>  </label>
           <input type="" class="" id="txtRaza" name="txtRaza" placeholder="Ingrese la raza del animal" style="WIDTH: auto;">
              </left>
        </div>

        <div class="form-group" style="padding: 5px">
              <left>
           <label><FONT COLOR="white">Edad: </FONT>  </label>
           <input type="" class="" id="txtEdad" name="txtEdad" placeholder="Ingrese la edad del animal" style="WIDTH: auto;">
              </left>
        </div>

        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Condición de salud: </FONT>  </label>
           <input type="" class="" id="txtCondicion" name="txtCondicion" placeholder="Ingrese si existe alguna condición del animal" style="WIDTH: auto;">
              </left>
        </div>

        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Vacunado: </FONT>  </label>
           <input type="" class="" id="txtVacunado" name="txtVacunado" placeholder="Indique si ha recibido las vacunas" style="WIDTH: auto;">
              </left>
        </div>

        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Sexo: </FONT>  </label>
           <input type="" class="" id="txtSexo" name="txtSexo"  placeholder="Indique si es hembra o macho" style="WIDTH: auto;">
              </left>
        </div>
            <center><button class="btnAgregar">Agregar registro</button></center>
          </form>
      </div>


    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
@stop
