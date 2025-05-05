<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Requests\Classe\ClasseStoreRequest;
use Exception;
class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $classes = classe::all();
        return view('test.classe', ['classes' => $classes]);
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
        public function store(ClasseStoreRequest $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'libelle' => 'required|unique:classes,libelle',
        ]);
        // Création de la classe
        try{
            Classe::create($validatedData);

            // Redirection avec message de succès
            return redirect()->route('classes.index')->with('success', 'Classe ajoutée avec succès');

        }catch(Exception $e){
            return redirect()->back()->withErrors([
                "Une erreur s'est produite a la creation de la classe"
            ]);
        }
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
    public function destroy($id)
    {
        //
        $classe = Classe::findOrFail($id);
        $classe->delete();

        return redirect()->route('classes.index')->with('success', 'Classe supprimée avec succès.');
    }
}
