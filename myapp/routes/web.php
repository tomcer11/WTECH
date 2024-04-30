<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::resource('index', IndexController::class);

Route::get('/', function () {
    return view('index');
});
