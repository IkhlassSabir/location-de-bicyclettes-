<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BikeController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');
Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);




