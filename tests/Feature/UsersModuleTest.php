<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function Example()
    {
        $this->get('/')
        ->assertStatus(200);
    }
}
