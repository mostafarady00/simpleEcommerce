<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\productcontroller;

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


Route::get("/products",[PostController::class,"index"]);
 Route::post("/products",[PostController::class,"store"]);
 Route::get("/products/{id}",[PostController::class,"show"]);
 Route::delete("/products/{id}",[PostController::class,"destroy"]);
 Route::post("/products/{id}",[PostController::class,"update"]);
