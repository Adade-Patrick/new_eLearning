@extends('layouts.app')

@section('content')

@include('partials.navbar')
@include('partials.sidebar')

<div class="p-3 sm:ml-64 bg-no-repeat bg-cover bg-white bg-blend-multiply">
    <main class="mt-24 mb-0">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Tableau de bord
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Élève</span>
                    </div>
                </li>
            </ol>
        </nav>
    </main>
</div>

<div class="p-10 sm:ml-64 bg-no-repeat bg-cover bg-white bg-blend-multiply">
    <div class="mt-0">
        <h3 class="mb-2 text-3xl text-center font-bold tracking-tight text-blue-600 dark:text-white">Liste des élèves</h3>

        <div class="m-0 flex justify-end px-20">
            <a href="{{ route('traitements.eleve.create') }}" class="group cursor-pointer outline-none hover:rotate-90 duration-300" title="Ajouter un élève">
                <svg class="stroke-blue-600 fill-none group-hover:fill-blue-400 group-active:stroke-blue-300 group-active:fill-blue-600 group-active:duration-0 duration-300" viewBox="0 0 24 24" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-width="1.5" d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"></path>
                    <path stroke-width="1.5" d="M8 12H16"></path>
                    <path stroke-width="1.5" d="M12 16V8"></path>
                </svg>
            </a>
        </div>

        <div class="flex justify-center overflow-x-auto">
            <div class="relative shadow-md sm:rounded-lg w-full md:w-3/4">
                @if(session('success'))
                    <div class="flex justify-center bg-green-100 border-black text-green-500 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Date de naissance</th>
                            <th class="px-6 py-3">Téléphone</th>
                            <th class="px-6 py-3">Cycle</th>
                            <th class="px-6 py-3">Année scolaire</th>
                            <th class="px-6 py-3">Classe</th>
                            <th class="px-6 py-3">Utilisateur</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($eleves as $eleve)
                            <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                                <td class="px-6 py-4">{{ $eleve->id }}</td>
                                <td class="px-6 py-4">{{ $eleve->dateNaissance->format('d/m/Y') }}</td>
                                <td class="px-6 py-4">{{ $eleve->telephone }}</td>
                                <td class="px-6 py-4">{{ $eleve->cycle->libelle ?? '' }}</td>
                                <td class="px-6 py-4">{{ $eleve->anneeScolaire->libelle_A ?? '' }}</td>
                                <td class="px-6 py-4">{{ $eleve->classe->libelle ?? '' }}</td>
                                <td class="px-6 py-4">{{ $eleve->user->name ?? '' }}</td>
                                <td class="px-6 py-4 space-x-2">
                                    <a href="{{ route('eleves.show', $eleve) }}" class="text-blue-600 hover:underline">Voir</a>
                                    <a href="{{ route('eleves.edit', $eleve) }}" class="text-yellow-600 hover:underline">Modifier</a>
                                    <form action="{{ route('eleves.destroy', $eleve) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer cet élève ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-4 text-center">Aucun élève trouvé.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4 flex justify-center">
            {{ $eleves->links() }}
        </div>
    </div>
</div>

@endsection
