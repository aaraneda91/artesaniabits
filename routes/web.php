<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => 'auth', 'admin'], function(){
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resources([
            'product' => ProductController::class,
            'category' => CategoryController::class
        ]);
    });