<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListLocalTest extends TestCase
{

    private $response;

    /**
     * Test initialization
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->response = $this->get(route('local.index'));
    }

    /**
     * Status code should be 200.
     *
     * @return void
     */
    public function test_staus_code()
    {
        $this->response->assertStatus(200);
    }

    public function test_see_index_title(): void
    {
        $this->response->assertSee('Lista de locais');
    }
}
