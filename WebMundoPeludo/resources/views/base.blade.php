<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/base.css')?>" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



</head>
<body>

<nav class="navbar-nav navbar-expand-sm navbar-light bg-light navbar" id="topheader">
    <h1>Sistema administrativo</h1>
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <div class="container-fluid">
            <img src="{{ asset('img/logo.jpg')}}" class="logo" style="width: 125px; height: 125px; float:center; display:block;margin:0 auto 0 auto; border-radius:10%">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbar">
            <ul class="navbar-nav">
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('inicio')}}">INICIO</a>
                </div>
                <div class="dropdown btn">
                    <button class="dropbtn">ADMINISTRACIÓN</button>
                <div class="dropdown-content">
                    <a href="{{route('actMascota')}}">Mascotas</a>
                    <a href="{{route('actArticulo')}}">Artículos</a>
                    <a href="{{route('actUser')}}">Usuarios</a>
                </div>
                </div>
                <div class="dropdown btn">
                <button class="dropbtn">INVENTARIO</button>
                <div class="dropdown-content">
                    <a href="#">Mascotas</a>
                    <a href="#">Artículos</a>
                </div>
                </div>
                <div class="dropdown btn">
                <button class="dropbtn">ESTADISTICAS</button>
                <div class="dropdown-content">
                    <a href="{{route('estMascotas')}}">Mascotas</a>
                    <a href="{{route('estArticulos')}}">Artículos</a>
                    <a href="{{route('estUsuarios')}}">Usuarios</a>
                </div>
                </div>
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="">ADOPCIÓN</a>
                </div>
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('SolicitarArticulo')}}">COMPRAS</a>
                </div>
            </ul>
            <ul>
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="#">SALIR</a>
                </div>
            </ul>
    </div>
</nav>





@yield('contenido')





<footer class="text-center text-lg-start text-dark"style="background-color: #ECEFF1">
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: green"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Mantente conectado con nostros, siguenos en nuestras redes sociales:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a class="text-white me-4" href="">
        <img src="{{ asset('img/facebook.png')}}" class="img-responsive" style="filter: invert(1.0)">
        </a>
        <a  class="text-white me-4" href="">
        <img src="{{ asset('img/twitter.png')}}" class="img-responsive" style="filter: invert(1.0)">
        </a>
        <a class="text-white me-4" href="">
        <img src="{{ asset('img/youtube.png')}}" class="img-responsive" style="filter: invert(1.0)">
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Mundo Peludo</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              "Un refugio para mascotas"
            </p>
          </div>

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contactanos</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Calle de la montaña #825 Queretaro</p>
            <p><i class="fas fa-envelope mr-3"></i> mundo-peludo@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> 555 555 5555</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)">© 2021 Copyright:
      <a class="text-dark" >mundoPeludo</a>
    </div>
    <!-- Copyright -->
  </footer>



</body>
</html>
