<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Region;

class villeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes = Ville::all();
        return view('villes.index', compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regions = Region::all();
        return view('villes.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
             'ville_original' => 'required|string',
             'ville_migration' => 'required|string',
             'region_id' => 'required|exists:regions,id',
         ]);
         $region = Region::findOrFail($request->region_id)->region;
     
         Ville::create([
             'ville_original' => $request->ville_original,
             'ville_migration' => $request->ville_migration,
             'region_id' => $request->region_id,
         ]);
     
         return redirect()->route('établissements.create');
     }
     
    
    /**
     * Display the specified resource.
     */
    public function show(Ville $ville)
    {
        return view('villes.show', compact('ville'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville)
    {
        return view('villes.edit', compact('ville'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
        $request->validate([
            'ville' => 'required|string',
            'region_id' => 'required|exists:regions,id',
        ]);

        $ville->update($request->all());

        return redirect()->route('villes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();

        return redirect()->route('villes.index');
    }
}
