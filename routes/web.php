<?php

use Illuminate\Support\Facades\Route;
use App\Services\SolaxService;
use App\Services\WeatherService;

use App\Models\ProductionData;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (SolaxService $solax) {
    return view('home', compact('solax'));
});

/**
 * Dev route to integrate the final layout
 * Inspiration : https://soft-ui-dashboard-laravel.creative-tim.com/dashboard
 */
Route::get('test', function () {

    //$weather = app(WeatherService::class);

    $solax = app(SolaxService::class);

    $productionData = $solax->parse();

    return view('dashboard');
});

Route::get('/laravel', function () {
    return view('welcome');
});
