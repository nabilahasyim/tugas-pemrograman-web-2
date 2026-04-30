<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// HOME
Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// READ
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// CREATE
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// EDIT
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

// DELETE
Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');