<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RequestControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAcceptRequest()
    {
        $request = new \http\Env\Request();
        $relation = new App\Model\Relation;
        $relation->accpet($request);
        $response = $relation->get('/request/all');
        $response->assertStatus(200);
    }

    public function testRejectRequest()
    {
        $request = new \http\Env\Request();
        $relation = new App\Model\Relation;
        $relation->reject($request);
        $response = $relation->get('/request/all');
        $response->assertStatus(200);
    }
}
