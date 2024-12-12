<?php

use App\Http\Controllers\Web\Backend\Admin\Authorization\PermissionController;
use App\Http\Controllers\Web\Backend\Admin\Authorization\RoleController;
use App\Http\Controllers\Web\Backend\Admin\Authorization\UserController;
use App\Http\Controllers\Web\Backend\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
* Dashboard
*/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


/*
* Authorization
*/
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('users', UserController::class);

/*
* Category
*/
Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
    Route::patch('/status/{id}', 'status')->name('status');
});