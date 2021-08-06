<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Local;



class LocalResourceBlocoTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Setup tests
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        Local::factory()->create();
    }

    /**
     * Status code should be 200
     *
     * @return void
     */
    public function test_status_code(): void
    {
        $response = $this->get('/api/locals/bloco');
        $response->assertStatus(200);
    }

    /**
     * It should return a list of blocos
     *
     * @return void
     */
    public function test_response_for_bloco(): void
    {
        $expected = Local::select('bloco')->distinct()->get()->toArray();
        $response = $this->get('/api/locals/bloco');
        $response->assertJsonFragment($expected);
    }

    /**
     * It should return a list of pavimento
     *
     * @return void
     */
    public function test_response_for_pavimento(): void
    {
        $expected = Local::select('pavimento')->distinct()->get()->toArray();
        $response = $this->get('/api/locals/pavimento');
        $response->assertJsonFragment($expected);
    }

    /**
     * It should return a list of nome
     *
     * @return void
     */
    public function test_response_for_nome(): void
    {
        $expected = Local::select('nome')->distinct()->get()->toArray();
        $response = $this->get('/api/locals/nome');
        $response->assertJsonFragment($expected);
    }
}
