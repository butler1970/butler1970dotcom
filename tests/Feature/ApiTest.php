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

    public function test_feed_hackernoon(): void {
        $response = $this->get('/api/feed/hackernoon');

        $response->assertStatus(200);
    }

    public function test_proxy_zenquote_today(): void {
        $response = $this->get('/api/proxy/zenquote/today');

        $response->assertStatus(200);
    }

    public function test_proxy_zenquote_random(): void {
        $response = $this->get('/api/proxy/zenquote/random');

        $response->assertStatus(200);
    }
}
