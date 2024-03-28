<?php

namespace App\Http\Controllers;
use App\Models\formateur;
use App\Models\metier;

use App\Models\établissement;

use Illuminate\Http\Request;

class formateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formateurs = formateur::all();
        return view('formateurs.index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $metiers = metier::all();
        $établissements = établissement::all();
        return view('formateurs.create', compact('metiers','établissements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|integer',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'grade' => 'required|string',
            'date_naissance' => 'required|date',
            'date_recrutement' => 'required|date',
            'poste' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string',
            'établissement_id' => 'required|exists:établissements,id',
            'metier_id' => 'required|exists:metiers,id',
        ]);

        $établissements= établissement::findOrFail($request->établissement_id)->établissement;
        $metiers= metier::findOrFail($request->metier_id)->metier;

        formateur::create([
            'matricule' => $request->matricule,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'photo' =>$request->photo,
            'grade' => $request->grade,
            'date_naissance' => $request->date_naissance,
            'date_recrutement' =>$request->date_recrutement,
            'poste' => $request->poste,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'établissement_id' => $request->établissement_id,
            'metier_id' =>$request->metier_id,
        ]);
        return redirect()->route('formateurs.index');
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
