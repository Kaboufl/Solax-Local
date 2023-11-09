<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="3"> --}}
    <title>{{ __('Laravel - ').env('APP_NAME') }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-7xl font-black text-red-700">Solax me voici</h1>

    @dump($solax, $solax->get())
</body>
</html>
