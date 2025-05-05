@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Liste des Cycles</h2>

        <form method="GET" action="{{ route('cycles.index') }}" class="mb-4">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher un cycle..."
                   class="px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 ml-2">
                Rechercher
            </button>
        </form>


        <a href="{{ route('cycles.create') }}"
           class="mb-4 inline-block px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
            + Ajouter un Cycle
        </a>

        <ul class="divide-y divide-gray-200">
            @foreach ($cycles as $cycle)
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-800">{{ $cycle->libelle_C }}</span>
                    <div class="flex space-x-2">
                        <a href="{{ route('cycles.edit', $cycle->idCycles) }}"
                           class="text-blue-500 hover:underline">Modifier</a>
                        <form action="{{ route('cycles.destroy', $cycle->idCycles) }}" method="POST"
                              onsubmit="return confirm('Supprimer ce cycle ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
