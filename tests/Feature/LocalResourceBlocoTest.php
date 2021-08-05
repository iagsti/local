<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Local;



class LocalResourceBlocoTest extends TestCase
{

    use DatabaseMigrations;

    private $response;

    protected function setUp(): void
    {
        parent::setUp();
        Local::factory()->create();
        $this->response = $this->get('/api/locals/blocos');
    }

    public function test_status_code()
    {
        $this->response->assertStatus(200);
    }

    public function test_response_data()
    {
        $expected = Local::select('bloco')->distinct()->get()->toArray();
        $this->response->assertJsonFragment($expected);
    }
}
