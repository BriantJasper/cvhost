<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'currentPage' => 'home'
    ]);
});

Route::get('/products', [ProductController::class , 'index']);

Route::get('/login', function(){
    return view('login', [
    ]);
})->middleware('guest');

Route::get('/register', function(){
    return view('register', [
    ]);
})->middleware('guest');

Route::post('/register', [AuthController::class , 'register']);
Route::post('/login', [AuthController::class , 'login']);
Route::post('/logout', [AuthController::class , 'logout']);

Route::get('/auth/google', [AuthController::class , 'googleAuth']);
Route::get('/auth/google/callback', [AuthController::class , 'googleCallback']);