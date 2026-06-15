<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthApiTest extends TestCase
{
    public function test_health_endpoint_returns_success(): void
    {
        $response = $this->getJson('/api/health');

        $response
            ->assertStatus(200)
            ->assertJson([
                'success' => true
            ]);
    }
}
