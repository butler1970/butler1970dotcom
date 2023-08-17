<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_ip_location_works(): void {
        $response = $this->post('/api/ip/location', ['ip' => '68.224.134.148']);

        $response->assertStatus(200);
    }
}
