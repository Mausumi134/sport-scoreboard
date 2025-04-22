<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ScoreController extends Controller
{
    
    public function liveFixtures()
    {
        $response = Http::withHeaders([
            'x-apisports-key' => env('API_SPORTS_KEY')
        ])->get('https://v3.football.api-sports.io/fixtures?live=all');

        $fixtures = $response->json()['response'] ?? [];

        return view('live-scores', compact('fixtures'));
    }
}
