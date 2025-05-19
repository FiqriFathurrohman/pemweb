<?php

use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/beasiswa', [FrontendController::class, 'index'])->name('beasiswa');
