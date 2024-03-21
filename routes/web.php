<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
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
});

Route::get('/register', function(){
    return view('register', [
    ]);
});