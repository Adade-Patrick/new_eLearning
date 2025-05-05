<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Eleve;
use App\Models\Cycle;
use App\Models\AnneeScolaire;
use App\Models\Classe;
use Illuminate\Support\Facades\DB;

class ElevesController extends Controller
{
    public function create()
    {
        $cycles = Cycle::all();
        $annees = AnneeScolaire::all();
        $classes = Classe::all();

        return view('eleves.create', compact('cycles', 'annees', 'classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'motDePasse' => 'required|string|min:6',
            'dateNaissance' => 'required|date',
            'telephone' => 'required|string|max:10',
            'libelle_C' => 'required|string',
            'libelle_A' => 'required|string',
            'libelle_Cl' => 'required|string',
        ]);

        DB::transaction(function () use ($request) {
            $users = Users::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'motDePasse' => $request->motDePasse,
                'role' => 'eleve',
            ]);

            Eleves::create([
                'dateNaissance' => $request->dateNaissance,
                'telephone' => $request->telephone,
                'libelle_C' => $request->libelle_C,
                'libelle_A' => $request->libelle_A,
                'libelle_Cl' => $request->libelle_Cl,
                'idUsers' => $user->idUsers,
            ]);
        });

        return redirect()->back()->with('success', 'Élève ajouté avec succès');
    }
}
