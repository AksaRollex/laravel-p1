<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

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
Route::post('/logincak2', [App\Http\Controllers\Api\LoginUsernameController::class, 'check2']);

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

/**
 * route "/show data"
 * @method "POST"
 */
Route::get('/showData', [App\Http\Controllers\Api\ShowDataController::class, 'show']);

/**
 * route "/hapus data"
 * @method "delete"
 */
Route::delete('delete/{id}', [App\Http\Controllers\Api\DeleteController::class, 'deleteUser']);


Route::get('get/{id}', [App\Http\Controllers\Api\RegisterController::class, 'getUser']);
Route::post('update/{id}', [App\Http\Controllers\Api\RegisterController::class, 'updateUser']);