<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartItemController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ProductController::class, 'home'])->name('products.home');


Route::get('/products/{id}', [ProductController::class, 'page'])->name('products.page', 'addToCart');


// Route::get('products/{id}/image', 'ProductController@showImage')->name('product.image');



Route::get('/cart', [CartItemController::class, 'show'])->name('productsList');

Route::get('/cart', [CartItemController::class, 'showCart'])->name('cartItems');

Route::post('/add-to-cart', [CartItemController::class, 'addToCart'])->name('addToCart');

Route::delete('/cart/{id}', [CartItemController::class, 'deleteCartItem'])->name('deleteCartItem');

Route::get('cart-items/{id}/increase', [CartItemController::class, 'increaseCartItem'])->name('increaseCartItem');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
