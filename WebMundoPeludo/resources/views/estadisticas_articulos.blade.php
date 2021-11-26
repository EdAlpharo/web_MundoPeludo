@extends('base')

@section('contenido')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>



<div class="container" style="padding: 20px">
    <p>Estadisticas de Articulos</p>
</div>
<div class="container mb-4 d-flex justify-content-end">
    <a class="btn btn-primary" href="{{route('reporteArticulos')}}">Generar Reporte PDF</a>
</div>

<div class="container">
    <div class="row col-6">
    <canvas id="articulosTotales"></canvas>
    </div>
</div>

<script>
const ctx = document.getElementById('articulosTotales').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($total_articulos as $articulo) {
            echo "'".$articulo->articulo."',";
        } ?>],
        datasets: [{
            label: 'Disponibles',
            data: [<?php foreach ($total_articulos as $articulo) {
                echo $articulo->cantidad.",";
            } ?>],

            backgroundColor: [
                'rgba(255, 72, 190, 0.5)',
                'rgba(54, 162, 208, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1

        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



</script>

@stop
