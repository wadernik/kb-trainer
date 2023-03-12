<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\User\CreateUserController;
use App\Http\Controllers\Api\User\DeleteUserController;
use App\Http\Controllers\Api\User\GetUserController;
use App\Http\Controllers\Api\User\ListUserController;
use App\Http\Controllers\Api\User\UpdateUserController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'auth'],
    static function () {
        Route::post('/', [LoginController::class, 'login']);
    }
);

Route::group(
    [
        'prefix' => 'users',
        // 'middleware' => ['auth:sanctum'],
    ],
    static function () {
        Route::get('/', [ListUserController::class, 'list']);
        Route::get('/{id}', [GetUserController::class, 'get']);
        Route::post('/', [CreateUserController::class, 'store']);
        Route::put('/{id}', [UpdateUserController::class, 'update']);
        Route::delete('/{id}', [DeleteUserController::class, 'delete']);
    }
);
