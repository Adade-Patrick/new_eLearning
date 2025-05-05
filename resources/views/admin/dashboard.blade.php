@extends('layouts.app')

@section('content')

@include('partials.navbar')
@include('partials.sidebar')


<div class="p-4 sm:ml-64 bg-no-repeat bg-cover  bg-white bg-blend-multiply">
    <main class="mt-20 mb-20">

            <!--Div présentation-->
            {{-- <div class="cursor-pointer group rounded-md ont-bold shadow-2xl hover:scale-110 transition active:scale-90 max-w-3xl mx-auto flex flex-col md:flex-row justify-between items-center border border-blue-600 dark:border-gray-700 dark:bg-white relative py-10 px-4">
                <div class="p-2 text-center md:text-left">
                    <h2 class="mb-2 text-3xl font-bold tracking-tight text-blue-600 dark:text-white">Bienvenue !</h2>
                    <p class="mb-3 font-normal text-blue-600 dark:text-gray-400">Prêt à commencer votre journée !</p>
                </div>

                <div class="flex justify-center md:absolute md:right-5 mt-4 md:mt-4">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-auto max-w-[16rem] h-40 rounded-full">
                </div>
            </div> --}}


            <div class="relative z-10 flex justify-center items-center px-4">
                 <div class="max-w-3xl w-full rounded-3xl border border-white/20 backdrop-blur-xl bg-white/10 shadow-2xl transition hover:scale-105 duration-300 p-8 md:p-12 flex flex-col md:flex-row items-center justify-between animate-fade-in-up group">

                    <div class="text-center md:text-left">
                        <h2 class="text-4xl font-extrabold text-white mb-2 animate-text-glow">Bienvenue sur le tableau de bord !</h2>
                        <p class="text-black text-lg font-light">Gérer efficacement vos utilisateurs, contenus et paramètres</p>
                    </div>

                    <div class="mt-6 md:mt-0 md:ml-6">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-40 h-40 rounded-full border-4 border-blue-500 shadow-lg group-hover:rotate-6 transition duration-500 ease-in-out">
                    </div>

                </div>
            </div>






            <!--Div  classe-->
    <div class="mt-8">
        {{-- <h3 class="mb-2 text-3xl text-center font-bold tracking-tight text-blue-600 dark:text-white">Cycles</h3>   --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <a href="{{ route('cycle_primaire')}}">
                    <h4 class="mb-2 text-3xl text-center font-bold tracking-tight text-blue-600 dark:text-white">Primaire</h4>
                    <img class="h-60 max-w-sm w-full rounded-lg" src="{{ asset('images/cycle/primaire.jpg') }}" alt="">
                </a>

                <a href="{{ route('cycle_college')}}">
                    <h4 class="mb-2 text-3xl text-center font-bold tracking-tight text-blue-600 dark:text-white">Collège</h4>
                    <img class="h-60 max-w-sm w-full rounded-lg" src="{{ asset('images/cycle/college.jpg') }}" alt="">
                </a>

                <a href="{{ route('cycle_lycee')}}">
                    <h4 class="mb-2 text-3xl text-center font-bold tracking-tight text-blue-600 dark:text-white">Lycée</h4>
                    <img class="h-60 max-w-sm w-full rounded-lg" src="{{ asset('images/cycle/lycee.jpg') }}" alt="">
                </a>


        </div>
    </div>


            <!--Div liste Enseignant-->
            <div class="mt-10">
                <h3 class="mb-2 text-3xl text-center font-bold tracking-tight text-blue-600 dark:text-white">Enseignants</h3>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-black uppercase bg-blue-600 dark:bg-black dark:text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Prenom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Classes affectées
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600 text-black">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    A
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    B
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C
                                </td>

                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>


@endsection
