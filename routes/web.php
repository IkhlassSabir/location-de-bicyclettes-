<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BikeController;

Route::get('/', function () {
    return view('welcome');
});

// routes/api.php

Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');



// // routes/web.php



Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');
// Ajoutez d'autres routes pour afficher, mettre à jour et supprimer des vélos si nécessaire


