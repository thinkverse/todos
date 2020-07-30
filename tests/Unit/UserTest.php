<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @var App\User $todo */
    protected $user;

    /**
     * Setup process
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory('App\User')->create();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testShouldHaveACollectionOfTodos()
    {
        $this->assertInstanceOf(Collection::class, $this->user->todos);
    }
}
