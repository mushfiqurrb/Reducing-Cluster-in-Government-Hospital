<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Http\Request;
use App\Model\Relation;
use App\Http\Controllers\Appoint\AppointController;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AppointControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRequestAppointment()
    {
        $request = new \http\Env\Request();
        $relation = new App\Model\Relation;
        $relation->assertTrue(requestAppoint($request));
    }
}
