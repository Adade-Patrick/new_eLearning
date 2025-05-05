<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annees = AnneeScolaire::all();

        // Débogage
        \Log::info('Nombre d\'années : ' . $annees->count());

        return view('annee_scolaire.anneeScolaire', ['annees' => $annees]);
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
        $validatedData = $request->validate([
            // 'libelle' => 'required|unique:annee_scolaires,libelle',
            'libelle' => [
            'required',
            'regex:/^(20\d{2})-(20\d{2})$/', // Vérifie le format "YYYY-YYYY"
            function ($attribute, $value, $fail) {
                [$start, $end] = explode('-', $value);
                if ($start >= $end) {
                    $fail("L'année de début doit être inférieure à l'année de fin.");
            }
        }
    ],
        ],
            [
                'libelle.required' => 'Le libellé est obligatoire.',
                'libelle.unique' => 'Ce libellé est déjà utilisé.',
            ]);
            AnneeScolaire::create($validatedData);
            return redirect()->route('annees.index')->with('success', 'Année scolaire ajoutée avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(AnneeScolaire $idAnnee_scolaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnneeScolaire $idAnnee_scolaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnneeScolaire $idAnnee_scolaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idAnnee_scolaires)
    {
        $annee = AnneeScolaire::findOrFail($idAnnee_scolaires);
        $annee->delete();

        return redirect()->route('annees.index')->with('success', 'Année scolaire supprimée avec succès');
    }
}
