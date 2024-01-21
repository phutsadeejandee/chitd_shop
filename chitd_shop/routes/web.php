<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'] )->name('home');

Route::get('/create', [ProductController::class,'create']) -> name('create');
Route::post('/create', [ProductController::class,'create']);