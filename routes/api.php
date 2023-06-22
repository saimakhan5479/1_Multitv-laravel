<?php

use App\Http\Controllers\Apies\ApiAdminController;
use App\Http\Controllers\Apies\ApiBanConController;
use App\Http\Controllers\Apies\ApiBannerController;
use App\Http\Controllers\Apies\ApiCategoryController;
use App\Http\Controllers\Apies\ApiConCatController;
use App\Http\Controllers\Apies\ApiContentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::get('/test', function () {
    return "Api is On Working Thanks!";
});









Route::post('/login', [ApiAdminController::class, 'login']);
Route::post('/register', [ApiAdminController::class, 'register']);



Route::middleware('auth:sanctum')->group(function () {
    Route::get('inside_mware', function () {
        return response()->json('Success', 200);
    });
    // -----------------ApiContentController
    Route::group(['prefix' => 'content'], function () {
        Route::post('/store', [ApiContentController::class, 'store']);
        Route::get('/show/{id}', [ApiContentController::class, 'show']);
        Route::get('/get-all', [ApiContentController::class, 'get_all']);
    });
    // ------------------ApiBannerRoutes
    Route::group(['prefix' => 'banner'], function () {
        Route::post('/store', [ApiBannerController::class, 'store']);
        Route::get('/show/{id}', [ApiBannerController::class, 'show']);
        Route::get('/get-all', [ApiBannerController::class, 'get_all']);
    });
    // -------------------------ApiConCatController
    Route::get('/concat', [ApiConcatController::class, 'concat']);

    // -------------------------ApiCategoryController
    Route::group(['prefix' => 'category'], function () {
        Route::get('/show/{id}', [ApiCategoryController::class, 'show']);
        Route::get('/get-all', [ApiCategoryController::class, 'get_all']);
    });
});
