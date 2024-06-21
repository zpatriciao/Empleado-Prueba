@extends('layouts.app')

@section('content')
    <h1>Detalle de Empleado</h1>
    <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
    <p><strong>Edad:</strong> {{ $empleado->edad }}</p>
    <p><strong>Cédula:</strong> {{ $empleado->cedula }}</p>
    <p><strong>Sexo:</strong> {{ $empleado->sexo }}</p>
    <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>
    <p><strong>Cargo:</strong> {{ $empleado->cargo }}</p>
    <p><strong>Avatar:</strong> {{ $empleado->avatar }}</p>
    <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver</a>
@endsection
