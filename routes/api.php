<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SkuController;
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

Route::post('login', LoginController::class);

Route::apiResource('products', ProductController::class);

Route::controller(ProductController::class)->group(function() {
    Route::middleware(['auth:sanctum', 'ability:all,read'])->prefix('products')->group(function() {
        Route::get('/', 'index');
        Route::get('/{product}', 'show');
    });

    Route::middleware(['auth:sanctum', 'ability:all'])->prefix('products')->group(function() {
        Route::post('/', 'store');
        Route::put('/{product}', 'update');
        Route::delete('/{product}', 'destroy');
    });
});

Route::controller(SkuController::class)->group(function() {
    Route::middleware(['auth:sanctum', 'ability:all,read'])->prefix('skus')->group(function() {
        Route::get('/', 'index');
        Route::get('/{sku}', 'show');
    });

    Route::middleware(['auth:sanctum', 'ability:all'])->prefix('skus')->group(function() {
        Route::post('/', 'store');
        Route::put('/{sku}', 'update');
        Route::delete('/{sku}', 'destroy');
    });
});
