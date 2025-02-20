<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', [
        'books' => [
             ['titre' => 'lala'],
             ['titre' => 'hoho'], 
             ['titre' => 'momo']
         ]
    ]);
});

Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
