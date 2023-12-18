<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobController extends TestCase
{
    /**
     * A basic feature test example.
     */
    

    public function jobTest()
    {
        $response = $this->get('/jobs');
        $response->assertStatus(200);
    }
}
