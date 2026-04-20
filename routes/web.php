<?php

declare(strict_types=1);

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (): Factory|\Illuminate\Contracts\View\View => view('welcome'));
Route::get('/dashboard', fn (): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View => view('dashboard'))->middleware(['auth'])->name('dashboard');
