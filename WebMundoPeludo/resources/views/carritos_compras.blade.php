@extends('base')

@section('contenido')
<h3 style="text-align: center; padding-top:25px">Carrito de compras</h3>

<div class="container-fluid" style="padding: 25px">
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Articulo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0001</td>
      <td>Correa 3.2m</td>
      <td>correa para perro pequeño</td>
      <td>$180.00</td>
      <td>1</td>

    <tr>
      <td>0002</td>
      <td>Wiskas</td>
      <td>Comida para gato</td>
      <td>$45.00</td>
      <td>2</td>
    </tr>
  </tbody>
</table>
<input class="me-2" placeholder="Total:" size="25">
<button class="btn btn-outline-success">Pagar</button>
</div>
</div>
@stop