<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AirQualityController extends Controller
{
    public function fetchAirQuality()
    {
        $apiKey = env('WAQI_API_TOKEN');
        $url = "https://api.waqi.info/feed/jakarta/?token=1c38f02bba6f78c1f615034252557df316e32c9f";

        // Make the API request
        $response = Http::get($url);

        // Check if the response was successful
        if ($response->successful() && $response->json('status') === 'ok') {
            $data = $response->json('data');
            return view('home', ['data' => $data]);
        }

        return response()->json(['error' => 'Failed to fetch data.'], 500);
    }
}
