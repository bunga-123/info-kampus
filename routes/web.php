<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;

Route::get('/kampus', [KampusController::class, 'index'])->name('kampus.index');
Route::get('/kampus/{id}', [KampusController::class, 'show'])->name('kampus.show');
