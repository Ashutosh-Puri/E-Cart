<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();





// Route::prefix('admin')->middleware(['auth','admin'])->controller(AdminController::class)->group( function () {

// Route::get('/dashboard',  'dashboard')->name('admin.dashboard');

// });

Route::middleware(['auth','admin'])->group( function () {

    Route::get('product/{id}/delete', [ProductController::class,'delete']);
    Route::get('product/color/{id}/delete', [ProductController::class,'color_delete']);
    Route::post('product/color/{id}/update', [ProductController::class,'color_update']);
    Route::resources([
        'category' => CategoryController::class,
        'admin' => AdminController::class,
        'brand' => BrandController::class,
        'product' => ProductController::class,
        'color' => ColorController::class,
        
    ]);
   
    
});
    

Route::middleware(['auth'])->group( function () {

    Route::resources([
        'user' => UserController::class,
        
    ]);
    
});