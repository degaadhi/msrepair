<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PriceListController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SettingsController;
use App\Models\PriceList;
use App\Models\Portfolio;
use App\Models\Subscriber;

/*
|--------------------------------------------------------------------------
| Public (Frontend) Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home', ['activePage' => 'home']);
});

Route::get('/pricelist', function () {
    $services = PriceList::where('status', 'active')->get();
    return view('pricelist', ['activePage' => 'pricelist', 'services' => $services]);
});

Route::get('/portfolio', function () {
    $portfolios = Portfolio::where('visibility', 'public')->latest()->get();
    return view('portfolio', ['activePage' => 'portfolio', 'portfolios' => $portfolios]);
});

Route::get('/contact', function () {
    return view('contact', ['activePage' => 'contact']);
});

Route::post('/subscribe', function (\Illuminate\Http\Request $request) {
    $request->validate(['email' => 'required|email']);

    $exists = Subscriber::where('email', $request->email)->exists();
    if ($exists) {
        return back()->with('subscribe_info', 'Email Anda sudah terdaftar sebelumnya!');
    }

    Subscriber::create(['email' => $request->email]);
    return back()->with('subscribe_success', 'Terima kasih! Email Anda berhasil didaftarkan.');
})->name('subscribe');

/*
|--------------------------------------------------------------------------
| Admin Auth Routes (Guest Only)
|--------------------------------------------------------------------------
*/
// Tambahkan redirect dasar dari /admin ke /admin/dashboard
Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin')->middleware('guest')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
});

Route::match(['get', 'post'], '/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Protected Routes (Auth Required)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Price Lists
    Route::get('/pricelist', [PriceListController::class, 'index'])->name('admin.pricelist');
    Route::get('/pricelist/create', [PriceListController::class, 'create'])->name('admin.pricelist.create');
    Route::post('/pricelist', [PriceListController::class, 'store'])->name('admin.pricelist.store');
    Route::get('/pricelist/{id}/edit', [PriceListController::class, 'edit'])->name('admin.pricelist.edit');
    Route::put('/pricelist/{id}', [PriceListController::class, 'update'])->name('admin.pricelist.update');
    Route::delete('/pricelist/{id}', [PriceListController::class, 'destroy'])->name('admin.pricelist.destroy');

    // Portfolios
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
    Route::post('/portfolio', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
    Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
    Route::post('/settings/profile', [SettingsController::class, 'updateProfile'])->name('admin.settings.profile');
    Route::post('/settings/store', [SettingsController::class, 'updateStore'])->name('admin.settings.store');
    Route::post('/settings/password', [SettingsController::class, 'updatePassword'])->name('admin.settings.password');
});
