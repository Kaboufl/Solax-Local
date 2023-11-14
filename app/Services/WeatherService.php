<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

/**
 * Current position : 43.86277177866771, 1.3433045516291342
 */

class WeatherService 
{
    private $weatherCodes = [
        0 => 'Ciel dégagé',
        1 => 'Peu nuageux',
        2 => 'Quelques nuages',
        3 => 'Ciel voilé',

        45 => 'Brouillard',
        48 => 'Brouillard givrant',

        51 => 'Légère bruine',
        53 => 'Bruine',
        55 => 'Quelques gouttes',

        56 => 'Faible bruine givrante',
        57 => 'Bruine givrante',

        61 => 'Faible pluie',
        63 => 'Pluie',
        65 => 'Forte pluie',

        66 => 'Pluie verglaçante',
        67 => 'Pluie et neige mêlées faibles',

        71 => 'Neige faible',
        73 => 'Neige',
        75 => 'Neige forte',

        77 => 'Averses de grêle',

        80 => 'Légère pluie orageuse',
        81 => 'Pluie orageuse modérée',
        82 => 'Fortes pluies orageuses',

        85 => 'Légère neige orageuse',
        86 => 'Neige orageuse modérée',

        95 => 'Orages forts et pluies fortes'
    ];

    public $temperature;
    public $weatherCode;
    public bool $isDay;
    public string $stringWeatherCode;

    private $lat, $long;

    public function __construct($lat = null, $long = null)
    {
        $this->lat = $lat;
        $this->long = $long;

        $this->getWeather()->decodeWeatherCode();
    }

    public function getWeather(): self
    {
        try {
            $response = Http::get('https://api.open-meteo.com/v1/meteofrance',  [
                'latitude' => $this->lat,
                'longitude' => $this->long,
                'current' => 'temperature_2m,weather_code,is_day'
            ]);
        } catch (\Throwable $th) {
            throw new \Exception('Error while fetching weather data');
        }

        try {
            $current = $response->json()['current'];
        } catch (\Throwable $th) {
            //throw $th;
            throw new \Exception('Data not found in weather response');
        }


        $this->temperature = $current['temperature_2m'];
        $this->weatherCode = $current['weather_code'];
        $this->isDay = $current['is_day'];

        return $this;
    }

    public function decodeWeatherCode()
    {
        $code = $this->weatherCode;
        $code > 95 ? $code = 95 : $code;
        $this->stringWeatherCode = $this->weatherCodes[$code];
        return $this;
    }
}