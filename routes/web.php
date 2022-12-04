<?php

use App\Http\Controllers\View;
use App\Http\Controllers\Forms;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Auth\Signin;
use App\Http\Controllers\Auth\Signup;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [View::class, 'index'])->name('index');

Route::get('cart/', [View::class, 'cart'])->name('cart');

Route::get('favorite/', [View::class, 'fav'])->name('fav');

Route::get('about/', [View::class, 'about'])->name('about');

Route::get('checkout/', [View::class, 'checkout'])->name('checkout');

Route::get('product/{id}/', [View::class, 'product'])->name('product');

Route::get('categories/', [View::class, 'categories'])->name('categories');

Route::get('category/{id}/', [View::class, 'category'])->name('category');

Route::post('subscribe/', [Forms::class, 'subscription'])->name('subscribe');

// authentications
Route::get('/logout', [Forms::class, 'logout'])->name('logout');

Route::get('/signup', [Signup::class, 'get'])->name('signup');
Route::post('/signup', [Signup::class, 'post']);

Route::get('/signin', [Signin::class, 'get'])->name('signin');
Route::post('/signin', [Signin::class, 'post']);

Route::get('contact/', [Contact::class, 'get'])->name('contact');
Route::post('contact/', [Contact::class, 'post']);
