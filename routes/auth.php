<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    // 1. ÖNCE LOGIN TANIMLA (İlk sırada olsun)
    Volt::route('login', 'pages.auth.login')
        ->name('login');

    // 2. SONRA REGISTER TANIMLA
    Volt::route('register', 'pages.auth.register')
        ->name('register');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

// ... (Geri kalan auth kodları aynı kalabilir)