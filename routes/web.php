<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

Route::get('/', [QrCodeController::class, 'index'])->name('qrcode.index');
Route::post('/', [QrCodeController::class, 'store'])->name('qrcode.store');
Route::get('/{name}', [QrCodeController::class, 'show'])->name('qrcode.show');