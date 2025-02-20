<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// book
Route::get('/books', [HomeController::class, 'books'])->name('books');
Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');