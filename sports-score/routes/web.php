<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WidgetController;

use App\Http\Controllers\LiveScoreController;


Route::get('/leagues', [LiveScoreController::class, 'getFootballLeagues']);
Route::get('/games', [WidgetController::class, 'showGamesWidget']);

Route::get('/', function () {
    return view('widgets.home');
});