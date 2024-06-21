<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Empleados;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpleadosTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_crear_empleado()
    {
        $empleado = Empleados::factory()->create([
            'nombre' => 'Juan Perez',
            'edad' => 30,
            'cedula' => '123456789',
            'sexo' => 'M',
            'telefono' => '1234567890',
            'cargo' => 'Desarrollador',
            'avatar' => 'avatar.jpg',
        ]);

        $this->assertDatabaseHas('empleados', ['nombre' => 'Juan Perez']);
    }

    /** @test */
    public function puede_actualizar_empleado()
    {
        $empleado = Empleados::factory()->create();

        $empleado->update(['nombre' => 'María Lopez']);

        $this->assertDatabaseHas('empleados', ['nombre' => 'María Lopez']);
    }

    /** @test */
    public function puede_eliminar_empleado()
    {
        $empleado = Empleados::factory()->create();

        $empleado->delete();

        $this->assertModelMissing($empleado);
    }
}
