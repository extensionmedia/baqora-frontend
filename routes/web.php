<?php

use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StartController::class, 'index'])->name('start');
Route::get('/slug', [StartController::class, 'slug']);
