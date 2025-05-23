<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landingpage/index');

Route::get('/', [HomeController::class, 'index'])->name('home');




//Auth Route
//Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/login', action: [UserController::class, 'UserLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'UserRegister'])->name('register');
Route::post('/register', [UserController::class, 'register']);
