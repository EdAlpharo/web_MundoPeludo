@extends('base')

@section('contenido')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<title>Mundo Peludo|Inicio</title>
<br>

<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">

<div class="container">

  <ul class="slider">
    <li id="slide1">
      <img src="{{ asset('img/carrusel1.jpg')}}"/>
    </li>
    <li id="slide2">
      <img src="{{ asset('img/carrusel2.jpg')}}"/>
    </li>
    <li id="slide3">
    <img src="{{ asset('img/carrusel3.jpg')}}"/>
    </li>
  </ul>

  <ul class="menu">
    <li>
      <a href="#slide1">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
     <li>
      <a href="#slide3">3</a>
    </li>
  </ul>

</div>
<br>
<br>




<FONT FACE="Rockwell"><h1><center>Bienvenidos</center></h1></FONT>

<p class="box1">Aqui podras encontrar cualquier tipo de mascota que quieras adoptar</p>
<p class="box2">Tambien podras encontrar cualquier tipo de articulos para tus mascotas</p>
<p class="box3">Proyecto de la Universidad</p>



@stop
