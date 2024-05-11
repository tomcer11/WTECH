<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

// Route::get('/detail/{id}', [ProductController::class, 'show']);

Route::get('/category/{id}', [IndexController::class, 'show_category']);
Route::get('/category/{id}/sub-category/{s_id}', [IndexController::class, 'show_sub_category']);
Route::get('/category/{id}/sub-category/{s_id}/detail/{product_id}', [ProductController::class, 'show']);


Route::get('admin', [ProductController::class, 'index'])->middleware(['auth','can:viewAny, App\Models\Product']);
Route::post('admin', [ProductController::class, 'store'])->middleware(['auth', 'can:create, App\Models\Product']);
Route::get('admin/{id}', [ProductController::class, 'show']);
Route::put('admin/{id}', [ProductController::class, 'update'])->middleware(['auth', 'can:update, App\Models\Product']);
Route::delete('admin/{id}', [ProductController::class, 'destroy'])->middleware(['auth', 'can:delete, App\Models\Product']);
Route::delete('image/{id}', [ImageController::class, 'destroy'])->middleware('auth', 'can:delete, App\Models\Product');
Route::resource('/', IndexController::class);

Route::get('cart', [CartController::class, 'index']);
Route::delete('cart/{id}/{count}', [CartController::class, 'deleteCartItem']);
Route::post('/category/{m_id}/sub-category/{s_id}/detail/{product_id}/cart_add/{id}/{count}', [CartController::class, 'addToCart']);
Route::post('cart/count_change/{id}/{count}', [CartController::class, 'updateCount']);

Route::get('cart/delivery', [DeliveryController::class, 'index']);
Route::post('cart/delivery', [DeliveryController::class, 'store']);

Route::get('cart/payment', [PaymentController::class, 'index']);
Route::post('cart/payment/shipment', [PaymentController::class, 'storeShipment']);
Route::post('cart/payment/payment', [PaymentController::class, 'storePayment']);

Route::get('cart/summary', [SummaryController::class, 'index']);
Route::get('cart/summary/make_order', [SummaryController::class, 'makeOrder']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
