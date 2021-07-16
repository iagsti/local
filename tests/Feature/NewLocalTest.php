<?php

namespace Tests\Feature;

use Tests\TestCase;


class NewLocalTest extends TestCase
{

    private $response;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->response = $this->get(route('local.create'));
    }

    /**
     * Test status code. It shoud be 200.
     *
     * @return void
     */
    public function test_status_code(): void
    {
        $this->response->assertStatus(200);
    }

    /**
     * Test if the title is present.
     *
     * @return void
     */
    public function test_has_title(): void
    {
        $this->response->assertSee('Adicionar Novo Local');
    }

    /**
     * Test if the form fields is present.
     *
     * @return void
     */
    public function test_see_form_fields(): void
    {
        $this->response->assertSee('bloco');
        $this->response->assertSee('nome');
        $this->response->assertSee('pavimento');
        $this->response->assertSee('departamento');
        $this->response->assertSee('descricao');
    }
}
