<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Empleados;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpleadosControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_listar_empleados()
    {
        $empleados = Empleados::factory()->count(5)->create();

        $response = $this->get(route('empleados.index'));

        $response->assertStatus(200);
        foreach ($empleados as $empleado) {
            $response->assertSee($empleado->nombre);
        }
    }

    /** @test */
    public function puede_ver_formulario_de_creacion()
    {
        $response = $this->get(route('empleados.create'));

        $response->assertStatus(200);
    }

    /** @test */
    public function puede_crear_empleado()
    {
        $datos = [
            'nombre' => 'Carlos Ramirez',
            'edad' => 25,
            'cedula' => '987654321',
            'sexo' => 'M',
            'telefono' => '9876543210',
            'cargo' => 'Analista',
            'avatar' => 'avatar.jpg',
        ];

        $response = $this->post(route('empleados.store'), $datos);

        $response->assertStatus(302); // Redirección después de guardar
        $this->assertDatabaseHas('empleados', ['nombre' => 'Carlos Ramirez']);
    }

    /** @test */
    public function puede_editar_empleado()
    {
        $empleado = Empleados::factory()->create();

        $datosActualizados = [
            'nombre' => 'Ana Martinez',
            'edad' => 28,
            'cedula' => '111222333',
            'sexo' => 'F',
            'telefono' => '5556667777',
            'cargo' => 'Diseñadora',
            'avatar' => 'avatar2.jpg',
        ];

        $response = $this->put(route('empleados.update', $empleado->id), $datosActualizados);

        $response->assertStatus(302); // Redirección después de actualizar
        $this->assertDatabaseHas('empleados', ['nombre' => 'Ana Martinez']);
    }

    /** @test */
    public function puede_eliminar_empleado()
    {
        $empleado = Empleados::factory()->create();

        $response = $this->delete(route('empleados.destroy', $empleado->id));

        $response->assertStatus(302); // Redirección después de eliminar
        $this->assertModelMissing($empleado);
    }
}
