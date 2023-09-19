<?php

// supplier.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierDashboardController;
use App\Http\Controllers\SupplierProductController;
use App\Http\Controllers\SupplierControllers\SupplierAuthController;
use App\Http\Controllers\SupplierControllers\SupplierController;


Route::prefix('supplier')->group(function () {
    // Show login form
    Route::get('/login', [SupplierAuthController::class, 'showLoginForm'])->name('supplier.login');
    // Handle login form submission
    Route::post('/login-post', [SupplierAuthController::class, 'login'])->name('supplier.post.login');
    // Other supplier routes can be defined here
    Route::middleware('supplier.guard')->group(function () {
        // Dashboard route
        Route::get('/', [SupplierController::class, 'dashboard'])->name('supplier.dashboard');

        Route::get('/products', [SupplierProductController::class, 'index'])->name('supplier.products.index');
        Route::get('/products/create', [SupplierProductController::class, 'create'])->name('supplier.products.create');
        Route::post('/products', [SupplierProductController::class, 'store'])->name('supplier.products.store');
        Route::get('/products/{id}/edit', [SupplierProductController::class, 'edit'])->name('supplier.products.edit');
        Route::put('/products/{id}', [SupplierProductController::class, 'update'])->name('supplier.products.update');
        Route::delete('/products/{id}', [SupplierProductController::class, 'destroy'])->name('supplier.products.destroy');

        // Logout route
        Route::post('/logout', [SupplierAuthController::class, 'logout'])->name('supplier.logout');
    });
});
