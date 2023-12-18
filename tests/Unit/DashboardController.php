<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardController extends TestCase
{
    /**
     * A basic feature test example.
     */
    

    public function dashboardTest()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(200);
    }

}
