<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReporteUsuarios</title>

    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
<h2 style="text-align: center">Reporte de Usuarios</h2>
<br><br>
<h4>Empleados</h4>
<table>
    <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">correo</th>
    </thead>
    <br><br><br>
    <tbody>
        <tr>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->aPaterno}}</td>
                    <td>{{$usuario->aMaterno}}</td>
                    <td>{{$usuario->email}}</td>

                </tr>
            @endforeach
        </tr>
    </tbody>
</table>
<h4>Clientes</h4>
<table>
    <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Sexo</th>
    </thead>
    <br><br><br>
    <tbody>
        <tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->sexo}}</td>
                </tr>
            @endforeach
        </tr>
    </tbody>
<h5>generado el {{ date('Y-m-d H:i:s') }} por {{ auth()->user()->name }}</h5>
</body>
</html>
