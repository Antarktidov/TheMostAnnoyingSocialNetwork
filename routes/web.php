<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Middleware\UserMiddleware;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->middleware(UserMiddleware::class)->name('posts.create');
Route::post('/store', [PostController::class, 'store'])->middleware(UserMiddleware::class)->name('posts.store');
Route::post('/{post}/add-reaction', [PostController::class, 'addReaction'])->middleware(UserMiddleware::class)->name('posts.addReaction');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
