<?php


namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Bloco;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Test Bloco Model
 */
class BlocoModelTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Bloco Object
     */
    protected $Blocos;

    /**
     * Initialization
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->Blocos = Bloco::factory()->create();
    }

    /**
     * Test model data persistence
     *
     * @return void
     */
    public function test_Bloco_was_created(): void
    {
        $actual = Bloco::all()->first()->toArray();
        $expected = $this->Blocos->toArray();
        $this->assertEquals($actual, $expected);
    }
}
