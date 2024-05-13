<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('jobs.index');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController:: class, 'create']);
    Route::post('/register', [RegisterUserController:: class, 'store']);

    Route::get('/login', [SessionController:: class, 'create'])->name('login.create');
    Route::post('/login', [SessionController:: class, 'store'])->name('login.store');
});


Route::delete('/login', [SessionController:: class, 'destroy'])->name('login.destroy')->middleware('auth');
