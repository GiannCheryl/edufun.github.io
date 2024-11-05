<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show'); 

Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show'); 

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show'); 

Route::get('/about', [AboutController::class, 'index'])->name('about.index');