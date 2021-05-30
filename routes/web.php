<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShippingAddressController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::resource('/products', ProductController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/seller', [App\Http\Controllers\HomeController::class, 'seller'])->name('seller');
Route::get('/buyer', [App\Http\Controllers\HomeController::class, 'buyer'])->name('buyer');
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/shippingAddress', [ShippingAddressController::class, 'index']);


Route::group(['middleware' => ['auth', 'seller']], function() //Yung 'seller', registered sa Kernel.php
{
    Route::get('/dashboard', function () {
        return view('seller.dashboard');
    });
});