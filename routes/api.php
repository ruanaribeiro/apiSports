<?php

use App\Http\Controllers\SportController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/minhas-informacoes', function () {
    return response()->json([
        'nome' => 'LEONARDO SILVEIRA GOMES',
        'RM' => '3411'
    ]);
});

Route::apiResource('/sports', SportController::class);

Route::apiResource('/trainers', TrainerController::class);

Route::apiResource('/competitors', CompetitorController::class);

Route::apiResource('/locales', LocaleController::class);
