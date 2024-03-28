<?php

namespace App\Http\Controllers;
use App\Models\metier;

use Illuminate\Http\Request;

class metierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metiers = metier::all();
        return view('metiers.index', compact('metiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $metiers = metier::all();
        return view('metiers.create', compact('metiers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'metier' => 'required', // Ensure 'name' is present in the request
        ]);
    
        // Create a new region instance and save it to the database
        metier::create([
            'metier' => $request->metier, // Set the 'name' attribute based on the input from the form
        ]);
    
        // Redirect the user to the index page
        return redirect()->route('formateurs.create');
    }
    


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
