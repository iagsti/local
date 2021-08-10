<?php

namespace Tests\Feature;

use App\Models\Bloco;
use Tests\TestCase;

class BlocoNewGetTest extends TestCase
{

    protected $response;

    protected function setUp(): void
    {
        parent::setUp();
        $this->response = $this->get(route('bloco.create'));
    }

    /**
     * Status code should be 200.
     *
     * @return void
     */
    public function test_example(): void
    {
        $this->response->assertStatus(200);
    }


    /**
     * Response should contain page title
     *
     * @return void
     */
    public function test_response_has_title(): void
    {
        $this->response->assertSee('Adicionar Novo Bloco');
    }

    /**
     * Response should contain nome field
     *
     * @return void
     */
    public function test_response_contain_fields(): void
    {
        $this->response->assertSee('nome');
    }
}


class BlocoNewPostTest extends TestCase
{

    protected $response;

    protected $data;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = Bloco::factory()->make()->toArray();
        $this->response = $this->followingRedirects()->post(route('bloco.store'), $this->data);
    }

    public function test_status_code()
    {
        $this->response->assertStatus(200);
    }
}
