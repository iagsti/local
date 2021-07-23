<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{

    private $response;


    protected function setUp(): void
    {
        parent::setUp();
        $this->response = $this->get(route('local.home'));
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
     * View should be local.home
     *
     * @return void
     */
    public function test_view_is_local_home(): void
    {
        $this->response->assertViewIs('local.home');
    }
}
