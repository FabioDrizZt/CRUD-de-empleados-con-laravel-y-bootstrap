@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>
                Edición de empleado
            </h1>
            <form action="{{ url('empleado/' . $empleado->id) }}" enctype="multipart/form-data" method="POST">
                {{ method_field('PATCH') }}
                @include('empleado.form', ['accion' => 'Editar'])
            </form>
        </div>
    </div>
@endsection
