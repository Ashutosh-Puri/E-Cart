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





Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('productlist', [HomeController::class, 'products']);
Route::get('viewproduct/{product_id}', [HomeController::class, 'view_products']);
Route::get('thankyou', [HomeController::class, 'thankyou']);
Route::get('contactus', [HomeController::class, 'contact']);
Route::get('aboutus', [HomeController::class, 'aboutus']);
Route::post('subscribe', [HomeController::class, 'subscribe']);
Route::get('unsubscribe', [HomeController::class, 'unsub']);
Route::post('unsubscribe', [HomeController::class, 'unsubscribe']);
Route::middleware(['auth','admin'])->group( function () {

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
    

Route::middleware(['auth'])->group( function () {

    Route::resources([
        'orders'=> OrderController::class,
        'wishlist'=> WishlistController::class, 
        'cart'=> CartController::class,
        'checkout'=> CheckoutController::class,
        'uinvoice'=> UInvoiceController::class,
        'contact'=> ContactController::class,
    ]);
    
});