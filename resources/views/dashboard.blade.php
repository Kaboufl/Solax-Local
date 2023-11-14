@extends('layouts.dashboard')

@section('content')

    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8 ">Production Photovoltaïque</h1>

        <x-meteo-display class="w-ful rounded-lg shadow-md" />
        <!-- Graphique de production -->

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Production Totale d'aujourd'hui</h2>
                <p class="text-3xl font-bold">{{ 'pouet' }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Moyenne Journalière</h2>
                <p class="text-3xl font-bold">50 kWh</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Pic de Production</h2>
                <p class="text-3xl font-bold">100 kWh</p>
            </div>
        </div>
    </div>

@endsection

