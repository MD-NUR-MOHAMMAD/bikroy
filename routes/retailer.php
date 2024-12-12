<?php

use App\Http\Controllers\Web\Backend\Retailer\DashboardController;
use Illuminate\Support\Facades\Route;

/*
* Dashboard
*/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');