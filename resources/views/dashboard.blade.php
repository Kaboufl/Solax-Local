<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-100 grid auto-rows-fr grid-cols-1">

    @include('partials.nav')

    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Production Photovoltaïque</h1>

        <!-- Graphique de production -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <!-- Insérez ici le code du graphique (peut-être avec Chart.js, D3.js, etc.) -->
            <!-- Assurez-vous d'ajuster le style pour correspondre au style d'Apple -->
        </div>

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Production Totale</h2>
                <p class="text-3xl font-bold">1200 kWh</p>
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

</body>
</html>