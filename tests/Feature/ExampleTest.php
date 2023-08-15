<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/info');

        $response->assertStatus(200);
    }

    public function test_ip_location_works(): void {
        $response = $this->post('/api/ip/location', ['ip' => '68.224.134.148']);

        $response->assertStatus(200);
    }
}
