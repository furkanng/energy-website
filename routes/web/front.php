<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('front.home');
Route::get('/hakkimizda', [HomeController::class, 'about'])->name('front.about');
Route::get('/urun-gruplari', [HomeController::class, 'category'])->name('front.category');
Route::get('/fiyat', [HomeController::class, 'price'])->name('front.price');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/blog/{seo_link}', [HomeController::class, 'blog'])->name('front.blog');
Route::get('/urun', [HomeController::class, 'product'])->name('front.product');
