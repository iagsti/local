<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Local;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Test Local Model
 */
class LocalModelTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Local Object
     */
    protected $locals;

    /**
     * Initialization
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->locals = Local::factory()->create();
    }

    /**
     * Test model data persistence
     *
     * @return void
     */
    public function test_local_was_created(): void
    {
        $actual = Local::all()->first()->toArray();
        $expected = $this->locals->toArray();
        $this->assertEquals($actual, $expected);
    }
}
