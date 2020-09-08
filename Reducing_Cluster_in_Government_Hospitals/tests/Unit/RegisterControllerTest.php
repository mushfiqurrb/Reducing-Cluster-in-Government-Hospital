<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Jarif', 'name')
            ->type('jarif@gmail.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password')
            ->check('Patient')
            ->press('Register')
            ->seePageIs('/home');
    }
}
