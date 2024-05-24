<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/category/{categoryId}', [ProductController::class, 'productsByCategory'])->name('productsByCategory');
Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost'])->name('registerPost');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
