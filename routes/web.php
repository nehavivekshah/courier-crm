<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index']);

use App\Http\Controllers\ClientController;
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

use App\Http\Controllers\ReceiverController;
Route::get('/receivers', [ReceiverController::class, 'index'])->name('receivers.index');

use App\Http\Controllers\BookingController;
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::get('/bookings/history', [BookingController::class, 'history'])->name('bookings.history');

use App\Http\Controllers\LogisticController;
Route::get('/logistics/inwards', [LogisticController::class, 'inwards'])->name('logistics.inwards');
Route::get('/logistics/drs-uploads', [LogisticController::class, 'drsUploads'])->name('logistics.drs');
Route::get('/logistics/drs-print', [LogisticController::class, 'drsPrint'])->name('logistics.drs.print');
Route::get('/logistics/barcodes', [LogisticController::class, 'barcodes'])->name('logistics.barcodes');

use App\Http\Controllers\FinancialController;
Route::get('/financials/income', [FinancialController::class, 'income'])->name('financials.income');
Route::get('/financials/expense', [FinancialController::class, 'expense'])->name('financials.expense');
Route::get('/financials/purchase-bills', [FinancialController::class, 'purchaseBills'])->name('financials.purchase-bills');

use App\Http\Controllers\ComplaintController;
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');

use App\Http\Controllers\EnquiryController;
Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');

use App\Http\Controllers\ProfileController;
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

use App\Http\Controllers\ConfigController;
Route::get('/config/carriers', [ConfigController::class, 'carriers'])->name('config.carriers');
Route::get('/config/centers', [ConfigController::class, 'centers'])->name('config.centers');
Route::get('/config/zones', [ConfigController::class, 'zones'])->name('config.zones');
Route::get('/config/charges', [ConfigController::class, 'charges'])->name('config.charges');
Route::get('/config/rates', [ConfigController::class, 'rates'])->name('config.rates');
Route::get('/config/gst', [ConfigController::class, 'gst'])->name('config.gst');

use App\Http\Controllers\ReportController;
Route::get('/reports/booking', [ReportController::class, 'booking'])->name('reports.booking');
Route::get('/reports/delivery', [ReportController::class, 'delivery'])->name('reports.delivery');
Route::get('/reports/bill-pending', [ReportController::class, 'billPending'])->name('reports.bill-pending');
Route::get('/reports/daily-collection', [ReportController::class, 'dailyCollection'])->name('reports.daily-collection');
Route::get('/reports/gst', [ReportController::class, 'gst'])->name('reports.gst');
