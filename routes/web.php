<?php

use Illuminate\Support\Facades\Route;

Route::any('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('search');
