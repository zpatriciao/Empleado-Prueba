<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    // public function test_that_true_is_true(): void
    // {
    //     $this->assertTrue(true);
    // }

    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(302); // Cambia el 200 a 302 si esperas una redirección
    }
}
