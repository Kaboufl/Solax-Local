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

    $totalToday = ProductionData::select('yield_today')
                                    ->whereDate('measured_at', today())
                                    ->orderBy('measured_at', 'desc')
                                    ->first()->yield_today;

    $averageToday = ProductionData::select('yield_today')
                                    ->whereDate('measured_at', today())
                                    ->avg('yield_today');

    $averageToday = round($averageToday, 2);

    $maxToday = ProductionData::select('grid_power')
                                    ->whereDate('measured_at', today())
                                    ->max('grid_power');
    try {
        $productionData = $solax->parse();
    } catch (\Exception $e) {
        $productionData = false;
    }


    return view('dashboard', compact('productionData', 'totalToday', 'averageToday', 'maxToday'));
});

Route::get('/laravel', function () {
    return view('welcome');
});
