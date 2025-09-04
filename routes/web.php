<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TableController;

Route::get('/', [MenuController::class, 'index'])->name('Home');