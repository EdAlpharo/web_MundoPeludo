@extends('base')

@section('contenido')


<link rel="stylesheet" href="css/usuarios.css">

    <title>Registro de usuarios</title>
  </head>
  <body>
    <br>
    <h1 class="display-4 text-center" style = "font-family:Calisto MT;">Registro de usuario</h1>

    <div id="general">
       <br>
      <H3 align="center" style = "font-family:Calisto MT;"><FONT COLOR="white">USUARIO</FONT></H3>
      <center>
      <img src="img/logo3.png" width="60" height="60" /></center>



      <form class="contenedorform2 mt-4" action="{{route('nuevoUsuario.registro_usuario')}}" method="POST">



        <div class="form-group" style="padding: 15px">

             @csrf

              <left>
           <label><FONT COLOR="white">Nombre:</FONT>  </label>
           <input type="" class="" id="txtNombre" name="nombre" placeholder="Ingrese el nombre" style="WIDTH: auto;color:black;">
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Apellido paterno: </FONT>  </label>
           <input type="" class="" id="txtAPaterno" name="aPaterno" placeholder="Ingrese apellido paterno" style="WIDTH: auto;color:black;">
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Apellido materno: </FONT>  </label>
           <input type="" class="" id="txtAMaterno" name="aMaterno" placeholder="Ingrese apellido materno" style="WIDTH: auto;color:black;">
              </left>
        </div>

        <div class="form-group"style="padding: 15px">
              <left>
           <label><FONT COLOR="white" >Email:</FONT>  </label>
           <input type="" class="" id="txtEmail" name="email" placeholder="Ingrese el email" style="WIDTH: auto;color:black;">
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Contraseña: </FONT>  </label>
           <input type="" class="" id="txtPass" name="pass" placeholder="Ingrese una contraseña" style="WIDTH:auto;color:black;">
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Confirmación de contraseña: </FONT>  </label>
           <input type="" class="" id="txtConfimacionPass" name="cpass"  placeholder="Confirme la contraseña" style="WIDTH:auto;color:black;">
              </left>
        </div>
            <center><button class="btnAgregar" type="submit"><FONT COLOR="white">Agregar registro</font></button></center>
          </form>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

@stop
