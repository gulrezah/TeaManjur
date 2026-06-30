<?php

use App\Http\Controllers\Frontend\AppController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/ai-solutions', [PageController::class, 'aiSolutions'])->name('ai-solutions');
Route::get('/web-development', [PageController::class, 'webDevelopment'])->name('web-development');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio.index');
Route::get('/apps', [AppController::class, 'index'])->name('apps.index');
Route::get('/apps/{slug}', [AppController::class, 'show'])->name('apps.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/contact', ContactController::class)->name('contact');
