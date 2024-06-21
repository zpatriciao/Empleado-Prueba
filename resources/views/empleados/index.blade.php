@extends('layouts.app')

@section('content')
    <h1>Lista de Empleados</h1>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Crear Empleado</a>
    @if ($empleados->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Cédula</th>
                    <th>Sexo</th>
                    <th>Teléfono</th>
                    <th>Cargo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->edad }}</td>
                        <td>{{ $empleado->cedula }}</td>
                        <td>{{ $empleado->sexo }}</td>
                        <td>{{ $empleado->telefono }}</td>
                        <td>{{ $empleado->cargo }}</td>
                        <td>
                            <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay empleados registrados.</p>
    @endif
@endsection

