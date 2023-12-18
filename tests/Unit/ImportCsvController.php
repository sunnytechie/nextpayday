<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImportCsvController extends TestCase
{
    /**
     * A basic feature test example.
     */
    

    public function importCsvTest()
    {
        $response = $this->get('/import-csv-file');
        $response->assertStatus(200);
    }
}
