<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;

Route::get('/', function(){ return redirect()->route('products.index'); });

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class)->except(['show']);
Route::resource('transactions', TransactionController::class)->only(['index','create','store']);
Route::get('reports', [ReportController::class,'index'])->name('reports.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.view');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.view');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/data', [DashboardController::class, 'data'])->name('dashboard.data');
Route::get('/', function () { return redirect()->route('dashboard.index'); });
