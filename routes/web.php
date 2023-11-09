<?php

use Illuminate\Support\Facades\Route;

use App\Services\SolaxService;

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

Route::get('test', function () {
    $file = Storage::disk('local')->get('example-response.json');
    $sample = json_decode($file, true);

    $solax = new SolaxService;
    $response = $solax->parse();
    
    dump($solax);
});

Route::get('/laravel', function () {
    return view('welcome');
});
