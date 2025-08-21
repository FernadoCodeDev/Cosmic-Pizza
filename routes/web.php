<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MenuControllerController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('table', TableController::class);
Route::resource('menu', TableController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
