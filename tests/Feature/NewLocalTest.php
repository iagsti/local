<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Local;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use League\CommonMark\Block\Element\ThematicBreak;

class NewLocalGetTest extends TestCase
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


class NewLocalPostTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Response Object
     */
    private $response;

    /**
     * Local data
     */
    private $data;

    /**
     * Test initialization
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->data = Local::factory()->make()->toArray();
        $this->response = $this->followingRedirects()->post(route('local.store'), $this->data);
    }

    /**
     * Test status code is 302
     *
     * @return void
     */
    public function test_status_code_is_200(): void
    {
        $this->response->assertStatus(200);
    }

    /**
     * Test if local object was persited
     *
     * @return void
     */
    public function test_local_was_created(): void
    {
        $actual = $this->data['nome'];
        $expected = Local::all()->first()->nome;
        $this->assertEquals($actual, $expected);
    }

    /**
     * Test if successful message was shown
     */
    public function test_see_successful_flash_message(): void
    {
        $this->response->assertSee('O local foi criado com sucesso!');
    }
}
