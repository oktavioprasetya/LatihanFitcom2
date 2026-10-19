<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return redirect()->route('siswa.index');
});

Route::get('/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');

Route::get('/siswa/tambah', [SiswaController::class, 'create'])
    ->name('siswa.create');

Route::post('/siswa', [SiswaController::class, 'store'])
    ->name('siswa.store');