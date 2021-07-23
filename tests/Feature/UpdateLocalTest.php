<?php

namespace Tests\Feature;

use App\Models\Local;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UpdateLocalTest extends TestCase
{

    use DatabaseMigrations;

    private $response;

    private $data;

    private $local;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = Local::factory()->create();
        $this->local = Local::factory()->make()->toArray();
        $this->local['nome'] = '200';
        $uri = route('local.update', ['local' => $this->data->id]);
        $this->response = $this->put($uri, $this->local);
    }

    /**
     * Status code should be 200
     */
    public function test_status_code(): void
    {
        $this->response->assertStatus(302);
    }

    /**
     * Local data should be updated
     */
    public function test_local_was_update(): void
    {
        $actual = Local::find(1)->nome;
        $expected = $this->local['nome'];
        $this->assertEquals($actual, $expected);
    }
}
