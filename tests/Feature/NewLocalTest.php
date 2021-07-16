<?php

namespace Tests\Feature;

use Tests\TestCase;


class NewLocalTest extends TestCase
{
    /**
     * Test status code. It shoud be 200.
     *
     * @return void
     */
    public function test_status_code()
    {
        $response = $this->get(route('local.create'));
        $response->assertStatus(200);
    }

    public function test_has_title()
    {
        $response = $this->get(route('local.create'));
        $response->assertSee('Adicionar Novo Local');
    }

    public function test_see_form_fields()
    {

        $response = $this->get(route('local.create'));

        $response->assertSee('bloco');
        $response->assertSee('nome');
        $response->assertSee('pavimento');
        $response->assertSee('departamento');
        $response->assertSee('descricao');
    }
}
