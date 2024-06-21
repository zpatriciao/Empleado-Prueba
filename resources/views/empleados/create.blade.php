@extends('layouts.app')

@section('content')
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{ old('edad') }}">
            @error('edad')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" id="cedula" class="form-control" value="{{ old('cedula') }}">
            @error('cedula')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" id="sexo" class="form-control" value="{{ old('sexo') }}">
            @error('sexo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}">
            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" class="form-control" value="{{ old('cargo') }}">
            @error('cargo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avatar">Avatar:</label>
            <input type="text" name="avatar" id="avatar" class="form-control" value="{{ old('avatar') }}">
            @error('avatar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection

