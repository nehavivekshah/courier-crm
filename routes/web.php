<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReceiverController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\ConfigController;

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Protected CRM Panel Routes
Route::middleware('auth')->group(function () {

    // Shared Routes (Dashboard & Profile)
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    // Agent / Manager / Admin Access (General Operations)
    Route::middleware('role:Admin,Manager,Agent')->group(function () {
        Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
        Route::get('/receivers', [ReceiverController::class, 'index'])->name('receivers.index');
        Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
        Route::get('/bookings/history', [BookingController::class, 'history'])->name('bookings.history');
    });

    // Manager / Admin Access (Logistics, Support & Reports)
    Route::middleware('role:Admin,Manager')->group(function () {
        Route::get('/logistics/inwards', [LogisticController::class, 'inwards'])->name('logistics.inwards');
        Route::get('/logistics/drs-uploads', [LogisticController::class, 'drsUploads'])->name('logistics.drs');
        Route::get('/logistics/drs-print', [LogisticController::class, 'drsPrint'])->name('logistics.drs.print');
        Route::get('/logistics/barcodes', [LogisticController::class, 'barcodes'])->name('logistics.barcodes');
        Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
        Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
        Route::get('/reports/booking', [ReportController::class, 'booking'])->name('reports.booking');
        Route::get('/reports/delivery', [ReportController::class, 'delivery'])->name('reports.delivery');
        Route::get('/reports/bill-pending', [ReportController::class, 'billPending'])->name('reports.bill-pending');
        Route::get('/reports/daily-collection', [ReportController::class, 'dailyCollection'])->name('reports.daily-collection');
        Route::get('/reports/gst', [ReportController::class, 'gst'])->name('reports.gst');
    });

    // Admin Only Access (Financials & Configuration)
    Route::middleware('role:Admin')->group(function () {
        Route::get('/financials/income', [FinancialController::class, 'income'])->name('financials.income');
        Route::get('/financials/expense', [FinancialController::class, 'expense'])->name('financials.expense');
        Route::get('/financials/purchase-bills', [FinancialController::class, 'purchaseBills'])->name('financials.purchase-bills');
        Route::get('/config/carriers', [ConfigController::class, 'carriers'])->name('config.carriers');
        Route::get('/config/centers', [ConfigController::class, 'centers'])->name('config.centers');
        Route::get('/config/zones', [ConfigController::class, 'zones'])->name('config.zones');
        Route::get('/config/charges', [ConfigController::class, 'charges'])->name('config.charges');
        Route::get('/config/rates', [ConfigController::class, 'rates'])->name('config.rates');
        Route::get('/config/gst', [ConfigController::class, 'gst'])->name('config.gst');
    });
});