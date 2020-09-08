<?php

namespace Tests\Unit;

use Tests\TestCase;
use \App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testIsHospital()
    {
        $user = new \App\User;
        $this->assertFalse($user->isHospital());
    }

    public function testIsPatient()
    {
        $user = new \App\User;
        $this->assertTrue($user->isPatient());
    }

    public function testIsDoctor()
    {
        $user = new \App\User;
        $this->assertFalse($user->isDoctor());
    }
}
