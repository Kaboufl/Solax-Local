<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="3"> --}}
    <title>{{ __('Laravel - ').env('APP_NAME') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-500 px-4">
    <h1 class="text-4xl font-black text-red-700">Suivi photovoltaïque</h1>

    <main class="space-y-4">
    @livewire('RealTime')
    @livewire('DisplayGridPower')

    </main>

    {{-- @dump($solax, $solax->get()) --}}

    {{-- @livewireChartsScripts --}}
</body>
</html>
