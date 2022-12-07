<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Account\LoginController;
use App\Http\Controllers\Table\ProductController;
use App\Http\Controllers\Table\CategoryController;
use App\Http\Controllers\Account\RegisterController;
use App\Http\Controllers\ShoppingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// auth routes
Route::resource('login', LoginController::class)->only("index", "store");
Route::resource('register', RegisterController::class)->only("index", "store");

// admin routes
Route::group(['prefix' => "admin", 'name' => "admin"], function () {
    Route::get('', [AdminController::class, 'index'])->name("admin");
    Route::get('db', [AdminController::class, 'database'])->name("admin.db");
    Route::group(
        ['prefix' => "db"],
        function () {
            Route::resource('product', ProductController::class)->names("admin.product");
            Route::resource('category', CategoryController::class)->names("admin.category");
        }
    );
});

// main routes
Route::get('', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('checkout', [MainController::class, 'checkout'])->name('checkout');
Route::post('subscribe', [MainController::class, 'subscribe'])->name('subscribe');
Route::get('contact', [MainController::class, 'get_contact'])->name('contact.get');
Route::get('product/{product}', [MainController::class, 'product'])->name('product');
Route::post('contact', [MainController::class, 'post_contact'])->name('contact.post');
Route::get('category/{category}', [MainController::class, 'category'])->name('category');

//shopping routes
Route::get('cart', [ShoppingController::class, 'cart'])->name('cart');
Route::get('checkout', [ShoppingController::class, 'checkout'])->name('checkout');
