<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveScoreController;


Route::get('/f', [LiveScoreController::class, 'getFootballLeagues']);



