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

        return view('annee_scolaire.index', compact('annees'));
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
            'libelle_A' => [
            'required',
            'regex:/^(20\d{2})-(20\d{2})$/', // Vérifie le format "YYYY-YYYY"
            function ($attribute, $value, $fail) {
                // 1. Vérifier le format et extraire
                if (! preg_match('/^(20\d{2})-(20\d{2})$/', $value, $matches)) {
                    $fail("Le format doit être “YYYY-YYYY”.");
                    return;
                }
                [, $start, $end] = $matches;

                // 2. Vérifier l’ordre
                if ($start >= $end) {
                    $fail("L'année de début doit être inférieure à l'année de fin.");
                }
            }

    ],
        ],
            [
                'libelle_A.required' => 'Le libellé est obligatoire.',
                'libelle_A.unique' => 'Ce libellé est déjà utilisé.',
            ]);
            AnneeScolaire::create($validatedData);
            return redirect()->route('annee_scolaire.index')->with('success', 'Année scolaire ajoutée avec succès');


    }

    /**
     * Display the specified resource.
     */
    public function show(AnneeScolaire $annee_scolaires_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnneeScolaire $annee_scolaires_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnneeScolaire $annee_scolaires_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($annee_scolaires_id)
    {
        $annee = AnneeScolaire::findOrFail($annee_scolaires_id);
        $annee->delete();

        return redirect()->route('annee_scolaire.index')->with('success', 'Année scolaire supprimée avec succès');
    }
}
