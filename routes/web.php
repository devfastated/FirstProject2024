<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Notification;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/notificationt', [Notification::class,'notif'])->name('notif');

