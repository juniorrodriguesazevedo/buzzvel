<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

Route::get('/', [QrCodeController::class, 'index'])->name('qrcode.index');
Route::post('/', [QrCodeController::class, 'store'])->name('qrcode.store');
Route::get('/{qrCode}', [QrCodeController::class, 'show'])->name('qrcode.show');
Route::get('/profile/{name}', [QrCodeController::class, 'profile'])->name('qrcode.profile');
