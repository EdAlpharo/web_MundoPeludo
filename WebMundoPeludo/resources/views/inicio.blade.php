@extends('base')

@section('contenido')

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


 

@stop
