<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use DatabaseMigrations;

    /** @var App\Todo $todo */
    protected $todo;

    /**
     * Setup process
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->todo = factory('App\Todo')->create();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testShouldHaveAnAssociatedUser()
    {
        $this->assertNotInstanceOf('App\User', $this->todo->user);
    }
}
