<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [AdminController::class, 'home']);

    // Route to home handled by AdminController
    Route::get('/home', [AdminController::class, 'index'])->name('home');

