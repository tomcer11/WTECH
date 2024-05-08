<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;



Route::get('/detail/{id}', [ProductController::class, 'show']);

Route::get('/category/{id}', [IndexController::class, 'show_category']);


Route::get('admin', [ProductController::class, 'index'])->middleware(['auth','can:viewAny, App\Models\Product']);
Route::post('admin', [ProductController::class, 'store'])->middleware(['auth', 'can:create, App\Models\Product']);
Route::get('admin/{id}', [ProductController::class, 'show']);
Route::put('admin/{id}', [ProductController::class, 'update'])->middleware(['auth', 'can:update, App\Models\Product']);
Route::delete('admin/{id}', [ProductController::class, 'destroy'])->middleware(['auth', 'can:delete, App\Models\Product']);
Route::delete('image/{id}', [ImageController::class, 'destroy'])->middleware('auth', 'can:delete, App\Models\Product');
Route::resource('/', IndexController::class);

Route::get('cart', [CartController::class, 'index']);
Route::delete('cart/{id}/{count}', [CartController::class, 'deleteCartItem']);
Route::post('detail/cart_add/{id}/{count}', [CartController::class, 'addToCart']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
