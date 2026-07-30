<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//public route health check
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'anota-ai-api',
        'version' => 'v1',
        'environment' => config('app.env'),
        'timestamp' => now()->toIso8601String(),
    ]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
