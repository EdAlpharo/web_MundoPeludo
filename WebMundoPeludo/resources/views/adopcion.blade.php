@extends('base')
@section('contenido')

<div class="container">
<div class="container" style="padding: 20px">
    <p style="text-align: center; font-size:32px">Adopciones</p>
</div>
    @foreach ($mascotas->chunk(5) as $chunk)
        <div class="row">
            @foreach ($chunk as $mascota)
                <div class="card" style="width: 18rem;">
            <img src="/img/mascotas/{{$mascota->imagen}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Especie: {{$mascota->especie}}</h5>
                <p class="card-text">Condición de salud: {{$mascota->condicion_salud}}</p>
                <p class="card-text"> vacunado: {{$mascota->vacunado}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Raza: {{$mascota->raza}}</li>
                <li class="list-group-item">edad: {{$mascota->edad}} meses</li>
                <li class="list-group-item">{{$mascota->sexo}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Adoptar</a>
            </div>
        </div>
    @endforeach
    </div>

    @endforeach

</div>


@stop
