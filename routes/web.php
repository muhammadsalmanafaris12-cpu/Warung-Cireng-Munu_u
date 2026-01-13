<?php

use App\Http\Controllers\CirengController;

// Halaman utama (Landing Page)
Route::get('/', function () {
    return view('landing');
});

// Halaman Dashboard Admin (Backend)
Route::prefix('dashboard')->group(function () {
    Route::get('/', [CirengController::class, 'index'])->name('cireng.index');
    Route::post('/pembeli', [CirengController::class, 'store'])->name('pembeli.store');
    Route::put('/update/{id}', [CirengController::class, 'update'])->name('cireng.update');
    Route::delete('/hapus/{id}', [CirengController::class, 'destroy'])->name('cireng.destroy');
});