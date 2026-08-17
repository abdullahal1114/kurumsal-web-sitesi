<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Volt;

// Ana Sayfa
Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
})->name('home');

// KURUMSAL Ana Sayfası (Kök dizinde, çakışma yok)
Route::get('/kurumsal', function () {
    return view('Kurumsal.index');
})->name('kurumsal');

// Kurumsal Alt Sayfaları
Route::prefix('kurumsal')->name('kurumsal.')->group(function () {
    Route::view('/hakkimizda', 'Kurumsal.hakkimizda')->name('hakkimizda');
    Route::view('/vizyon-misyon', 'Kurumsal.vizyon-misyon')->name('vizyon-misyon');
    Route::view('/haberler', 'Kurumsal.haberler')->name('haberler');
    Route::view('/belgeler', 'Kurumsal.belgeler')->name('belgeler');
});

// Diğer Rotalar
Route::view('/referanslar', 'referanslar')->name('referanslar');
Route::view('/urunler', 'urunler')->name('urunler');
Route::view('/magaza', 'magaza')->name('magaza');
Route::view('/iletisim', 'iletisim')->name('iletisim');
Route::view('/dashboard#', 'kurumsal')->name('kurumsal');



// Yasal Sayfalar
Route::view('/privacy-policy', 'legal.privacy-policy')->name('policy.show');
Route::view('/terms-of-service', 'legal.terms-of-service')->name('terms.show');

// Ödeme / Satın Alma Sayfası (Sepet -> Satın Al -> buraya düşer)
Volt::route('/odeme', 'checkout')->name('odeme');

require __DIR__.'/auth.php';

Route::view('dashboard', 'livewire.pages.auth.home')
    ->middleware(['auth', 'verified'])->name('dashboard');