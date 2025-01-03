<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web', 'nur'])->group(base_path('routes/nur.php'));
            Route::middleware(['web', 'maria'])->group(base_path('routes/maria.php'));
            Route::middleware(['web', 'sathi'])->group(base_path('routes/sathi.php'));
            Route::middleware(['web', 'masum'])->group(base_path('routes/masum.php'));
            Route::middleware(['web', 'auth', 'admin'])->prefix('admin/')->name('admin.')->group(base_path('routes/backend.php'));
            Route::middleware(['web', 'auth', 'retailer'])->prefix('retailer/')->name('retailer.')->group(base_path('routes/retailer.php'));
            Route::middleware(['web', 'auth', 'customer'])->prefix('customer/')->name('customer.')->group(base_path('routes/customer.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => App\Http\Middleware\AdminMiddleware::class,
            'customer' => App\Http\Middleware\CustomerMiddleware::class,
            'retailer' => App\Http\Middleware\RetailerMiddleware::class,
            'authCheck' => App\Http\Middleware\AuthCheckMiddleware::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
