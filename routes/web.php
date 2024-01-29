<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BazarController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Sub_CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
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

Route::get('/', [BazarController::class, 'index'])->name('home');
Route::get('/product-category/{id}', [BazarController::class, 'category'])->name('product-category');
Route::get('/product-subCategory/{id}', [BazarController::class, 'subCategory'])->name('product-subCategory');
Route::get('/product-detail/{id}', [BazarController::class, 'detail'])->name('product-detail');
Route::get('/show-cart', [CartController::class, 'index'])->name('show-cart');
Route::get('/show-checkout', [CheckoutController::class, 'index'])->name('show-checkout');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/category/add',[CategoryController::class, 'index'])->name('category.add');
    Route::get('/category/manage',[CategoryController::class, 'manage'])->name('category.manage');
    Route::post('/category/store',[CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');


    Route::get('/sub-category/add',[Sub_CategoryController::class, 'index'])->name('sub-category.add');
    Route::get('/sub-category/manage',[Sub_CategoryController::class, 'manage'])->name('sub-category.manage');
    Route::post('/sub-category/store',[Sub_CategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category/edit/{id}',[Sub_CategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}',[Sub_CategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}',[Sub_CategoryController::class, 'delete'])->name('sub-category.delete');


    Route::get('/brand/add',[BrandController::class, 'index'])->name('brand.add');
    Route::get('/brand/manage',[BrandController::class, 'manage'])->name('brand.manage');
    Route::post('/brand/store',[BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}',[BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}',[BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/unit/add',[UnitController::class , 'index'])->name('unit.add');
    Route::get('/unit/manage',[UnitController::class , 'manage'])->name('unit.manage');
    Route::post('/unit/store',[UnitController::class , 'store'])->name('unit.store');
    Route::get('/unit/edit/{id}',[UnitController::class , 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}',[UnitController::class , 'update'])->name('unit.update');
    Route::get('/unit/delete/{id}',[UnitController::class , 'delete'])->name('unit.delete');

    Route::get('/product/add',[ProductController::class, 'index'])->name('product.add');
    Route::get('/get-subcategory-by-category',[ProductController::class, 'getSubCategoryByCategory'])->name('get-subcategory-by-category');
    Route::get('/product/manage',[ProductController::class, 'manage'])->name('product.manage');
    Route::post('/product/store',[ProductController::class, 'store'])->name('product.store');
    Route::get('/product/detail/{id}',[ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');








});
