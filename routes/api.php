<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/count-visitor', [VisitorController::class, 'count']);
Route::get('/visitor-stats', [VisitorController::class, 'getStats']);
