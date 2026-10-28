<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/tentang', 'tentang')->name('tentang');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/komang', function(){
    return view('komang');
});

require __DIR__.'/settings.php';
