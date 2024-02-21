<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[ProductController::class,'index'])->name('welcome');

Auth::routes();

///// Authenticated Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home/mylocation', [App\Http\Controllers\HomeController::class, 'location'])->name('mylocation');
Route::get('/home/myorder', [App\Http\Controllers\HomeController::class, 'myorder'])->name('myorder');
Route::get('/home/mycart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/home/mywish', [App\Http\Controllers\HomeController::class, 'wish'])->name('wish');
Route::get('/home/check/cart', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::get('/home/addcart/{id}', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/home/addwish/{id}', [CartController::class, 'add_to_wish'])->name('add_to_wish');
Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->name('delete.cart.product');
Route::delete('/remove-cart-product', [ProductController::class, 'removeProduct'])->name('remove.cart.product');

route::post('/home/checkout', [HomeController::class,'paymentmethod'])->name('payment');
route::get('/home/add_category',[MainController::class,'category'])->name('add_category');
route::post('/home/storeproduct', [MainController::class,'store'])->name('store');
route::get('/home/delete_product/{id}',[MainController::class,'delete_product'])->name('delete_product');
