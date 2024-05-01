<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::resource('index', IndexController::class);
Route::resource('admin', AdminController::class);

