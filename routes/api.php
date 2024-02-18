<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/registcak', [App\Http\Controllers\Api\RegisterController::class, 'store']);

/**
 * route "/login"
 * @method "POST"
 */
Route::post('/logincak', [App\Http\Controllers\Api\LoginController::class, 'check']);

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * route "/logout"
 * @method "POST"
 */
Route::post('/logout', [App\Http\Controllers\Api\LogoutController::class, 'logout']);
