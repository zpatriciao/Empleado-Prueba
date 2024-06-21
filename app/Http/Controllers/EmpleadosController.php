<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Muestra una lista de empleados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleados::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Muestra el formulario para crear un nuevo empleado.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Almacena un nuevo empleado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'integer|nullable',
            'cedula' => 'string|nullable',
            'sexo' => 'string|nullable',
            'telefono' => 'string|nullable',
            'cargo' => 'string|nullable',
            'avatar' => 'string|nullable',
        ]);

        Empleados::create($validated);
        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente');
    }

    /**
     * Muestra los detalles de un empleado específico.
     *
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Muestra el formulario para editar un empleado específico.
     *
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Actualiza los datos de un empleado específico en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleado)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'integer|nullable',
            'cedula' => 'string|nullable',
            'sexo' => 'string|nullable',
            'telefono' => 'string|nullable',
            'cargo' => 'string|nullable',
            'avatar' => 'string|nullable',
        ]);

        $empleado->update($validated);

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente');
    }

    /**
     * Elimina un empleado específico de la base de datos.
     *
     * @param  \App\Models\Empleados  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente');
    }
}
