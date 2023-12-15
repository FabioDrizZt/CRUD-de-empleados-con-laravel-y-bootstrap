@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>
                Creación de empleado
            </h1>
            <form action="{{ route('empleado.store') }}" enctype="multipart/form-data" method="POST">
                @include('empleado.form', ['accion' => 'Crear'])
            </form>
        </div>
    </div>
@endsection
