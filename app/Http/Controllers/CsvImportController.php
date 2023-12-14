<?php

namespace App\Http\Controllers;

use App\Models\Csv;
use Illuminate\Http\Request;
use League\Csv\Reader;

class CsvImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $csvFile = $request->file('csv_file');
        $csv = Reader::createFromPath($csvFile->getPathname(), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $row) {
            $existingRecord = Csv::where('email', $row['email'])->first();
            if (!$existingRecord) {
                Csv::create([
                    //'id' => $row['id'], // if you want to import id as well
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'phone' => $row['phone'],
                    'address' => $row['address'],
                ]);
            }
        }

        // Redirect to the homepage
        return redirect()->back()->with(['success' => 'CSV file imported successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
