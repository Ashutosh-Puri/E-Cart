<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\AOrderController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\UInvoiceController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\Admin\CategoryController;

//guest
Route::controller(HomeController::class)->group( function () {
    Route::get('/', 'index')->name('home');
    Route::get('productlist', 'products');
    Route::get('viewproduct/{product_id}',  'view_products');
    Route::get('thankyou', 'thankyou');
    Route::get('contactus', 'contact');
    Route::get('aboutus', 'aboutus');
    Route::post('subscribe', 'subscribe');
    Route::get('unsubscribe', 'unsub');
    Route::post('unsubscribe', 'unsubscribe');
    
});

Auth::routes(['verify'=>true]);

// admin routes
Route::middleware(['auth','admin','verified'])->group( function () {

    Route::get('product/{id}/delete', [ProductController::class,'delete']);
    Route::resources([
        'category' => CategoryController::class,
        'admin' => AdminController::class,
        'brand' => BrandController::class,
        'product' => ProductController::class,
        'color' => ColorController::class,
        'aorder'=> AOrderController::class,
        
    ]);  
});
    
// user routes
Route::middleware(['auth','verified'])->group( function () {

    Route::resources([
        'orders'=> OrderController::class,
        'wishlist'=> WishlistController::class, 
        'cart'=> CartController::class,
        'checkout'=> CheckoutController::class,
        'uinvoice'=> UInvoiceController::class,
        'contact'=> ContactController::class,

    ]);
    
});