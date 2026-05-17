<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignLanguageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SignLanguageController::class, 'index']);
Route::post('/predict', [SignLanguageController::class, 'predict']);
