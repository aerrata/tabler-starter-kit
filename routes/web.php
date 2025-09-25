<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
  Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/auth.php';