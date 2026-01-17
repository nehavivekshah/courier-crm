<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index']);

use App\Http\Controllers\BookingController;
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');

use App\Http\Controllers\LogisticController;
Route::get('/logistics/inwards', [LogisticController::class, 'inwards'])->name('logistics.inwards');
Route::get('/logistics/drs-uploads', [LogisticController::class, 'drsUploads'])->name('logistics.drs');
Route::get('/logistics/drs-print', [LogisticController::class, 'drsPrint'])->name('logistics.drs.print');

use App\Http\Controllers\ComplaintController;
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
