@extends('layouts.app')

@section('content')
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $empleado->nombre }}">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{ $empleado->edad }}">
            @error('edad')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" id="cedula" class="form-control" value="{{ $empleado->cedula }}">
            @error('cedula')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" id="sexo" class="form-control" value="{{ $empleado->sexo }}">
            @error('sexo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $empleado->telefono }}">
            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" class="form-control" value="{{ $empleado->cargo }}">
            @error('cargo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avatar">Avatar:</label>
            <input type="text" name="avatar" id="avatar" class="form-control" value="{{ $empleado->avatar }}">
            @error('avatar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection

