<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_health_check_returns_ok_status_and_valid_json(): void
    {
        $response = $this->get('/api/v1/health');

        $response->assertStatus(200)->assertJson([
            'status' => 'ok',
            'service' => 'anota-ai-api',
            'version' => 'v1',
            'environment' => 'testing',
        ])
            ->assertJsonStructure([
                'status', 'service', 'version', 'environment', 'timestamp',
            ]);
    }
}
