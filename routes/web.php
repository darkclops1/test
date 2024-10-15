<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'submitRegisterForm']);
Route::get('/welcome', [AuthController::class, 'showWelcomePage'])->name('welcome');
