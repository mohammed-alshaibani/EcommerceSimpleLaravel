<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CouponController;
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


Route::get('/dashboard', function () {
    return view('dashboard.Admin.Index');
});
Route::get('/user', function () {
    return view('dashboard.User.Index');
});

Route::prefix('dashboard/Product')->group(function () {
    Route::get('/',[ProductController::class, 'index'])->name('Product.Index');
    Route::get('/Create', [ProductController::class, 'create'])->name('Product.Create');
    Route::post('/Create', [ProductController::class, 'store'])->name('Product.Store');
    Route::get('/Edit/{product}/edit', [ProductController::class, 'edit'])->name('Product.edit');
    Route::put('/Edit/{product}', [ProductController::class, 'update'])->name('Product.Update');
    Route::delete('/Destroy/{product}', [ProductController::class, 'destroy'])->name('Product.Destroy');
});

Route::prefix('dashboard/Category')->group(function () {
    Route::get('/',[CategoryController::class, 'index'])->name('Category.Index');
    Route::get('/Create', [CategoryController::class, 'create'])->name('Category.Create');
    Route::post('/Create', [CategoryController::class, 'store'])->name('Category.Store');
    Route::get('/Edit/{product}/edit', [CategoryController::class, 'edit'])->name('Category.edit');
    Route::put('/Edit/{product}', [CategoryController::class, 'update'])->name('Category.Update');
    Route::delete('/Destroy/{product}', [CategoryController::class, 'destroy'])->name('Category.Destroy');
});

Route::prefix('dashboard/Order')->group(function () {
    Route::get('/',[OrderController::class, 'index'])->name('Order.Index');
    Route::get('/Create', [OrderController::class, 'create'])->name('Order.Create');
    Route::post('/Create', [OrderController::class, 'store'])->name('Order.Store');
    Route::get('/Edit/{product}/edit', [OrderController::class, 'edit'])->name('Order.edit');
    Route::put('/Edit/{product}', [OrderController::class, 'update'])->name('Order.Update');
    Route::delete('/Destroy/{product}', [OrderController::class, 'destroy'])->name('Order.Destroy');
});

Route::prefix('dashboard/Coupon')->group(function () {
    Route::get('/',[CouponController::class, 'index'])->name('Coupon.Index');
    Route::get('/Create', [CouponController::class, 'create'])->name('Coupon.Create');
    Route::post('/Create', [CouponController::class, 'store'])->name('Coupon.Store');
    Route::get('/Edit/{product}/edit', [CouponController::class, 'edit'])->name('Coupon.edit');
    Route::put('/Edit/{product}', [CouponController::class, 'update'])->name('Coupon.Update');
    Route::delete('/Destroy/{product}', [CouponController::class, 'destroy'])->name('Coupon.Destroy');
});
Auth::routes();