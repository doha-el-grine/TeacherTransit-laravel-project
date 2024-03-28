<?php

namespace App\Http\Controllers;

use App\Models\établissement;
use App\Models\Ville;
use Illuminate\Http\Request;

class établissementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $établissements = établissement::all();
        return view('établissements.index', compact('établissements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('établissements.create', compact('villes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'établissement' => 'required|string',
            'code' => 'required|string',
            'adresse' => 'required|string',
            'phone_number' => 'required|string',
            'fax_number' => 'required|string',
            'ville_id' => 'required|exists:villes,id',
        ]);
        $ville = Ville::findOrFail($request->ville_id)->ville_original;

        établissement::create([
            'établissement' => $request->établissement,
            'code' =>$request->code,
            'adresse' => $request->adresse,
            'phone_number' =>$request->phone_number,
            'fax_number' => $request->fax_number,
            'ville_id' => $request->ville_id,
        ]);

        return redirect()->route('metiers.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(établissement $établissement)
    {
        return view('établissements.show', compact('établissements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(établissement $etablissement)
    {
        $villes = Ville::all();
        return view('établissements.edit', compact('établissements', 'villes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, établissement $établissement)
    {
        $request->validate([
            'établissement' => 'required|string',
            'code' => 'required|string',
            'adresse' => 'required|string',
            'phone_number' => 'required|string',
            'fax_number' => 'required|string',
            'ville_id' => 'required|exists:villes,id',
        ]);

        $établissement->update($request->all());

        return redirect()->route('établissements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(établissement $établissement)
    {
        $établissement->delete();

        return redirect()->route('établissements.index');
    }
}
