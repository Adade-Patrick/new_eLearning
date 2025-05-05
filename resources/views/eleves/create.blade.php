@extends('layouts.app') 

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Créer un compte élève</h2>

        <form action="{{ route('eleves.store') }}" method="POST" class="space-y-4">
            @csrf

            <input type="text" name="nom" placeholder="Nom"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>

            <input type="text" name="prenom" placeholder="Prénom"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>

            <input type="email" name="email" placeholder="Email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>

            <input type="password" name="motDePasse" placeholder="Mot de passe"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>

            <input type="date" name="dateNaissance"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>

            <input type="text" name="telephone" placeholder="Téléphone"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>

            <select name="libelle_C"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>
                <option value="">-- Sélectionnez un cycle --</option>
                @foreach($cycles as $cycle)
                    <option value="{{ $cycle->libelle_C }}">{{ $cycle->libelle_C }}</option>
                @endforeach
            </select>

            <select name="libelle_A"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>
                <option value="">-- Sélectionnez une année --</option>
                @foreach($annees as $annee)
                    <option value="{{ $annee->libelle_A }}">{{ $annee->libelle_A }}</option>
                @endforeach
            </select>

            <select name="libelle_Cl"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required>
                <option value="">-- Sélectionnez une classe --</option>
                @foreach($classes as $classe)
                    <option value="{{ $classe->libelle_Cl }}">{{ $classe->libelle_Cl }}</option>
                @endforeach
            </select>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                Créer Élève
            </button>
        </form>
    </div>
</div>
@endsection
