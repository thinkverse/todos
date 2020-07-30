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
     * A Todo should Belong to A User
     *
     * @return void
     */
    public function testShouldHaveAnAssociatedUser()
    {
        $this->assertInstanceOf('App\User', $this->todo->user);
    }

    /**
     * A User can Create a Todo
     *
     * @return void
     */
    public function testATodoCanBeCreatedByAUser()
    {
        $todo = factory('App\Todo')->make();
        $user = \App\User::find($todo->user->id);

        $user->todos()->create($todo->toArray());

        $this->assertCount(1, $user->todos);
    }
}
