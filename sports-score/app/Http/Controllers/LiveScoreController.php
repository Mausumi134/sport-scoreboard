<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LiveScoreController extends Controller
{
    

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

            if (isset($data['response'])) {
                $leagues = $data['response'];
            } else {
                $leagues = []; 
            }

            return view('leagues', ['leagues' => $leagues]);
        } catch (\Exception $e) {
            return view('leagues', ['error' => $e->getMessage()]);
        }
    }
}