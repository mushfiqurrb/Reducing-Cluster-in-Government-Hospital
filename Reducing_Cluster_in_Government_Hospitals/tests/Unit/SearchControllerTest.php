<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetHospital()
    {
        $response = $this->get('/hospitals');
        $response->assertStatus(200);
    }

    public function testGetHospitalByID()
    {
        $response = $this->get('/hospitals/1');
        $response->assertStatus(200);
    }
    public function testGetHospitalBranch()
    {
        $response = $this->get('/hospitals/1/1');
        $response->assertStatus(200);
    }
}
