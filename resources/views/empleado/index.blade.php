<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tabla Empleados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <a href="{{ url('empleado/create') }}"><button>Crear empleado</button></a>
            <h2>Lista de Empleados</h2>
            @if (Session::has('mensaje'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"></button>
                    <p>{{ Session::get('mensaje') }}</p>
                </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->apellido }}</td>
                            <td>{{ $empleado->correo }}</td>
                            <td>
                                <img alt="" class="img-thumbnail img-fluid"
                                    src="{{ asset('storage') . '/' . $empleado->foto }}" width="100px">
                            </td>
                            <td class="d-flex gap-2">
                                <a href="{{ url('empleado/' . $empleado->id . '/edit') }}">
                                    <button class="btn btn-info">Editar</button>
                                </a>
                                <form action="{{ url('empleado/' . $empleado->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" onclick="return confirm('Desea eliminar el empleado?')"
                                        type="submit" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>

</html>
