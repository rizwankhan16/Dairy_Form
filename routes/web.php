<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserRole;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\subCategoryController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\productDiscountController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Seller\SellerConroller;
use App\Http\Controllers\Seller\SellerProductConroller;
use App\Http\Controllers\Seller\sellerStoreController;
use App\Http\Controllers\Customer\CustomerController;



Route::get('/', function () {
    return view('welcome');
});



// Admin  Routes
Route::middleware(['auth', 'verified','UserRole:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin');
        Route::get('/setting', 'setting')->name('admin.setting');
        Route::get('/manage/user', 'manage_user')->name('admin.manage.user');
        Route::get('/manage/store', 'manage_store')->name('admin.manage.storge');
        Route::get('/cart/history', 'cart_history')->name('admin.cart.history');
        Route::get('/order/history', 'order_history')->name('admin.order.history');
       
    });
        Route::controller(categoryController::class)->group(function () {
            Route::get('/category/create', 'create')->name('category .create');
            Route::get('/category/manage', 'manage')->name('category .manage');
           
        });
        Route::controller(subCategoryController ::class)->group(function () {
            Route::get('/subcategory/create', 'create')->name('subcategory .create');
            Route::get('/subcategory/manage', 'manage')->name('subcategory .manage');;

        });
        Route::controller(productController ::class)->group(function () {
            Route::get('/product/create', 'create')->name('product .create');
            Route::get('/product/review/manage', 'manage')->name('product.review .manage');;

        });
        Route::controller(ProductAttributeController ::class)->group(function () {
            Route::get('/product/Attribute/create', 'create')->name('Attribute .create');
            Route::get('/Attribute/manage', 'manage')->name('Attribute .manage');;
        });  
        Route::controller(productDiscountController ::class)->group(function () {
            Route::get('/product/Discount/create','create')->name('discount .create');
            Route::get('/product/Discount/manage','manage')->name('discount .manage');;
    });
    
});
});

//  seller  Routes
Route::middleware(['auth', 'verified','UserRole:seller'])->group(function () {
    Route::prefix('seller')->group(function () {
    Route::controller(SellerConroller::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/order/history', 'order_history')->name('order.history');
    });
    Route::controller(SellerProductConroller::class)->group(function () {
        Route::get('/product/create', 'create')->name('seller.product.create');
        Route::get('/product/manage', 'manage')->name('seller.product.manage');
    });
    

Route::controller(sellerStoreController::class)->group(function () {
    Route::get('/store/create', 'create')->name('seller.store.create');
    Route::get('/store/manage', 'manage')->name('seller.store.manage');
});

    
});
});
//  customer  Routes

Route::middleware(['auth', 'verified','UserRole:user'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::controller(CustomerController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('profile');
            Route::get('/order/payment', 'payment')->name('customer.payment');
            Route::get('/order/history', 'payment')->name('customer.history');
            Route::get('affliate', 'affliate')->name('customer.affliate');
        }); 
        });
        });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
