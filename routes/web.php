<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategorieController;
use App\Models\Categorie;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

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
// fontend

Route::get('/', function () {
    return view('frontend.pages.home');
})->name("Home");

Route::get('/shop', function () {
    return view('frontend.pages.shop');
})->name("shop");
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name("ABOUT");
Route::get('/contactus', function () {
    return view('frontend.pages.contactus');
})->name("CONTACT US");


// grud
Route::resource("/products",ProductController::class);
Route::resource("/orders",OrderController::class);
Route::resource("/categories",CategorieController::class);

// login and register
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// dashboard
Route::get('/dash', function () {
    return view('admin.frontend.pageadmin.home');
})->name("admin");
