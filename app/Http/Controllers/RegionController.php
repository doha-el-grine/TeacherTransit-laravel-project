<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region; // Make sure to import the Region model

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::all();
        return view('regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $regions = Region::all(); // Assuming you're fetching all regions from the database
    return view('regions.create', compact('regions'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'region' => 'required', // Ensure 'name' is present in the request
        ]);
    
        // Create a new region instance and save it to the database
        Region::create([
            'region' => $request->region, // Set the 'name' attribute based on the input from the form
        ]);
    
        // Redirect the user to the index page
        return redirect()->route('villes.create');
    }
    

    
    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        return view('regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region)
    {
        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        $region->update($request->all());
        return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regions.index');
    }
}
