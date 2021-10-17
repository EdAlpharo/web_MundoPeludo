<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
</head>

<body>
<h1 class="display-3  text-center" style="color:#BD9B37"; >Inicio de sesion</h1>

<div class="container">

  <form  class="contenedorform mt-5">

        <div class="form-group">

            <label style="color:#DEC57B">Usuario:</label>
           <input type="text" name="txtem" class="form-control">

        </div>
          <div class="form-group">

            <label style="color:#DEC57B">Contraseña:</label>
            <input type="password" name="txtcont" class="form-control">

          </div>


    <button type="submit" name="btnadm" class="btn btn-lg btn-block" style=background-color:#C7BE9E >Entrar</button>


</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
