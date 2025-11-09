<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PopularController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/post/{slug}', [DetailController::class, 'show'])->name('post.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writers.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/popular', [PopularController::class, 'index'])->name('popular');
