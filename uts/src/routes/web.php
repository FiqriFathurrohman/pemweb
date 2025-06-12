<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaBeasiswaController;

Route::get('/', [PenerimaBeasiswaController::class, 'index'])->name('home');
Route::get('/penerima-beasiswa', [PenerimaBeasiswaController::class, 'index'])->name('penerima-beasiswa.index');
