<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BookController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/barang', [BarangController::class, 'index'])->middleware('auth')->name('barang.index');
Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware('auth')->name('transaksi.index');

Route::get('books', [BookController::class,'']);
