<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);

Route::get('', fn()=>to_route('jobs.index'));
Route::get('login', fn()=>to_route('auth.create'));
Route::resource('auth', AuthController::class)
    ->only(['create','store']);
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])
    ->name('auth.destroy');
