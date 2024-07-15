<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\SubCategoryController;

Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/transaction/{id}', [HomeController::class, 'buyNow'])->name('transactionModal');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {



    Route::get('/dashboard', [DashBoardController::class, 'adminPage']);

    Route::get('/add-category', [CategoryController::class, 'create'])->name('category.add');
    Route::post('/new-category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');


    Route::get('/add-subCategory', [SubCategoryController::class, 'create'])->name('subCategory.add');
    Route::post('/new-subCategory', [SubCategoryController::class, 'store'])->name('subCategory.store');
    Route::get('/manage-subCategory', [SubCategoryController::class, 'manage'])->name('subCategory.manage');
    Route::get('/edit-subCategory/{id}', [SubCategoryController::class, 'edit'])->name('subCategory.edit');
    Route::post('/update-subCategory/{id}', [SubCategoryController::class, 'update'])->name('subCategory.update');
    Route::get('/delete-subCategory/{id}', [SubCategoryController::class, 'delete'])->name('subCategory.delete');

    Route::get('/add-product', [ProductController::class, 'create'])->name('product.add');
    Route::post('/new-product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('product.delete');


    Route::get('/manage-transaction', [TransactionController::class, 'show'])->name('transaction.manage');
});
