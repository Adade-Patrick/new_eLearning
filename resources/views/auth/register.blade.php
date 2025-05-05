@extends('layouts.app')

@section("title","register")
@section('content')

<section class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 backdrop-blur-sm"></div>

    <div class="relative z-10 flex flex-col justify-center items-center min-h-screen">
        <div class="bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-md border border-white/20 rounded-3xl p-10 w-full max-w-md shadow-2xl animate-fade-in-up">
            <h1 class="text-3xl font-extrabold text-white text-center mb-8 animate-text-glow">Créer un compte</h1>

            <form action="{{ route('auth.register') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <input type="text" name="name" placeholder="Nom" class="w-full px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 animate-pulse-slow">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="email" name="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 animate-pulse-slow">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="password" name="password" placeholder="Mot de passe" class="w-full px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 animate-pulse-slow">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" class="w-full px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 animate-pulse-slow">
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:scale-105 transition-transform duration-300 text-white font-bold rounded-lg shadow-lg animate-pulse-slow">
                        S'inscrire
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>

@endsection
