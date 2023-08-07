<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminControllers\AdminAuthController;
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\SupplierControllers\SupplierAuthController;
use App\Http\Controllers\SupplierControllers\SupplierController;
use App\Http\Controllers\BuyerControllers\BuyerAuthController;
use App\Http\Controllers\BuyerControllers\BuyerController;
use App\Http\Controllers\MarketingControllers\MarketingExecutiveAuthController;
use App\Http\Controllers\MarketingControllers\MarketingExecutiveController;
use App\Http\Controllers\QualityCheckControllers\QualityCheckerAuthController;
use App\Http\Controllers\QualityCheckControllers\QualityCheckerController;
use App\Http\Controllers\CustomerSupportControllers\CustomerSupportAuthController;
use App\Http\Controllers\CustomerSupportControllers\CustomerSupportController;
use App\Http\Controllers\InventoryManagementControllers\InventoryManagerAuthController;
use App\Http\Controllers\InventoryManagementControllers\InventoryManagerController;


    Route::get('/', [BuyerController::class, 'index'])->name('buyer.home');

// Route::prefix('buyer')->group(function () {
    // Show login form
    Route::get('/login', [BuyerAuthController::class, 'showLoginForm'])->name('buyer.login');
    // Handle login form submission
    Route::post('/login', [BuyerAuthController::class, 'login']);
    // Other buyer routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
       
        
        Route::get('/home', [BuyerController::class, 'home'])->name('buyer.dashboard');
        // Logout route
        Route::post('/logout', [BuyerAuthController::class, 'logout'])->name('buyer.logout');
    });
// });


// Admin routes
Route::prefix('admin')->group(function () {
    // Show login form
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    // Handle login form submission
    Route::post('/login', [AdminAuthController::class, 'login']);
    // Other admin routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Logout route
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});

// Supplier routes
Route::prefix('supplier')->group(function () {
    // Show login form
    Route::get('/login', [SupplierAuthController::class, 'showLoginForm'])->name('supplier.login');
    // Handle login form submission
    Route::post('/login', [SupplierAuthController::class, 'login']);
    // Other supplier routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
        Route::get('/dashboard', [SupplierController::class, 'dashboard'])->name('supplier.dashboard');
        // Logout route
        Route::post('/logout', [SupplierAuthController::class, 'logout'])->name('supplier.logout');
    });
});

// Buyer routes


// Marketing Executive routes
Route::prefix('marketing-executive')->group(function () {
    // Show login form
    Route::get('/login', [MarketingExecutiveAuthController::class, 'showLoginForm'])->name('marketing-executive.login');
    // Handle login form submission
    Route::post('/login', [MarketingExecutiveAuthController::class, 'login']);
    // Other marketing executive routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
        Route::get('/dashboard', [MarketingExecutiveController::class, 'dashboard'])->name('marketing-executive.dashboard');
        // Logout route
        Route::post('/logout', [MarketingExecutiveAuthController::class, 'logout'])->name('marketing-executive.logout');
    });
});

// Quality Checker routes
Route::prefix('quality-checker')->group(function () {
    // Show login form
    Route::get('/login', [QualityCheckerAuthController::class, 'showLoginForm'])->name('quality-checker.login');
    // Handle login form submission
    Route::post('/login', [QualityCheckerAuthController::class, 'login']);
    // Other quality checker routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
        Route::get('/dashboard', [QualityCheckerController::class, 'dashboard'])->name('quality-checker.dashboard');
        // Logout route
        Route::post('/logout', [QualityCheckerAuthController::class, 'logout'])->name('quality-checker.logout');
    });
});

// Customer Support routes
Route::prefix('customer-support')->group(function () {
    // Show login form
    Route::get('/login', [CustomerSupportAuthController::class, 'showLoginForm'])->name('customer-support.login');
    // Handle login form submission
    Route::post('/login', [CustomerSupportAuthController::class, 'login']);
    // Other customer support routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
        Route::get('/dashboard', [CustomerSupportController::class, 'dashboard'])->name('customer-support.dashboard');
        // Logout route
        Route::post('/logout', [CustomerSupportAuthController::class, 'logout'])->name('customer-support.logout');
    });
});

// Inventory Manager routes
Route::prefix('inventory-manager')->group(function () {
    // Show login form
    Route::get('/login', [InventoryManagerAuthController::class, 'showLoginForm'])->name('inventory-manager.login');
    // Handle login form submission
    Route::post('/login', [InventoryManagerAuthController::class, 'login']);
    // Other inventory manager routes can be defined here
    Route::middleware('auth.user')->group(function () {
        // Dashboard route
        Route::get('/dashboard', [InventoryManagerController::class, 'dashboard'])->name('inventory-manager.dashboard');
        // Logout route
        Route::post('/logout', [InventoryManagerAuthController::class, 'logout'])->name('inventory-manager.logout');
    });
});
