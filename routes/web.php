<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminControllers\AdminAuthController;

use App\Http\Controllers\AdminControllers\AdminBlogController;
use App\Http\Controllers\AdminControllers\AdminBuyerController;
use App\Http\Controllers\AdminControllers\AdminSupplierController;
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AdminControllers\AdminNewsController;
use App\Http\Controllers\AdminControllers\AdminSliderController;
use App\Http\Controllers\BuyerControllers\SocialController;



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

Route::get('/about', [BuyerController::class, 'about'])->name('about');

Route::get('/blogs', [BuyerController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}', [BuyerController::class, 'blogDetails'])->name('blogs.show');


Route::get('/delivery-information', [BuyerController::class, 'deliveryInformation'])->name('deliveryInformation');
Route::get('/privacy-policy', [BuyerController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/brands', [BuyerController::class, 'brands'])->name('brands');
Route::get('/contact-us', [BuyerController::class, 'contactUs'])->name('contactUs');
Route::get('/returns', [BuyerController::class, 'returns'])->name('returns');
Route::get('/site-map', [BuyerController::class, 'siteMap'])->name('siteMap');


Route::get('/contact', [BuyerController::class, 'contact'])->name('contact');
Route::post('/contactSave', [BuyerController::class, 'contactSave'])->name('save.contact');

Route::get('/products', [BuyerController::class, 'products'])->name('buyer.products');
Route::get('/product/{id}', [BuyerController::class, 'productDetails'])->name('buyer.product.details');
Route::get('/signup', [BuyerAuthController::class, 'showRegisterForm'])->name('buyer.signup');
Route::post('/signup', [BuyerAuthController::class, 'signup'])->name('buyer.submit.signup');
Route::get('/login', [BuyerAuthController::class, 'showLoginForm'])->name('buyer.login');
Route::post('/login', [BuyerAuthController::class, 'login'])->name('buyer.submit.login');
Route::get('/forgot-password', [BuyerAuthController::class, 'forgotPassword'])->name('buyer.forgot.password');


Route::get('/forgot-password', [BuyerAuthController::class, 'forgotPassword'])->name('buyer.forgot.password');
Route::get('/forgot-password', [BuyerAuthController::class, 'forgotPassword'])->name('buyer.forgot.password');

Route::get('/auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);



// Other buyer routes can be defined here
Route::middleware('buyer')->group(function () {
    // Dashboard route
    Route::get('/home', [BuyerController::class, 'home'])->name('buyer.dashboard');
    Route::get('/profile', [BuyerAuthController::class, 'profile'])->name('buyer.profile');
    // Logout route
    Route::any('/logout', [BuyerAuthController::class, 'logout'])->name('buyer.logout');
});
// });


// Admin routes
Route::prefix('admin')->group(function () {
    // Show login form
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    // Handle login form submission
    Route::post('/login-post', [AdminAuthController::class, 'login'])->name('admin.post.login');

    // Middleware for routes that require admin authentication
    Route::middleware('admin.guard')->group(function () {
        // Dashboard route

        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


        Route::get('/admin/buyer', [AdminBuyerController::class, 'index'])->name('admin.buyer.list');
        Route::get('/admin/product', [AdminBuyerController::class, 'index'])->name('admin.products.list');
        Route::get('/admin/ticket', [AdminBuyerController::class, 'index'])->name('admin.tickets.list');

        Route::group(['namespace' => 'AdminControllers'], function () {

            Route::get('/suppliers', [AdminSupplierController::class, 'index'])->name('admin.suppliers.index');
            Route::get('/suppliers/create', [AdminSupplierController::class, 'create'])->name('admin.suppliers.create');
            Route::post('/suppliers', [AdminSupplierController::class, 'store'])->name('admin.suppliers.store');
            Route::get('/suppliers/{id}/edit', [AdminSupplierController::class, 'edit'])->name('admin.suppliers.edit');
            Route::put('/suppliers/{id}', [AdminSupplierController::class, 'update'])->name('admin.suppliers.update');
            Route::delete('/suppliers/{id}', [AdminSupplierController::class, 'destroy'])->name('admin.suppliers.destroy');
            Route::get('/show-suppliers/{id}', [AdminSupplierController::class, 'show'])->name('admin.suppliers.show');
            // Your additional route
            Route::get('/supplier', [AdminSupplierController::class, 'index'])->name('admin.supplier.list');
            Route::get('/buyers', [AdminbuyerController::class, 'index'])->name('admin.buyers.index');
            Route::get('/buyers/create', [AdminbuyerController::class, 'create'])->name('admin.buyers.create');
            Route::post('/buyers', [AdminbuyerController::class, 'store'])->name('admin.buyers.store');
            Route::get('/buyers/{id}/edit', [AdminbuyerController::class, 'edit'])->name('admin.buyers.edit');
            Route::put('/buyers/{id}', [AdminbuyerController::class, 'update'])->name('admin.buyers.update');
            Route::delete('/buyers/{id}', [AdminbuyerController::class, 'destroy'])->name('admin.buyers.destroy');
            Route::get('/show-buyers/{id}', [AdminbuyerController::class, 'show'])->name('admin.buyers.show');
            // Your additional route
            Route::get('/buyer', [AdminbuyerController::class, 'index'])->name('admin.buyer.list');


            Route::get('/categories', [AdminCategoryController::class, 'index'])->name('admin.categories.index');
            Route::get('/categories/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('/categories', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/categories/{id}/edit', [AdminCategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::put('/categories/{id}', [AdminCategoryController::class, 'update'])->name('admin.categories.update');
            Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.categories.destroy');
            Route::get('/show-category/{id}', [AdminCategoryController::class, 'show'])->name('admin.categories.show');
            // Your additional route
            Route::get('/category', [AdminCategoryController::class, 'index'])->name('admin.category.list');



            Route::get('/sliders', [AdminSliderController::class, 'index'])->name('admin.sliders.index');
            Route::get('/sliders/create', [AdminSliderController::class, 'create'])->name('admin.sliders.create');
            Route::post('/sliders', [AdminSliderController::class, 'store'])->name('admin.sliders.store');
            Route::get('/sliders/{id}/edit', [AdminSliderController::class, 'edit'])->name('admin.sliders.edit');
            Route::put('/sliders/{id}', [AdminSliderController::class, 'update'])->name('admin.sliders.update');
            Route::delete('/sliders/{id}', [AdminSliderController::class, 'destroy'])->name('admin.sliders.destroy');



            Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
            Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
            Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
            Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
            Route::put('/news/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
            Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');
            Route::get('/admin/news/{id}', [AdminNewsController::class, 'show'])->name('admin.news.show');



            Route::get('/blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
            Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
            Route::post('/blogs', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
            Route::get('/blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
            Route::put('/blogs/{id}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
            Route::delete('/blogs/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
            Route::delete('blogs/{blog}', [AdminBlogController::class, 'show'])->name('admin.blogs.show');
      



            Route::get('/faqs', [AdminFaqController::class, 'index'])->name('admin.faqs.index');
            Route::get('/faqs/create', [AdminFaqController::class, 'create'])->name('admin.faqs.create');
            Route::post('/faqs', [AdminFaqController::class, 'store'])->name('admin.faqs.store');
            Route::get('/faqs/{id}/edit', [AdminFaqController::class, 'edit'])->name('admin.faqs.edit');
            Route::put('/faqs/{id}', [AdminFaqController::class, 'update'])->name('admin.faqs.update');
            Route::delete('/faqs/{id}', [AdminFaqController::class, 'destroy'])->name('admin.faqs.destroy');



            Route::get('/currencies', [AdminCurrencyController::class, 'index'])->name('admin.currencies.index');
            Route::get('/currencies/create', [AdminCurrencyController::class, 'create'])->name('admin.currencies.create');
            Route::post('/currencies', [AdminCurrencyController::class, 'store'])->name('admin.currencies.store');
            Route::get('/currencies/{id}/edit', [AdminCurrencyController::class, 'edit'])->name('admin.currencies.edit');
            Route::put('/currencies/{id}', [AdminCurrencyController::class, 'update'])->name('admin.currencies.update');
            Route::delete('/currencies/{id}', [AdminCurrencyController::class, 'destroy'])->name('admin.currencies.destroy');






        });





        // Logout route
        Route::any('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});

// Supplier routes


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
