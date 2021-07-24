<?php

namespace Tests\Feature;

use App\Models\Local;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LocalResourceTest extends TestCase
{

    use DatabaseMigrations;

    private $response;

    private $local;

    /**
     * Test initialization
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->local = Local::factory()->create();
        $this->response = $this->getJson('/api/locals');
    }

    /**
     * Status code should be 200.
     *
     * @return void
     */
    public function test_status_code()
    {
        $this->response->assertStatus(200);
    }

    /**
     * Api code should be equal expected
     *
     * @return void
     */
    public function test_api_response(): void
    {
        $expected = Local::first()->toArray();
        $this->response->assertJsonFragment($expected);
    }
}
