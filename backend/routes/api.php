<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\AuthController;
use Laravel\Sanctum\Sanctum;

Route::post("register",[AuthController::class,"register"]);

Route::post("login",[AuthController::class,"login"]);

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/