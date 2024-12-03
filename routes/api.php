<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/orders', [OrderController::class, 'index']);

Route::post('/login', [AuthController::class, 'login']);
