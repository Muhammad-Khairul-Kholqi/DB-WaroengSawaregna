<?php

use App\Http\Controllers\ChikenFireController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('home', [ChikenFireController::class, 'index']);
Route::get('services', [ChikenFireController::class, 'services']);
Route::get('menus', [ChikenFireController::class, 'menus']);
Route::get('categories', [ChikenFireController::class, 'categories']);
Route::post('contact', [ChikenFireController::class, 'contact']);
