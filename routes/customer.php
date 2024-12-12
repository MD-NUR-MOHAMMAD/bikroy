<?php

use App\Http\Controllers\Web\Frontend\DashboardController;
use Illuminate\Support\Facades\Route;

/*
* Dashboard
*/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
