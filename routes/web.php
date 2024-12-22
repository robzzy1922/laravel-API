<?php

use App\Mail\SendEmail;
use App\Http\Controllers\TeleApi;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

Route::get('/', [TeleApi::class, 'index']);
Route::post('sendMessage', [TeleApi::class, 'sendMessage'])->name('sendMessage');

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
