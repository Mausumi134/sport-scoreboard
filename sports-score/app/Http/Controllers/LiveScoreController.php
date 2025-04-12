<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LiveScoreController extends Controller
{
    // Existing getFootballScores method

    public function getFootballLeagues(Request $request)
    {
        $apiKey = '360ab90e1ff18b1334b74c14908a564e';
        $apiUrl = 'https://v3.football.api-sports.io/leagues';

        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => $apiKey,
                'X-RapidAPI-Host' => 'v3.football.api-sports.io'
            ])->get($apiUrl);

            $data = $response->json();

            // Check if the API response contains the 'response' key
            if (isset($data['response'])) {
                $leagues = $data['response'];
            } else {
                $leagues = []; // Handle the case where 'response' key is missing
            }

            return view('leagues', ['leagues' => $leagues]);
        } catch (\Exception $e) {
            return view('leagues', ['error' => $e->getMessage()]);
        }
    }
}