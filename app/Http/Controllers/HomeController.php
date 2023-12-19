<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $lat = -8.135401812068315;
        $lon = 114.32752012316523;
        $apiKey = 'f9e797763dc190ad36bf99fd3fa35dcd';

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'lat' => $lat,
            'lon' => $lon,
            'appid' => $apiKey,
        ]);

        $weatherData = $response->json();

        return view('home', compact('weatherData'));
    }
}
