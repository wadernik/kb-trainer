<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Lesson\CreateLessonController;
use App\Http\Controllers\Api\Lesson\DeleteLessonController;
use App\Http\Controllers\Api\Lesson\GetLessonController;
use App\Http\Controllers\Api\Lesson\ListLessonController;
use App\Http\Controllers\Api\Lesson\UpdateLessonController;
use App\Http\Controllers\Api\LessonCategory\CreateLessonCategoryController;
use App\Http\Controllers\Api\LessonCategory\DeleteLessonCategoryController;
use App\Http\Controllers\Api\LessonCategory\GetLessonCategoryController;
use App\Http\Controllers\Api\LessonCategory\ListLessonCategoryController;
use App\Http\Controllers\Api\LessonCategory\UpdateLessonCategoryController;
use App\Http\Controllers\Api\User\CreateUserController;
use App\Http\Controllers\Api\User\DeleteUserController;
use App\Http\Controllers\Api\User\GetUserController;
use App\Http\Controllers\Api\User\ListUserController;
use App\Http\Controllers\Api\User\Progression\CreateUserProgressionController;
use App\Http\Controllers\Api\User\Progression\DeleteUserProgressionController;
use App\Http\Controllers\Api\User\Progression\GetUserProgressionController;
use App\Http\Controllers\Api\User\Progression\ListUserProgressionController;
use App\Http\Controllers\Api\User\Progression\UpdateUserProgressionController;
use App\Http\Controllers\Api\User\UpdateUserController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'auth'],
    static function () {
        Route::post('/', [LoginController::class, 'login']);
    }
);

// Users
Route::group(
    [
        'prefix' => 'users',
        'middleware' => ['auth:sanctum'],
    ],
    static function () {
        Route::get('/', [ListUserController::class, 'list']);
        Route::get('/{id}', [GetUserController::class, 'get']);
        Route::post('/', [CreateUserController::class, 'store']);
        Route::put('/{id}', [UpdateUserController::class, 'update']);
        Route::delete('/{id}', [DeleteUserController::class, 'delete']);
    }
);

// User's progression
Route::group(
    ['prefix' => 'progressions'],
    static function () {
        Route::get('/', [ListUserProgressionController::class, 'list']);
        Route::get('/{id}', [GetUserProgressionController::class, 'get']);
        Route::post('/', [CreateUserProgressionController::class, 'store']);
        Route::put('/{id}', [UpdateUserProgressionController::class, 'update']);
        Route::delete('/{id}', [DeleteUserProgressionController::class, 'delete']);
    }
);

// Lesson's categories
Route::group(
    [
        'prefix' => 'categories',
        'middleware' => ['auth:sanctum'],
    ],
    static function () {
        Route::get('/', [ListLessonCategoryController::class, 'list']);
        Route::get('/{id}', [GetLessonCategoryController::class, 'get']);
        Route::post('/', [CreateLessonCategoryController::class, 'store']);
        Route::put('/{id}', [UpdateLessonCategoryController::class, 'update']);
        Route::delete('/{id}', [DeleteLessonCategoryController::class, 'delete']);
    }
);

// Lessons
Route::group(
    [
        'prefix' => 'lessons',
        'middleware' => ['auth:sanctum'],
    ],
    static function () {
        Route::get('/', [ListLessonController::class, 'list']);
        Route::get('/{id}', [GetLessonController::class, 'get']);
        Route::post('/', [CreateLessonController::class, 'store']);
        Route::put('/{id}', [UpdateLessonController::class, 'update']);
        Route::delete('/{id}', [DeleteLessonController::class, 'delete']);
    }
);
