<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserLogIn()
    {
        $this->visit('/login')
            ->type('tanzim.jarif63@gmail.com', 'email')
            ->type('123456', 'password')
            ->press('Log In')
            ->seePageIs('/home');
    }
}
