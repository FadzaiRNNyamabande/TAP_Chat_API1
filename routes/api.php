<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MediaController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('messages', [ChatController::class, 'sendMessage']);
    Route::get('messages', [ChatController::class, 'getMessages']);
    Route::post('groups', [GroupController::class, 'createGroup']);
    Route::post('groups/{group}/members', [GroupController::class, 'addMember']);
    Route::post('media', [MediaController::class, 'uploadMedia']);
});
