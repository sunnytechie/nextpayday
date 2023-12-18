<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminController extends TestCase
{
    /**
     * A basic feature test example.
     */
    //public function test_example(): void
    //{
    //    $response = $this->get('/');

    //    $response->assertStatus(200);
    //}

    public function adminTest()
    {
        $response = $this->get('/admin-dashboard');
        $response->assertStatus(200);
    }
}
