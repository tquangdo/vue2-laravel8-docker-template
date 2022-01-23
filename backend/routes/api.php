<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function () {
    Route::get('auth/me', [UserController::class, 'getMe']);
    Route::post('auth/changepw', [UserController::class, 'changePassword']);
    Route::get('auth/onlogout', [UserController::class, 'onLogout']);
});

Route::post('auth/onsignup', [UserController::class, 'onSignup']);
Route::post('auth/onlogin', [UserController::class, 'onLogin']);
