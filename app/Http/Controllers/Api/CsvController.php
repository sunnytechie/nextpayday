<?php

namespace App\Http\Controllers\Api;

use App\Models\Importcsv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CsvController extends Controller
{
    public function index()
    {
        $records = Importcsv::orderBy('id', 'DESC')->get();
        return response()->json($records);
    }
}
