<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Local;
use League\CommonMark\Block\Element\ThematicBreak;

class EditLocalTest extends TestCase
{
    use DatabaseMigrations;

    private $response;

    private $data;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = Local::factory()->create();
        $this->response = $this->get(route('local.edit', ['local' => $this->data->id]));
    }

    /**
     * Test if stauts code is 200
     */
    public function test_status_code(): void
    {
        $this->response->assertStatus(200);
    }

    /**
     * Test if local data was rendered
     */
    public function test_local_data_was_rendered(): void
    {
        $this->response->assertSee($this->data->nome);
    }

    /**
     * Test for the correct form action route
     */
    public function test_see_form_action_link(): void
    {
        $expected = route('local.update', ['local' => $this->data->id]);
        $this->response->assertSee($expected);
    }
}
