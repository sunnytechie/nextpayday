<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiRecordsController extends TestCase
{
    public function apiRecordsTest()
    {
        $response = $this->get('/api-records');
        $response->assertStatus(200);
    }
}
