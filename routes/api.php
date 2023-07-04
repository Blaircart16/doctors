<?php

use App\Http\Controllers\AudioController;
use App\Http\Controllers\CaretakerController;
use App\Http\Controllers\EmotionController;
use App\Http\Controllers\EmotionRecController;
use App\Http\Controllers\FenceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PatientaudioController;
use App\Http\Controllers\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::get('/caretakers', [CaretakerController::class, 'api']);
// Route::get('/patientaudios', [PatientaudioController::class, 'api']);
Route::get('/emotions', [EmotionController::class, 'api']);
// Route::get('/fences', [FenceController::class, 'api']);

// Route::get('/locations', [LocationController::class, 'api']);
Route::post('/regemotion', [EmotionRecController::class, 'recognizeEmotion']);