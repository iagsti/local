<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewLocalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_status_code_is_200()
    {
        $response = $this->get(route('new-local'));

        $response->assertStatus(200);
    }
}
