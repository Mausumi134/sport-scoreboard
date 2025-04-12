<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 
class WidgetController extends Controller
{
    public function showGamesWidget(Request $request)
    {
        return view('widgets.games', [
            'date' => $request->input('date'),
            'league' => $request->input('league'),
            'season' => $request->input('season'),
            'theme' => $request->input('theme'),
            'showToolbar' => $request->input('showToolbar'),
            'showErrors' => $request->input('showErrors'),
            'showLogos' => $request->input('showLogos'),
            'modalGame' => $request->input('modalGame'),
            'modalStandings' => $request->input('modalStandings'),
            'modalShowLogos' => $request->input('modalShowLogos'),
        ]);
    }
   

   

}

