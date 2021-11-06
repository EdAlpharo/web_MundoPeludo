@extends('base')

@section('contenido')


<link rel="stylesheet" href="css/usuarios.css">

    <title>Mundo Peludo|Registro de usuarios</title>
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
           <input id="txtNombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre" style="WIDTH: auto;color:black;">
           <label style="color: red">{{ $errors -> first('nombre') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Apellido paterno: </FONT>  </label>
           <input type="" class="" id="txtAPaterno" name="aPaterno" value="{{ old('aPaterno') }}"  placeholder="Ingrese apellido paterno" style="WIDTH: auto;color:black;">
              <label style="color: red">{{ $errors -> first('aPaterno') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Apellido materno: </FONT>  </label>
           <input type="" class="" id="txtAMaterno" name="aMaterno" value="{{ old('aMaterno') }}"  placeholder="Ingrese apellido materno" style="WIDTH: auto;color:black;">
                <label style="color: red">{{ $errors -> first('aMaterno') }}</label>
              </left>
        </div>

        <div class="form-group"style="padding: 15px">
              <left>
           <label><FONT COLOR="white" >Email:</FONT>  </label>
           <input type="" class="" id="txtEmail" name="email"  value="{{ old('email') }}"  placeholder="Ingrese el email" style="WIDTH: auto;color:black;">
                <label style="color: red">{{ $errors -> first('email') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Contraseña: </FONT>  </label>
           <input type="password" class="" id="txtPass" name="pass" value="{{ old('pass') }}"  placeholder="Ingrese una contraseña" style="WIDTH:auto;color:black;">
                <label style="color: red">{{ $errors -> first('pass') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 15px">
              <left>
           <label><FONT COLOR="white">Confirmación de contraseña: </FONT>  </label>
           <input type="" class="" id="txtConfimacionPass" name="cpass"  value="{{ old('contraseña') }}"  placeholder="Confirme la contraseña" style="WIDTH:auto;color:black;">
                <label style="color: red">{{ $errors -> first('cpass') }}</label>
              </left>
        </div>
            <center><button class="btnAgregar" type="submit"><FONT COLOR="white">Agregar registro</font></button></center>
          </form>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

@stop
