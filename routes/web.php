<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');


Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');