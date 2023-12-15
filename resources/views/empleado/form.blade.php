@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf
<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input class="form-control" id="nombre" name="nombre" required type="text" value="{{ $empleado->nombre ?? old('nombre') }}">
</div>
<div class="form-group">
    <label for="apellido">Apellido:</label>
    <input class="form-control" id="apellido" name="apellido" required type="text" value="{{ $empleado->apellido ?? old('apellido') }}">
</div>
<div class="form-group">
    <label for="correo">Correo:</label>
    <input class="form-control" id="correo" name="correo" required type="email" value="{{ $empleado->correo ?? old('correo') }}">
</div>
<div class="form-group">
    <label for="foto">Foto:
        @if (isset($empleado->foto))
         <img alt="" class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->foto }}" width="100px">
        @endif
    </label>
    <br>
    <input class="form-control-file" id="foto" name="foto" type="file">
</div>
<a class="btn btn-primary" href="{{url('empleado')}}">Regresar</a>
<button class="btn btn-success" type="submit">{{ $accion }} empleado</button>
