<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products (Prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
});

// Halaman User (Route Parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);
Route::get('/sales/create', [SalesController::class, 'create']);
Route::post('/sales/store', [SalesController::class, 'store'])->name('sales.store');