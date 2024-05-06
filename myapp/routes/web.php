<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;



Route::get('/detail/{id}', [ProductController::class, 'show']);


Route::get('admin', [ProductController::class, 'index'])->middleware(['auth', 'can:index, product']);
Route::post('admin', [ProductController::class, 'store'])->middleware(['auth', 'can:store, product']);
Route::get('admin/{id}', [ProductController::class, 'show']);
Route::put('admin/{id}', [ProductController::class, 'update'])->middleware(['auth'], 'can:update, product');
Route::delete('admin/{id}', [ProductController::class, 'update'])->middleware(['auth', 'can:destroy, product']);
Route::resource('/', IndexController::class);

//Route::get('admin', [ProductController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
