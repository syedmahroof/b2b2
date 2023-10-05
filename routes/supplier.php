<?php

// supplier.php

use App\Http\Controllers\SupplierControllers\SupplierSliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierDashboardController;
use App\Http\Controllers\SupplierControllers\SupplierProductController;
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

        Route::get('/profile', [SupplierController::class, 'profile'])->name('supplier.profile');

        Route::any('/update-profile', [SupplierController::class, 'updateProfile'])->name('supplier.updateProfile');

        

        Route::get('/products', [SupplierProductController::class, 'index'])->name('supplier.products.index');
        Route::get('/products/create', [SupplierProductController::class, 'create'])->name('supplier.products.create');
        Route::post('/products', [SupplierProductController::class, 'store'])->name('supplier.products.store');
        Route::get('/products/{id}/edit', [SupplierProductController::class, 'edit'])->name('supplier.products.edit');
        Route::put('/products/{id}', [SupplierProductController::class, 'update'])->name('supplier.products.update');
        Route::delete('/products/{id}', [SupplierProductController::class, 'destroy'])->name('supplier.products.destroy');


        Route::get('/sliders', [SupplierSliderController::class, 'index'])->name('supplier.sliders.index');
        Route::get('/sliders/create', [SupplierSliderController::class, 'create'])->name('supplier.sliders.create');
        Route::post('/sliders', [SupplierSliderController::class, 'store'])->name('supplier.sliders.store');
        Route::get('/sliders/{id}/edit', [SupplierSliderController::class, 'edit'])->name('supplier.sliders.edit');
        Route::put('/sliders/{id}', [SupplierSliderController::class, 'update'])->name('supplier.sliders.update');
        Route::delete('/sliders/{id}', [SupplierSliderController::class, 'destroy'])->name('supplier.sliders.destroy');



        // Logout route
        Route::post('/logout', [SupplierAuthController::class, 'logout'])->name('supplier.logout');
    });
});
